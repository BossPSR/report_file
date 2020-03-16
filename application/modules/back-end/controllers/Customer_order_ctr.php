<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_order_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->model('My_stock_model');
        $this->load->model('Store_model');

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


    public function orverall()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['order_all'] = $this->Customer_model->customer_all();
            $this->load->view('options/header');
            $this->load->view('orverall',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }




    public function Bookmark()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['bookmark'] = $this->Store_model->bookmark_all();
            $data['dm'] = $this->Store_model->bookmark_dm();
            $data['show_dm'] = $this->Store_model->bookmark_show_dm();
            $this->load->view('options/header');
            $this->load->view('bookmark',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function ready_refresh()
    {
        $data = $this->Store_model->bookmark_all();
        $result = []; 
		$result['successfully'] = true; 
		$result['list'] = $data; 
 
		echo json_encode($result); 
    }



    public function upload_team()
    {
        $data = array(

            'order_id'                         => $this->input->post('order_id'),
            'position'                         => $this->input->post('position'),
            'wage'                             => $this->input->post('wage'),
            'note'                             => $this->input->post('note'),
            'date_required'                    => $this->input->post('Daterequired'),
            'create_at'                        => date('Y-m-d H:i:s')

        );
      
        $resultsedit = $this->db->insert('tbl_upload_team', $data);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
        }
        return redirect('Not_Satisfied');
    }


    
   
}
