<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('home_model');

    }

	public function index()
	{
		if ($this->session->userdata('email_admin') != '') 
		{	
			$lang= $this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
			$this->lang->load($lang,$lang);
		
			$this->load->view('options/header');
			$this->load->view('index');
			$this->load->view('options/footer');
		}else{
			$this->load->view('login');
		}
		 
		
	
	}
	public function realtime_data()
	{
		if ($this->session->userdata('email_admin') != '') 
		{	
		$data = $this->home_model->order_list();
	    
		echo json_encode($data);

		}else{
			$this->load->view('login');
		}
		 
		
	
	}

	public function realtime_data1()
	{
		if ($this->session->userdata('email_admin') != '') 
		{	
		$data1 = $this->home_model->order_list1();
	    
		echo json_encode($data1);

		}else{
			$this->load->view('login');
		}
		 
		
	
	}

	public function realtime_data2()
	{
		if ($this->session->userdata('email_admin') != '') 
		{	
		$data2 = $this->home_model->order_list2();
	    
		echo json_encode($data2);

		}else{
			$this->load->view('login');
		}
		 
		
	
	}public function realtime_data3()
	{
		if ($this->session->userdata('email_admin') != '') 
		{	
		$data3 = $this->home_model->order_list3();
	    
		echo json_encode($data3);

		}else{
			$this->load->view('login');
		}
		 
		
	
	}
	
	

	
	public function change()
	{  
		$type	= $this->input->get('type');
		$uri     = $this->input->get('uri');
		$this->session->set_userdata('lang',$type);
		redirect($uri);
		
	}
	
	
}