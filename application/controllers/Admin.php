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

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'Admin');
  }

}
?>
