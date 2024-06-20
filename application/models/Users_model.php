<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{
    
    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('active', 1);
        $query = $this->db->get('users');

        if($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }
    public function add_user($data){
        $a = $this->db->insert('users',$data);
        return $a;
    }
    public function get_user(){
        $this->db->select('*');
        $this->db->order_by("id", "DESC");
        $a = $this->db->get('users')->result();
        return $a;
    }
    public function get_user_data($id){
        $this->db->select('*');
        $this->db->where('id',$id);
       $a = $this->db->get('users')->row();
      return $a;
    }
    public function update_user_data($id,$data){
        $this->db->where('id',$id);
        $a = $this->db->update('users',$data);
        return $a;
    }
    public function delete_user($id){
        $this->db->where('id',$id);
        $a = $this->db->delete('users');
        return $a;
    }
}
?>