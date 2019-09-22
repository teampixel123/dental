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
    ->get();
    $result = $query->result();
    return $result;
  }
}

?>
