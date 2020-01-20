<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
	
		$data['team'] = $this->db->get('tbl_team')->result_array();

		$this->load->view('options/header');
		$this->load->view('team_list',$data);
		$this->load->view('options/footer');
     }
	}

	public function status_team()
    {
        $id = $this->input->get('id');
        $status = $this->input->get('status');

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_team',['status' => $status]);

        if($resultsedit > 0)
        {
            $this->session->set_flashdata('save_ss2',' Successfully updated status information !!.');
        }
        else
        {
            $this->session->set_flashdata('del_ss2','Not Successfully updated status information');
        }
        return redirect('back_team');
    }

	
	
}