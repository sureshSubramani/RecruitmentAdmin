<?php
class Admin_model extends CI_Model{
 
  public function validate($email,$password){
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $result = $this->db->get(ADMIN);
    return $result;
  }
 
}