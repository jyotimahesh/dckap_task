<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_model  extends CI_model{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function getusers(){
        $this->db->select('*');
        $this->db->from('employees');
        $query=$this->db->get()->result();
       // print_r($query);
       // exit;
        return $query->result();
        
    }
    
}