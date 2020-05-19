<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deduct_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Deduct_model');
        $this->load->model('Search_model');
    }

    function my_deduct()
    {
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$data['userId'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$paypal = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $data['userId']['idUser']])->row_array();
			if (!empty($paypal) || $data['userId']['free_forever'] == 1) {
				$datePaypal = date("Y-m-d", strtotime($paypal['start_time']));
				$checkDate = DateDiff($datePaypal, date("Y-m-d"));

				if ($checkDate < 0 || $data['userId']['free_forever'] == 1) {

					$search_key                     = $this->input->get('search_key');
					$user                           = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
					$_user                          = $user['idUser'];
					if ($search_key == '' || $search_key == null) {
						$data['deduct']                = $this->Deduct_model->my_deduct($_user);
					} else {
						$data['deduct']                = $this->Search_model->search_date_deduct($search_key, $_user);
					}
					$this->load->view('options/header_login');
					$this->load->view('my_deduct', $data);
					$this->load->view('options/footer');
				} else {
					redirect('package');
				}
			} else {
				redirect('package');
			}
		}

      
    }
}
