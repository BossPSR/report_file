<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_deposit_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_deposit()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$data['userId'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('options/header_login');
			$this->load->view('my_deposit',$data);
			$this->load->view('options/footer');
		}
	}

	public function my_deposit_paypal()
	{
		$paypal_price = $this->input->post('paypal_price');
		$userId = $this->input->post('userId');
		$data = [
			'userId' => $userId,
			'price' => $paypal_price,
			'create_at' => date('Y-m-d H:i:s'),
			'update_at' => date('Y-m-d H:i:s'),
		];

		$insert = $this->db->insert('tbl_withdraw',$data);

		$user = $this->db->get_where('tbl_user',['id' => $userId])->row_array();
		$priceAll = $user['cash'] + $paypal_price;
		$this->db->where('id',$userId);
		$update = $this->db->update('tbl_user',['cash' => $priceAll]);
		
		$result = [];
		$result['success'] = true;
		$result['message'] = 'successfully';
		echo json_encode($result);
	}
}
