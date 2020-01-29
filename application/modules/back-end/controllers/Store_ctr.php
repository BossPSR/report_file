<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Store_model');

    }

	public function index()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
        $data['store'] = $this->Store_model->store_list();
		$this->load->view('options/header');
		$this->load->view('store',$data);
		$this->load->view('options/footer');
	 }
    }
    public function store_a()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {

        $data['store'] = $this->Store_model->store_list_a();
		$this->load->view('options/header');
		$this->load->view('store_a',$data);
		$this->load->view('options/footer');
	 }
    }
    public function store_b()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {

        $data['store'] = $this->Store_model->store_list_b();
		$this->load->view('options/header');
		$this->load->view('store_b',$data);
		$this->load->view('options/footer');
	 }
    }
    public function store_c()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {

        $data['store'] = $this->Store_model->store_list_c();
		$this->load->view('options/header');
		$this->load->view('store_c',$data);
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

    public function checkForsell()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
	
        // $data['store'] = $this->Store_model->store_list();
        $data['store'] = $this->db->get_where('tbl_upload_store',['grade' => null || '','price_file'=> null || '','status_cp'=> null || ''])->result_array();
		$this->load->view('options/header');
		$this->load->view('checkforsell',$data);
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

    public function check_store_add_com()
    {
            $id = $this->input->get('id');

        $data = array(

            'status_cp'                     => $this->input->get('com'),
            'grade'                         => $this->input->get('grad'),
            'price_file'                    => $this->input->get('price'),
           

        );
                       $this->db->where('id', $id);     
        $resultsedit = $this->db->update('tbl_upload_store', $data);

        $uploadStore =   $this->db->get_where('tbl_upload_store', ['id' => $id])->row_array();
        $this->db->where('id', $uploadStore['userId']);     
        $this->db->update('tbl_user', ['free_forever' => 1]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
        return redirect('back_store_checkForsell');
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

    public function reject()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
	
        $data['store'] = $this->db->get('tbl_upload_store')->result_array();
		$this->load->view('options/header');
		$this->load->view('reject',$data);
		$this->load->view('options/footer');
	 }
    }

    public function status_reject()
    {
        $id = $this->input->get('id');
      
        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_upload_store',['is_check' => 1]);

        if($resultsedit > 0)
        {
            $this->session->set_flashdata('save_ss2',' Successfully updated status information !!.');
        }
        else
        {
            $this->session->set_flashdata('del_ss2','Not Successfully updated status information');
        }
        return redirect('back_store_checkForsell');
    }

	public function upload_main_search()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
	
            $data['upload_main_search'] = $this->db->get('tbl_upload_main_search')->result_array();
        
            $this->load->view('options/header');
            $this->load->view('upload_main_search',$data);
            $this->load->view('options/footer');
	    }
    }

    public function add_to_upload_main_search()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
	
            $id = $this->input->post('id');
            $user_id = $this->input->post('user_id');
            $select_item_id = $this->input->post('select_item_id');
            $search_item = $this->input->post('search_item');
            $code = $this->input->post('code');
            $topic = $this->input->post('topic');

            $select_item = $this->db->get_where('tbl_select_item',['id' => $select_item_id])->row_array();
            if (!empty($select_item)) {
                $data = [
                    'userId' => $user_id,
                    'select_item_id' => $select_item_id,
                    'search_item' => $search_item,
                    'select_item' => $select_item['name_item'],
                    'code' => $code,
                    'topic' => $topic,
                    'upload_store_id' => $id,
                    'create_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ];
                $success = $this->db->insert('tbl_upload_main_search',$data);
                $this->db->where('id',$id);
                $this->db->update('tbl_upload_store',['status_main_search' => 1]);
                if ($success > 0) {
                    $this->session->set_flashdata('save_ss2',' Successfully updated status information !!.');
                }else{
                    $this->session->set_flashdata('del_ss2','Not Successfully updated status information');
                }
                redirect('back_store');
            }
            $this->session->set_flashdata('del_ss2','Not Successfully updated status information');
            redirect('back_store');
	    }

    }
	
}