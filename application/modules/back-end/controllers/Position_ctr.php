<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Position_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Store_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $data['data'] = $this->db->get('tbl_item_position')->result_array();
            $this->load->view('options/header');
            $this->load->view('position',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }


    public function position_Add()
    {
        $data = array(

            'name_item'                         => $this->input->post('name_item'),    
            'created_at'                        => date('Y-m-d H:i:s')

        );
      
        $resultsedit = $this->db->insert('tbl_item_position', $data);
            
        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to position information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to position information');
        }
        return redirect('Position');
    }

    public function position_edit()
    {
       $id =  $this->input->post('id');

        $data = array(

            'name_item'                         => $this->input->post('name_item'),    
            'updated_at'                        => date('Y-m-d H:i:s')

        );
      
                        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_item_position', $data);
            
        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Edit to position information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Edit to position information');
        }
        return redirect('Position');
    }


    public function  delete_position()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_item_position', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully delete Position information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully delete Position information');
        }
        return redirect('Position');
    }
   
}
