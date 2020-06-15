<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_ctr extends CI_Controller
{

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
			$this->load->view('user_list', $data);
			$this->load->view('options/footer');
		}
	}

	public function add_score()
	{
		if ($this->session->userdata('email_admin') == '') {
			redirect('backend');
		} else {
			
			$add  		= $this->input->post('add');
			$iduser   	= $this->input->post('id');

			$user = $this->db->get_where('tbl_user',['idUser' => $iduser])->row_array();
			

			$data = [
				'score' 		=> $user['score'] + $add,
				'updated_at' 	=> date('Y-m-d H:i:s'),
			];
			$this->db->where('idUser', $iduser);
			$success = $this->db->update('tbl_user', $data);
			if ($success > 0) {
				$this->session->set_flashdata('save_ss2', ' Successfully updated add Score !!.');
			} else {
				$this->session->set_flashdata('del_ss2', 'Not Successfully updated add Score');
			}
			redirect('back_user');
		}
	}

	
	public function deduct_score()
	{
		if ($this->session->userdata('email_admin') == '') {
			redirect('backend');
		} else {
			$deduct  	= $this->input->post('deduct');
			$iduser   	= $this->input->post('id');

			$user = $this->db->get_where('tbl_user',['idUser' => $iduser])->row_array();

			$data = [
				'score' 		=> $user['score'] - $deduct,
				'updated_at' 	=> date('Y-m-d H:i:s'),
			];
			$this->db->where('idUser', $iduser);
			$success = $this->db->update('tbl_user', $data);
			if ($success > 0) {
				$this->session->set_flashdata('save_ss2', ' Successfully updated deduct Score !!.');
			} else {
				$this->session->set_flashdata('del_ss2', 'Not Successfully updated deduct Score');
			}
			redirect('back_user');
		}
	}

	
	public function cash_score()
	{
		if ($this->session->userdata('email_admin') == '') {
			redirect('backend');
		} else {

			$cashback   = $this->input->post('cashback');
			$iduser   	= $this->input->post('id');

			$user = $this->db->get_where('tbl_user',['idUser' => $iduser])->row_array();

			$data = [
				'cashback' 		=> $user['cashback'] + $cashback,
				'updated_at' 	=> date('Y-m-d H:i:s'),
			];
			$this->db->where('idUser', $iduser);
			$success = $this->db->update('tbl_user', $data);
			if ($success > 0) {
				$this->session->set_flashdata('save_ss2', ' Successfully updated cashback !!.');
			} else {
				$this->session->set_flashdata('del_ss2', 'Not Successfully updated cashback');
			}
			redirect('back_user');
		}
	}

	public function deduct_cash_score()
	{
		if ($this->session->userdata('email_admin') == '') {
			redirect('backend');
		} else {

			$cashback   = $this->input->post('cashback');
			$iduser   	= $this->input->post('id');

			$user = $this->db->get_where('tbl_user',['idUser' => $iduser])->row_array();

			$data = [
				'cashback' 		=> $user['cashback'] - $cashback,
				'updated_at' 	=> date('Y-m-d H:i:s'),
			];
			$this->db->where('idUser', $iduser);
			$success = $this->db->update('tbl_user', $data);
			if ($success > 0) {
				$this->session->set_flashdata('save_ss2', ' Successfully update deduct cashback !!.');
			} else {
				$this->session->set_flashdata('del_ss2', 'Not Successfully update deduct cashback');
			}
			redirect('back_user');
		}
	}
}
