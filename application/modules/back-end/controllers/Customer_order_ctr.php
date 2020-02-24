<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_order_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['order_main'] = $this->Customer_model->customer_main();
            $this->load->view('options/header');
            $this->load->view('satisfied',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function not_satisfied()
    {
        if ($this->session->userdata('email_admin') != '') {



            $data['order_not'] = $this->Customer_model->customer_list_not();
            $this->load->view('options/header');
            $this->load->view('not_satisfied',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function Bookmark()
    {
        if ($this->session->userdata('email_admin') != '') {


            $this->load->view('options/header');
            $this->load->view('bookmark');
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }


    
   
}
