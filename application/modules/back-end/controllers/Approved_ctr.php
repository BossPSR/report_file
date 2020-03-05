<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Approved_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Approved_model');

    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $this->load->view('options/header');
             $data['Approved'] = $this->Approved_model->Approved();
            $this->load->view('approved',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }



    public function not_approved()
    {
        if ($this->session->userdata('email_admin') != '') {
            $this->load->view('options/header');
        $data['not_Approved'] = $this->Approved_model->not_Approved();
            $this->load->view('not_approved',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function add_to_upload_main_search_not_approved()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $store_check = $this->input->post('store_check');
            $teamId = $this->input->post('teamId');
            $order_id = $this->input->post('order_id');
            $user_id = $this->input->post('userId');
            $select_item_id = $this->input->post('select_item_id');
            $search_item = $this->input->post('search_item');
            $code = $this->input->post('code');
            $topic = $this->input->post('topic');

            $select_item = $this->db->get_where('tbl_select_item', ['id' => $select_item_id])->row_array();
            if (!empty($select_item)) {
                $data = [
                    'userId' => $user_id,
                    'team_id' => $teamId,
                    'select_item_id' => $select_item_id,
                    'search_item' => $search_item,
                    'select_item' => $select_item['name_item'],
                    'code' => $code,
                    'topic' => $topic,
                    'upload_store_id' => $order_id,
                    'create_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ];
                $success = $this->db->insert('tbl_upload_main_search', $data);
                $id = $this->db->insert_id();
                $this->db->where('id',$id);
                $this->db->update('tbl_upload_main_search', ['id_doc' => "DM".$id]);
                $this->db->where('order_id ',$order_id);
                $this->db->update('tbl_upload_order_team', ['status_approved_upload' => 1]);
                if ($success > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully updated status information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated status information');
                }

                
            }
            
            redirect('not-approved');
        }
    }

}
