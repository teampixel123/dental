<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct(){
    parent:: __construct();
    $this->load->model('Admin_Model');
    // $this->load->model('Login_Model');
  }

  public function index(){
    $this->load->view('admin/admin_login');
  }

  public function check_login(){
    $admin_username = $this->input->post('admin_username');
    $admin_password = $this->input->post('admin_password');
    $check_login = $this->Admin_Model->check_login($admin_username, $admin_password);
    if($check_login){
      $admin_id = $check_login[0]['admin_id'];
      $this->session->set_userdata('admin_id',$admin_id);
      header('location:'.base_url().'Admin/dashboard');
    }
    else{
      $this->session->set_flashdata('login','error');
      header('location:'.base_url().'Admin');
    }
    // echo print_r($check_login);
  }

  public function dashboard(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $this->load->view('admin/dashboard');
    }
    else{
      header('location:'.base_url().'Admin');
    }
  }

  public function add_blog(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $this->load->view('admin/add_blog');
    }
    else{
      header('location:'.base_url().'Admin');
    }
  }

  public function save_blog(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $photo_id = random_string('nozero',8);
      $date = date('M d, Y');
      $config['upload_path']="assets/images/blogs";
      $config['allowed_types']='gif|jpg|png';
      $config['file_name']='Blog_'.$photo_id;
      $filename=$_FILES['blog_image']['name'];
      $ext= pathinfo($filename,PATHINFO_EXTENSION);
      $this->load->library('upload',$config);
      if($this->upload->do_upload("blog_image")){
        // if($old_photo != 'default_profile.png'){
        //   unlink('./assets/images/will_user/'.$old_photo);
        // }
        $data = array('upload_data' => $this->upload->data());

        $blog_data = array(
        'blog_title' => $this->input->post('blog_title'),
        'blog_writer_name' => $this->input->post('blog_writer_name'),
        'blog_short_description' => $this->input->post('blog_short_description'),
        'blog_details' => $this->input->post('blog_details'),
        'blog_image' =>$data['upload_data']['file_name'],
        'blog_date'=>$date
        );
        $this->Admin_Model->save_blog($blog_data);
        $this->session->set_flashdata('is_success','save');
      }
      else{
        $this->session->set_flashdata('is_success','error');
      }
      header('location:'.base_url().'Admin/add_blog');
    }
    else{
      header('location:'.base_url().'Admin');
    }
  }

  public function blog_list(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $data['blog_list'] = $this->Admin_Model->get_blog_list();

      $this->load->view('admin/blog_list', $data);
    }
    else{
      header('location:'.base_url().'Admin');
    }
  }

  public function blog_details(){
    $admin_id = $this->session->userdata('admin_id');

    if($admin_id){
      $blog_id = $this->input->post('blog_id');
      if ($blog_id) {
        $data['blog_details'] = $this->Admin_Model->blog_details($blog_id);
        $this->load->view('admin/blog_details', $data);
      }
      else{
        header('location:'.base_url().'Admin/blog_list');
      }
    }
    else{
      header('location:'.base_url().'Admin');
    }
  }

  public function blog_edit(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $blog_id = $this->input->post('blog_id');
      if($blog_id){
        $data['blog_details'] = $this->Admin_Model->blog_details($blog_id);
        $this->load->view('admin/blog_edit', $data);
      }
      else{
        header('location:'.base_url().'Admin/blog_list');
      }
      // $data['blog_list'] = $this->Admin_Model->get_blog_list();

    }
    else{
      header('location:'.base_url().'Admin');
    }
  }

  public function update_blog(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $date = date('M d, Y');
      $blog_id = $this->input->post('blog_id');
      $update_blog_data = array(
        'blog_title' => $this->input->post('blog_title'),
        'blog_writer_name' => $this->input->post('blog_writer_name'),
        'blog_short_description' => $this->input->post('blog_short_description'),
        'blog_details' => $this->input->post('blog_details'),
        'blog_date'=>$date
      );
      $query = $this->Admin_Model->update_blog($blog_id, $update_blog_data);
      $this->session->set_flashdata('is_success','update');
      header('location:'.base_url().'Admin/blog_list');
    }
    else{
      header('location:'.base_url().'Admin');
    }
  }

  public function update_image(){
    $admin_id = $this->session->userdata('admin_id');
    if($admin_id){
      $blog_id = $this->input->post('blog_id');
      if($blog_id){

        $photo_id = random_string('nozero',8);
        $date = date('M d, Y');
        $config['upload_path']="assets/images/blogs";
        $config['allowed_types']='gif|jpg|png';
        $config['file_name']='Blog_'.$photo_id;
        $filename=$_FILES['blog_image']['name'];
        $ext= pathinfo($filename,PATHINFO_EXTENSION);
        $this->load->library('upload',$config);
        if($this->upload->do_upload("blog_image")){
          $old_photo = $this->input->post('old_photo');
          if($old_photo != 'default_profile.png'){
            unlink('./assets/images/blogs/'.$old_photo);
          }
          $data = array('upload_data' => $this->upload->data());

          $blog_image_update = array(
          'blog_image' =>$data['upload_data']['file_name'],
          );
          $this->Admin_Model->update_image($blog_id, $blog_image_update);

          $this->session->set_flashdata('is_success','update');
          header('location:'.base_url().'Admin/blog_list');
        }
      }
      else{
        header('location:'.base_url().'Admin/blog_list');
      }
    }
    else{
      header('location:'.base_url().'Admin');
    }
  }

  public function blog_delete(){
    $blog_id = $this->input->post('blog_id');
    $blog_image = $this->input->post('blog_image');
    unlink('./assets/images/blogs/'.$blog_image);
    $query = $this->Admin_Model->blog_delete($blog_id);
    $this->session->set_flashdata('is_success','delete');
    header('location:'.base_url().'Admin/blog_list');
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'Admin');
  }

}
?>
