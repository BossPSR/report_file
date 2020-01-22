<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('');

    }

	public function index()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
	
        $data['store'] = $this->db->get('tbl_upload_store')->result_array();
		$this->load->view('options/header');
		$this->load->view('store',$data);
		$this->load->view('options/footer');
	 }
    }
    public function storeForbuy()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
	
        $data['store'] = $this->db->get('tbl_upload_order')->result_array();
		$this->load->view('options/header');
		$this->load->view('storeforbuy',$data);
		$this->load->view('options/footer');
	 }
    }
    
    public function store_add_com()
    {
            $id = $this->input->post('id');

        $data = array(

            'price_file'         => $this->input->post('price_file'),
           

        );
                       $this->db->where('id', $id);     
        $resultsedit = $this->db->update('tbl_upload_store', $data);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
        return redirect('back_store');
    }

    public function  delete_store()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_upload_store', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully Reject store for sale information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Reject store for sale information');
        }
        return redirect('back_store');
    }
	
	
}