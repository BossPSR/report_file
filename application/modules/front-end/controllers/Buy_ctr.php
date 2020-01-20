<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buy_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
      if ($this->session->userdata('email') == '') {
          redirect('home');
      } else {
       
        $user = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
        $paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal',['user_id' => $user['id']])->row_array();
        if (!empty($paypal)) {
            $datePaypal = date("Y-m-d", strtotime($paypal['create_time']));
            $checkDate = DateDiff($datePaypal, date("Y-m-d"));
            if ($checkDate < 30) {
              $this->load->view('options/header');
              $this->load->view('buy');
              $this->load->view('options/footer');      
            } else {
              redirect('package');
            }
        }else{
          redirect('package');
        }
      } 
	}	
}