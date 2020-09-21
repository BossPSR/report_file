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
			$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('options/header_login');
			$this->load->view('my_withdraw', $data);
			$this->load->view('options/footer');
		}
	}

	public function withdraw_cash()
	{
		$email 			= $this->input->post('email');
		$paypal_sub 	= $this->input->post('paypal_sub');
		$tel_sub 		= $this->input->post('tel_sub');
		$numberBox_sub 	= $this->input->post('numberBox_sub');
		$password 		= $this->input->post('password');
		$user 	= $this->db->get_where('tbl_user', ['email' => $email])->row_array();

		if ($user['password'] != md5($password)) {
			$this->session->set_flashdata('del_ss2', 'รหัสของท่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง!');
			redirect('my-withdraw', 'refresh');
		}

		if ($user['cash'] < $this->input->post('number')) {
			$this->session->set_flashdata('nomoney', TRUE);
			redirect('my-withdraw', 'refresh');
		} else {
			$data = array(
				'userId' 			=> $user['idUser'],
				'tel_wd' 			=> $tel_sub,
				'paypal_or_bank_wd'	=> $paypal_sub,
				'price' 			=> $numberBox_sub,
				'create_at' 		=> date('Y-m-d H:i:s'),
				'update_at' 		=> date('Y-m-d H:i:s'),
			);
			if ($this->db->insert('tbl_withdraw', $data)) {
				$id = $this->db->insert_id();

				$userdb = array(
					'cash' => $user['cash'] - $numberBox_sub
				);
				$this->db->where('idUser', $user['idUser']);
				$success = $this->db->update('tbl_user', $userdb);

				$update = array(
					'bill_id' => 'WD-' . $id
				);
				$this->db->where('id', $id);
				$success = $this->db->update('tbl_withdraw', $update);
				
				if ($success > 0) {
					$this->session->set_flashdata('save_pay', 'ถอนเงินสำเร็จ กรุณารอแอดมินตรวจสอบ 1-2 วัน');
					redirect('my-withdraw', 'refresh');
				} else {
					$this->session->set_flashdata('del_ss2', 'ถอนเงินไม่สำเร็จกรุณาลองีกครั้ง!');
					redirect('my-withdraw', 'refresh');
				}
			}
		}
	}
}
