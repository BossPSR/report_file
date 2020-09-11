<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Price_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $this->load->view('options/header');
            $this->load->view('price_management');
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function Edit_Modify_fee()
    {
       
        $fee = $this->input->post('fee');

        $this->db->where('id', 1);
        $resultsedit = $this->db->update('tbl_price_management', ['update_at' => date('Y-m-d H:i:s'), 'price' => $fee]);
 
        echo  $resultsedit;
      
    }
    public function Edit_Modify_re_feedback()
    {
       
        $price = $this->input->post('price');

        $this->db->where('id', 6);
        $resultsedit = $this->db->update('tbl_price_management', ['update_at' => date('Y-m-d H:i:s'), 'price' => $price]);
 
        echo  $resultsedit;
      
    }

    public function Edit_ModifyCashback()
    {
       
        $price = $this->input->post('price');
        $count = $this->input->post('count');

        $this->db->where('id', 2);
        $resultsedit = $this->db->update('tbl_price_management', ['update_at' => date('Y-m-d H:i:s'), 'price' => $price]);
        $this->db->where('id', 3);
        $resultsedit = $this->db->update('tbl_price_management', ['update_at' => date('Y-m-d H:i:s'), 'price' => $count]);
        echo  $resultsedit;
      
    }

    public function Edit_ModifyScoreTeam()
    {
       
        $price_team = $this->input->post('price_team');
        $score_team = $this->input->post('score_team');

        $this->db->where('id', 4);
        $resultsedit = $this->db->update('tbl_price_management', ['update_at' => date('Y-m-d H:i:s'), 'price' => $price_team]);
        $this->db->where('id', 5);
        $resultsedit = $this->db->update('tbl_price_management', ['update_at' => date('Y-m-d H:i:s'), 'price' => $score_team]);
        echo  $resultsedit;
      
    }
   
   
}
