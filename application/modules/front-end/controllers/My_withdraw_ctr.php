<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_withdraw_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_withdraw()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$this->load->view('options/header_login');
			$this->load->view('my_withdraw');
			$this->load->view('options/footer');
		}
	}

	public function withdraw_cash()
	{
		$user 	= $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
		$data = array(
			'userId' 	=> $user['id'],
			'price' 	=> $this->input->post('number'),
			'create_at' => date('Y-m-d H:i:s'),
			'update_at' => date('Y-m-d H:i:s'),
		);
		if ($this->db->insert('tbl_withdraw', $data)) 
		{
			$id = $this->db->insert_id();
			$update = array(
				'bill_id' => 'WD-'.$id
			);
			$this->db->where('id', $id);
			$success = $this->db->update('tbl_withdraw', $update);
			if ($success > 0) {
				$this->session->set_flashdata('save_ss', TRUE);
				redirect('my-withdraw', 'refresh');
			}
			else{
				$this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> ถอนเงินไม่สำเร็จกรุณาลองีกครั้ง !! </div>');
				redirect('my-withdraw', 'refresh');
			}

			
		} 
		

	}
}
