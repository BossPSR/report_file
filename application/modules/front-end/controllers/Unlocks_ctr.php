<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unlocks_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Upload_model');
	}

	public function index()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			//userId
			$id 									= $this->input->get('id');
			//upload_id
			$upload_id 								= $this->input->get('upload_id');
			$data['userId'] 						= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['Id_unlock']						= $this->Upload_model->unlocks($id);
			$data['unlocks']						= $this->Upload_model->get_unlocks($data['userId']['id'], $upload_id);
			$data['check_after_unlock']				= $this->Upload_model->check_afterunlocks($upload_id);

			$this->load->view('options/header_login');
			$this->load->view('unlocks', $data);
			$this->load->view('options/footer');
		}
	}

	public function unlocks_search()
	{
		$id					= $this->input->get('search');
		$data['Id_unlock']	= $this->Upload_model->unlocks_s($id);
		$data['userId'] 	= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();


		$this->load->view('options/header_login');
		$this->load->view('unlocks_search',$data);
		$this->load->view('options/footer');
	}

	public function unlock_document()
	{
		$session = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$price			= $this->input->get('price');
		$merchant_id	= $this->input->get('merchant_id');
		$upload_id		= $this->input->get('upload_id');
		$userId			= $this->input->get('userId');
		$ip_address 	= $this->input->ip_address();
		$status			= 1;
		$create_at		= date('Y-m-d H:i:s');
		$total 			= $session['cash'] - $price;

		if ($price > $session['cash']) 
		{
			$this->session->set_flashdata('without', TRUE);
            redirect('unlocks?id='.$userId.'&upload_id='.$upload_id.'','refresh');
		}
		else
		{
			$data = array(
				'userId'		=> $userId,
				'total'			=> $price,
				'merchant_id'	=> $merchant_id,
				'upload_id'		=> $upload_id,
				'ip_address'	=> $ip_address,
				'status'		=> $status,
				'create_at'		=> $create_at,
			);
	
			if ($this->db->insert('tbl_unlocks', $data)) 
			{
				$utotal = array(
					'cash' => $total
				);

				$this->db->where('id', $userId);
				$success = $this->db->update('tbl_user', $utotal);
			}
	
			if ($success > 0) {
				$this->session->set_flashdata('successtotal', TRUE);
				redirect('unlocks?id='.$userId.'&upload_id='.$upload_id.'','refresh');
			} else {
				$this->session->set_flashdata('del_ss', TRUE);
				redirect('unlocks?id='.$userId.'&upload_id='.$upload_id.'','refresh');
			}
		}

		
	}

	public function downloadDocument()
	{

		if ($this->session->userdata('email') != '') {
			$upload_id 		= $this->input->get('upload_id');
			$userId 		= $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$unlocks		= $this->Upload_model->check_afterunlocks($upload_id);


			if (empty($unlocks)) {
				redirect('home');
			}
			$id = $this->input->get('id');
			if (!empty($id)) {
				$myFile = $this->db->get_where('tbl_upload_full', ['id' => $id])->row();
				if (isset($myFile)) {
					$this->load->helper('download');
					force_download(FCPATH . $myFile->path, null);
				}
			}
			redirect('file_teacher');
		} else {
			redirect('login');
		}
	}
}
