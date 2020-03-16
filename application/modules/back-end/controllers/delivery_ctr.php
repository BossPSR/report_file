<?php
defined('BASEPATH') or exit('No direct script access allowed');

class delivery_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Delivery_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $data['delivery'] = $this->Delivery_model->delivery();
            $this->load->view('options/header');
            $this->load->view('delivery',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function upload_delivery()
    {
        $userId      = $this->input->post('userId');     
        $order_id      = $this->input->post('order_id');     
        $team_id      = $this->input->post('team_id');     
        $select_item_id = $this->input->post('select_item_id');
        $search_item = $this->input->post('search_item');
        $code = $this->input->post('code');
        $topic = $this->input->post('topic');
        $select_file = $this->input->post('select_file');
      
        
        $select_item = $this->db->get_where('tbl_select_item', ['id' => $select_item_id])->row_array();
        $data = array(

            'userId'=> $userId,
            'select_item_id' => $select_item_id,
            'search_item' => $search_item,
            'select_item' => $select_item['name_item'],
            'upload_store_id' =>$order_id,
             'team_id'      =>$team_id,
            'code' => $code,
            'topic' => $topic,
            'create_at'                        => date('Y-m-d H:i:s')

        );
      
        if ($this->db->insert('tbl_upload_main_search', $data))

        {

            $id = $this->db->insert_id();
                $this->db->where('id',$id);
                $this->db->update('tbl_upload_main_search', ['id_doc' => "DM".$id]);
                

                foreach ($select_file as  $select_file) {
          $select_file_save = $this->db->get_where('tbl_upload_order_team', ['id' => $select_file])->row_array();
          $id_user  = $this->db->get_where('tbl_upload_order', ['order_id' => $select_file_save['order_id']])->row_array();
       
  $data2 = array(


            'file_name'                        => $select_file_save['file_name'],
            'store_id'                         => $select_file_save['order_id'],
            'path'                             => $select_file_save['path'],
            'userId'                           => $id_user['userId'],
            'status_chack'                     => 1,
            'status_main_search'               => 1,
            'create_at'                        => date('Y-m-d H:i:s')

        );

        $resultsedit =  $this->db->insert('tbl_upload_store', $data2);
    }
}

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
        }
        return redirect('Delivery');
    }
   
}
