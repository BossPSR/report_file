<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('My_stock_model');
	}

	public function index()
	{
		if ($this->session->userdata('email_admin') != '') {
			$data['stock'] = $this->My_stock_model->stock();
			$this->load->view('options/header');
			$this->load->view('my_stock', $data);
			$this->load->view('options/footer');
		} else {
			$this->load->view('login');
		}
	}

	public function my_stock_admin()
	{
		if ($this->session->userdata('email_admin') != '') {
			$data['stock'] = $this->My_stock_model->stock_Admin();
			$this->load->view('options/header');
			$this->load->view('my_stock_admin', $data);
			$this->load->view('options/footer');
		} else {
			$this->load->view('login');
		}
	}

	public function add_my_stock_admin()
	{
		if ($this->session->userdata('email_admin') != '') {
			$data['stock'] = $this->My_stock_model->stock();
			$this->load->view('options/header');
			$this->load->view('add_stock_admin', $data);
			$this->load->view('options/footer');
		} else {
			$this->load->view('login');
		}
	}

	public function fileUpload_buy_admin()
	{
		// image_lib
		$id_admin = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array();

		$userId     =  $id_admin['adminId'];
		$date_req   =  $this->input->post('date_required');
		$name       =  $this->input->post('name');
		$email      =  $this->input->post('email');
		$DMCheck    =  $this->input->post('DMCheck');
		if (!empty($DMCheck)) {
			$num = 1 ;
		}else{
			$num = 2 ;
		}


		$target_dir = "uploads/Buy/"; // Upload directory

		$request = 1;

		if (isset($_POST['request'])) {
			$request = $_POST['request'];
		}
		if ($request == 1) {
			// Set preference
			$config['upload_path']     = 'uploads/Buy/';
			// $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
			$config['allowed_types']   = '*';
			$config['max_size']        = '99999'; // max_size in kb
			$config['file_name']       = $_FILES['file']['name'];

			//Load upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();

			// File upload
			if ($this->upload->do_upload('file')) {
				// Get data about the file
				$uploadData = $this->upload->data();

				$data = array(

					'userId'        => $userId,
					'order_id'      => $buymax->order_main,
					'date_required' => $date_req,
					'Username'      => $name,
					'email'      	=> $email,
					'status_admin'  =>  1,
					'status_book'   =>  $num,
					'status_pay'    =>  1,
					'file_name'     => $uploadData['file_name'],
					'path'          => 'uploads/Buy/' . $uploadData['file_name'],
					'create_at'     => date('Y-m-d H:i:s'),
				);
				$this->db->insert('tbl_upload_order', $data);
			}
		}
	}


	public function fileUpload_buy_main()
	{
		// image_lib
		$id_admin = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array();

		$userId     =  $id_admin['id'];
		$date_req   =  $this->input->post('date_required');
		$name       =  $this->input->post('name');
		$email      =  $this->input->post('email');


		$target_dir = "uploads/Buy/"; // Upload directory

		$request = 1;

		if (isset($_POST['request'])) {
			$request = $_POST['request'];
		}
		if ($request == 1) {
			// Set preference
			$config['upload_path']     = 'uploads/Buy/';
			// $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
			$config['allowed_types']   = '*';
			$config['max_size']        = '99999'; // max_size in kb
			$config['file_name']       = $_FILES['file']['name'];

			//Load upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();

			// File upload
			if ($this->upload->do_upload('file')) {
				// Get data about the file
				$uploadData = $this->upload->data();

				$data = array(

					'userId'        => $userId,
					'order_id'      => $buymax->order_main,
					'date_required' => $date_req,
					'Username'      => $name,
					'email'      	=> $email,
					'status_admin'  =>  1,
					'status_book'   =>  2,
					'status_pay'    =>  1,
					'file_name'     => $uploadData['file_name'],
					'path'          => 'uploads/Buy/' . $uploadData['file_name'],
					'create_at'     => date('Y-m-d H:i:s'),
				);
				$this->db->insert('tbl_upload_order', $data);
			}
		}
	}
}
