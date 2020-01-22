<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdraw_ctr extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Withdraw_model');
    }

	public function index()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $data['withdraw'] = $this->Withdraw_model->withdraw_list();
            $this->load->view('options/header');
            $this->load->view('withdraw',$data);
            $this->load->view('options/footer');
        }
    }

    public function withdraw_status()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $id = $this->input->get('id');
            $data = array(
                'status' => $this->input->get('status')
            );

            $this->db->where('id', $id);   
            $resultsedit = $this->db->update('tbl_withdraw', $data);

            if ($resultsedit > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Update withdraw  !!.');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Update withdraw ');
            }
            return redirect('back_withdraw');
            
        }
    }
    
	
}