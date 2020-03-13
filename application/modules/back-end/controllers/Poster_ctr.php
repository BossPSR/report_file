<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poster_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		

    }

	public function index()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
        $data['poster'] = $this->db->get('tbl_poster')->result_array();
		$this->load->view('options/header');
		$this->load->view('poster',$data);
		$this->load->view('options/footer');
	 }
    }

    public function poster_add()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {

		$this->load->view('options/header');
		$this->load->view('add_poster');
		$this->load->view('options/footer');
	 }
    }

    public function poster_edit()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {

		$this->load->view('options/header');
		$this->load->view('edit_poster');
		$this->load->view('options/footer');
	 }
    }


    public function poster_add_com()
    {

    
        $this->load->library('upload');

        // |xlsx|pdf|docx
        $config['upload_path'] = 'uploads/poster';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '200480';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $name_file = "poster-" . time();
        $config['file_name'] = $name_file;

        $this->upload->initialize($config);

        $data = array();

        if ($_FILES['file_name']['name']) {
            if ($this->upload->do_upload('file_name')) {

                $gamber     = $this->upload->data();
                $data = array(

                    'name_file'     => $this->input->post('name_file'),
                    'file_name'     => $gamber['file_name'],
                    'create_at'     => date('Y-m-d H:i:s'),
                  
                );
                $resultsedit = $this->db->insert('tbl_poster', $data);
            }
        }
        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Add poster information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Add Admin information');
        }
        return redirect('back_poster');
    }

    public function poster_edit_com()
    {

         $id =  $this->input->post('id');

        $this->load->library('upload');

        // |xlsx|pdf|docx
        $config['upload_path'] = 'uploads/poster';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '200480';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $name_file = "poster-" . time();
        $config['file_name'] = $name_file;

        $this->upload->initialize($config);

        $data = array();

       
        if ($_FILES['file_name']['name']) {
            if ($this->upload->do_upload('file_name')) {

                $gamber     = $this->upload->data();
                $data = array(


                    'name_file'     => $this->input->post('name_file'),
                    'file_name'     => $gamber['file_name'],
                    'create_at'     => date('Y-m-d H:i:s'),
                  

                );
                $this->db->where('id', $id);
                $resultsedit = $this->db->update('tbl_poster', $data);
            }
        } else {
            $data = array(

              
                'name_file'     => $this->input->post('name_file'),
                'create_at'     => date('Y-m-d H:i:s')


            );

            $this->db->where('id', $id);
            $resultsedit = $this->db->update('tbl_poster', $data);
        }


        
        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Add poster information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Add Admin information');
        }
        return redirect('back_poster');
    }




    public function  delete_poster()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_poster', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully delete poster information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully delete Admin information');
        }
        return redirect('back_poster');
    }
	
	
}