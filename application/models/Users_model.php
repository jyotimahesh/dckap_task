<?php
class Users_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }
  
    public function getAll($queryString) {
        $this->db->like('email', $queryString);
        $this->db->or_like('username', $queryString);
        $this->db->or_like('mobile_number', $queryString);
        return $this->db->get('users')->result();
    }
   
    public function insert($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }
   
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('users')->result();
    }
    
    public function verifyCredentials($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password',md5($password));
        return $this->db->get('users')->result();
    }
    
   
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return true;
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
        return true;
    }
   
    public function changeStatus($id) {
        $table=$this->getDataById($id);
        if($table[0]->status==0)
        {
            $this->update($id,array('status' => '1'));
            return "Activated";
        }else{
            $this->update($id,array('status' => '0'));
            return "Deactivated";
        }
    }
    
}