<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_user_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function my_profile()
	{
		if ($this->session->userdata('email') == '') {
			redirect('home');
		} else {
			$data['user'] = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('options/header');
			$this->load->view('my_profile',$data);
			$this->load->view('options/footer');	
		}
	}

    public function profile_edit()
    {
		$logo           = $this->input->get('logo');
		$user_logo = $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row_array();

            $data = array(

                'file_name'             => $logo,
       			
               
               
			);
			$this->db->where('id',$user_logo['id']);
            $success = $this->db->update('tbl_user',$data);
        
            if($success > 0)
            {
                $this->session->set_flashdata('save_ss2','Edit Profile  !!.');
            }else
            {
                $this->session->set_flashdata('del_ss2','Not Edit Profile');
            }
                redirect('my-profile');
        
    }

}
