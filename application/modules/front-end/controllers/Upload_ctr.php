<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('upload');
			$this->load->view('options/footer');
		}
	}

	public function My_upload()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('my_upload');
			$this->load->view('options/footer');
		}
	}

	public function My_upload_search()
	{
		$user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$search_item			= $this->input->post('search_item');
		$search_category		= $this->input->post('search_category');
		$search_code			= $this->input->post('search_code');
		$create_at				= date('Y-m-d H:i:s');

		$data = array(
			'search_item'		=> $search_item,
			'userId'			=> $user['id'],
			'search_category'	=> $search_category,
			'search_code'		=> $search_code,
			'create_at'			=> $create_at
		);

		if ($this->db->insert('tbl_upload', $data)) {
			$this->session->set_flashdata('upload_ss', TRUE);
			redirect('upload_step2');
		} else {
			$this->session->set_flashdata('upload_fail', TRUE);
			redirect('upload');
		}
	}

	public function My_upload_step2()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('upload_step2');
			$this->load->view('options/footer');
		}
	}

	// File upload
	public function fileUpload(){
		$target_dir = "uploads/Preview/"; // Upload directory
		$request = 1;
		if(isset($_POST['request'])){
			$request = $_POST['request'];
		}

		if($request == 1){
			if(!empty($_FILES['file']['name'])){
				
				// Set preference
				$config['upload_path'] = 'uploads/Preview/';	
				$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
				$config['max_size']    = '1024'; // max_size in kb
				$config['file_name'] = $_FILES['file']['name'];
						
				//Load upload library
				$this->load->library('upload',$config);		
				
				$this->upload->initialize($config);
				
				// File upload
				if($this->upload->do_upload('file')){
					// Get data about the file
					$uploadData = $this->upload->data();
				}
			}
		}

		if($request == 2){
			$filename = $target_dir.$_POST['name']; 
			unlink($filename); exit;
		}
	}

	// File upload
	public function fileUploadfull(){
		$target_dir = "uploads/full/"; // Upload directory
		$request = 1;
		if(isset($_POST['request'])){
			$request = $_POST['request'];
		}

		if($request == 1){
			if(!empty($_FILES['file']['name'])){
				
				// Set preference
				$config['upload_path'] = 'uploads/full/';	
				$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
				$config['max_size']    = '1024'; // max_size in kb
				$config['file_name'] = $_FILES['file']['name'];
						
				//Load upload library
				$this->load->library('upload',$config);		
				
				$this->upload->initialize($config);
				
				// File upload
				if($this->upload->do_upload('file')){
					// Get data about the file
					$uploadData = $this->upload->data();
				}
			}
		}

		if($request == 2){
			$filename = $target_dir.$_POST['name']; 
			unlink($filename); exit;
		}
	}

	public function delete_files() {
        $target_dir = "upload/"; // Upload directory

		

		// Upload file
		if($request == 1){
			$target_file = $target_dir . basename($_FILES["file"]["name"]);

			$msg = "";
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
				$msg = "Successfully uploaded";
			}else{
				$msg = "Error while uploading";
			}
			echo $msg;
		}

		// Remove file
		if($request == 2){
			$filename = $target_dir.$_POST['name']; 
			unlink($filename); exit;
		}
	}
	
}
