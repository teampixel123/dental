<?php
class Admin_Model extends CI_Model{
  function check_login($admin_username, $admin_password){
    $query = $this->db->select('admin_id')
    ->where('admin_username', $admin_username)
    ->where('admin_password', $admin_password)
    ->from('admin')
    ->get();
    $result = $query->result_array();
    return $result;
  }

  public function save_blog($blog_data){
    $this->db->insert('blogs', $blog_data);
  }

  public function get_blog_list(){
    $query = $this->db->select('*')
    ->from('blogs')
    ->order_by('id','DESC')
    ->get();
    $result = $query->result();
    return $result;
  }

  public function blog_details($blog_id){
    $query = $this->db->select('*')
    ->where('id',$blog_id)
    ->from('blogs')
    ->get();
    $result = $query->result();
    return $result;
  }

  public function update_blog($blog_id, $update_blog_data){
    $this->db->where('id', $blog_id);
    $this->db->update('blogs', $update_blog_data);
  }
  public function update_image($blog_id, $blog_image_update){
    $this->db->where('id', $blog_id);
    $this->db->update('blogs', $blog_image_update);
  }
  public function blog_delete($blog_id){
    $this->db->where('id', $blog_id);
    $this->db->delete('blogs');
  }
}

?>
