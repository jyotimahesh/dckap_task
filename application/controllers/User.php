<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    
 
    public function index()
    {
        
        $this->load->view('users/welcome_message');
    }
   
    public function userRegister(){
        if(isset($_POST['submit'])){
       $data = array(
           'name'	=>  $_POST['name'] ,
           'username'	=>  $_POST['username'] ,
           'email_id'	=>  $_POST['email_id'] ,
           'password'	=>  $_POST['password'] ,
           'cpassword'	=>  $_POST['confirm_password'] ,
           'mobile_number'	=>  $_POST['mobile_numebr'] ,
           'user_image'	=>  $_POST['upload'] ,
           'dob'	=>  $_POST['dob'] ,
           'address'	=>  $_POST['address'] ,
           'city'	=>  $_POST['city'] ,
           'state'=>  $_POST['state'],
           'country'	=>  $_POST['country']
       ); }
    //  print_r($data);
      // exit;
    //   $this->db->insert('list',$data);
     $this->load->view('header');   
     $this->load->view('users/register');
     $this->load->view('footer');   
     // $userList['users'] = $this->user_model->insertUser($data);
     
       
      //  $this->load->view('users/register',$userList);
    }
    
}
