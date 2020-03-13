<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vdo_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $data['vdo'] = $this->db->get('tbl_vdo')->result_array();

            $this->load->view('options/header');
            $this->load->view('vdo', $data);
            $this->load->view('options/footer');
        }
    }
   
    public function vdo_add_com()
    {
   


        $data = array(

            'link'          => $this->input->post('link'),
            'vdo'           => $this->input->post('vdo'),
            'create_at'     => date('Y-m-d H:i:s')

        );

        $resultsedit = $this->db->insert('tbl_vdo', $data);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Add Vdo information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Add Vdo information');
        }
        return redirect('back_vdo');
    }

    public function vdo_edit_com()
    {

        $id =  $this->input->post('id');


        $data = array(

            'link'          => $this->input->post('link'),
            'vdo'           => $this->input->post('vdo'),
            'create_at'     => date('Y-m-d H:i:s')

        );
                       $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_vdo', $data);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Add Vdo information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Add Vdo information');
        }
        return redirect('back_vdo');
    }

  
    public function  delete_vdo()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_vdo', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully delete vdo information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully delete vdo information');
        }
        return redirect('back_vdo');
    }
}
