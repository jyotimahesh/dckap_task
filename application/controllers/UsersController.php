<?php
class UsersController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->library('session');
    }
   
    public function manageUsers() {
        $queryString = $this->input->post('querystring');
        if (!empty($queryString)) {
            $data['users'] = $this->users_model->getAll($queryString);
        }else{
            $data['users'] = $this->users_model->getAll($queryString = '');
        }
        $this->load->view('users/manage-users', $data);
    }
    
    public function addUsers() {
        $this->load->view('users/add-users');
    }
    
    public function addUsersPost() {
        $data['name'] = $this->input->post('name');
        $data['username'] = $this->input->post('username');
        $data['email'] = $this->input->post('email');
        $data['dob'] = $this->input->post('dob');
        $data['address'] = $this->input->post('address');
        $data['country'] = $this->input->post('country');
        $data['state'] = $this->input->post('state');
        $data['city'] = $this->input->post('city');
        $data['mobile_number'] = $this->input->post('mobile_number');
        $data['password'] = md5($this->input->post('password'));
        $data['profile_image'] = $_FILES['profile_image']['name'];
        $data['created_datetime'] = date("Y/m/d H:i:s");
        $data['status'] = 1;
        $this->users_model->insert($data);
        $this->session->set_flashdata('success', 'Users added Successfully');
        redirect('manage-users');
    }
    
    public function editUsers($users_id) {
        $data['users_id'] = $users_id;
        $data['users'] = $this->users_model->getDataById($users_id);
        $this->load->view('users/edit-users', $data);
    }
    
    public function editUsersPost() {
        $users_id = $this->input->post('users_id');
        $users = $this->users_model->getDataById($users_id);
        $data['name'] = $this->input->post('name');
        $data['username'] = $this->input->post('username');
        $data['email'] = $this->input->post('email');
        $data['dob'] = $this->input->post('dob');
        $data['address'] = $this->input->post('address');
        $data['country'] = $this->input->post('country');
        $data['state'] = $this->input->post('state');
        $data['city'] = $this->input->post('city');
        $edit = $this->users_model->update($users_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Users Updated');
            redirect('manage-users');
        }
    }
    
    public function login() {
       
        if (!empty($this->input->post('email'))) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $userExist = $this->users_model->verifyCredentials($email, $password);
            if (!empty($userExist))
            {
                $_SESSION['login'] = true;
                $_SESSION['uid'] = $user_data['id'];
                $_SESSION['username'] = $user_data['username'];
                $_SESSION['email'] = $user_data['email'];
                $this->session->set_flashdata('success', 'Login Success');
                redirect('manage-users');
            }
            else
            {
                $this->session->set_flashdata('error', 'Please enter valid credentials');
                redirect('login');
            }
        }
        $this->load->view('users/login');
    }
    
    public function logout(){
        session_unset();
        session_destroy();
        redirect('login');
    }
   
    public function viewUsers($users_id) {
        $data['users_id'] = $users_id;
        $data['users'] = $this->users_model->getDataById($users_id);
        $this->load->view('users/view-users', $data);
    }
   
    public function deleteUsers($users_id) {
        $delete = $this->users_model->delete($users_id);
        $this->session->set_flashdata('success', 'users deleted');
        redirect('manage-users');
    }
   
    public function changeStatusUsers($users_id) {
        $edit = $this->users_model->changeStatus($users_id);
        $this->session->set_flashdata('success', 'users '.$edit.' Successfully');
        redirect('manage-users');
    }
    
}