<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_upload_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Upload_model');
	}

	public function my_upload_edit()
	{
		$upload_preview_id = $this->input->get('upload_preview_id');
		$data['document_preview'] = $this->db->get_where('tbl_upload_preview' , ['upload_id' =>$upload_preview_id])->row_array();
		$data['document_full'] = $this->db->get_where('tbl_upload_full' , ['upload_id' =>$upload_preview_id])->row_array();

		$this->load->view('options/header_login');
		$this->load->view('my_upload_edit',$data);
		$this->load->view('options/footer');
	}


	function my_upload()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$users              = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$usersid            = $users['id'];
			$insert_id          = $this->input->get('insert_id');
			$data['documents']   = $this->Upload_model->my_upload($usersid);
			// if (empty($data['documents'])) {

			// 	echo "<script>";
			// 	echo "alert('ขออภัย กรุณาอัพไฟล์เอกสารด้วยค่ะ !!!');";
			// 	echo "window.location='upload_step2?insert_id=$insert_id';";
			// 	echo "</script>";
			// }

			$this->load->view('options/header_login');
			$this->load->view('my_upload', $data);
			$this->load->view('options/footer');
		}
	}

	public function delete_file()
	{
		$id = $this->input->get('Id');
		$this->db->delete('tbl_upload_preview', array('id' => $id));
		redirect('my-upload');
	}
}
