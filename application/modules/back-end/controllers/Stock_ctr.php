<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_ctr extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('My_stock_model');

    }

	public function index()
	{
		if ($this->session->userdata('email_admin') != '') 
		{	
            $data['stock'] = $this->My_stock_model->stock();
			$this->load->view('options/header');
			$this->load->view('my_stock',$data);
			$this->load->view('options/footer');
		}else{
			$this->load->view('login');
		}
		 
		
	
	}
	
	
}