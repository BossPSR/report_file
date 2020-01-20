<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('User_list_model');

    }

	public function index()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
	
		$data['user_list'] = $this->User_list_model->user_list();
		$this->load->view('options/header');
		$this->load->view('user_list',$data);
		$this->load->view('options/footer');
	 }
	}
	
	
}