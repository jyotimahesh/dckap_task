<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	   
		$this->load->view('users/welcome_message');
	}
	public function displayUsers(){
	    $this->load->view('welcome/tableview');
	   $employeeList['employees'] = $this->welcome_model->getUsers();
	    
	   $this->load->view('welcome/displayUsers',$employeeList);
	}
	
	public function showUsers(){
	    $this->load->view('welcome/shows');
	}
}
