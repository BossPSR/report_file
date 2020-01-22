<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdraw_ctr extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Withdraw_model');
    }

	public function index()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $data['withdraw'] = $this->Withdraw_model->withdraw_list();
            $this->load->view('options/header');
            $this->load->view('withdraw',$data);
            $this->load->view('options/footer');
        }
    }
    
	
}