<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Approved_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Approved_model');
        $this->load->model('Store_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $this->load->view('options/header');
            $data['Approved'] = $this->Approved_model->Approved();
            $this->load->view('approved', $data);
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
            $this->load->view('not_approved', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function add_to_upload_main_search_approved()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $store_id       = $this->input->post('store_id');
            $order_id       = $this->input->post('order_id');
            $user_id        = $this->input->post('userId');
            $select_item_id = $this->input->post('select_item_id');
            // $teamId         = $this->input->post('teamId');
            //$search_item    = $this->input->post('search_item');
            $code           = $this->input->post('code');
            $topic          = $this->input->post('topic');
            $section        = $this->input->post('section');
            $dmsub          = $this->input->post('dmsub');
            $organization          = $this->input->post('organization');
            $cp          = $this->input->post('cp');

            $select_item    = $this->db->get_where('tbl_select_item', ['id' => $select_item_id])->row_array();
            $storrow        = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->row_array();
            $storedata      = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->result_array();
            if ($storrow['status_cp'] == 'complete') {
                $st = '1';
            } else {
                $st = '2';
            }

            if ($order_id) {
                $updb = [
                    'check_upload_to_main_search'         => '1',
                ];
                $this->db->where('order_id', $order_id);
                $success = $this->db->update('tbl_upload_order', $updb);
            }


            if (!empty($dmsub)) {

                // $this->db->where('section', $section);
                // $this->db->where('store_id', $store_id);
                // $this->db->update('tbl_upload_store', ['status_main_search' => 1]);

                $sub = $this->Store_model->dm_sub($dmsub);
                $i = 1;
                foreach ($sub as $key => $sub) {
                    $i += 1;
                }

                foreach ($storedata as $key => $storedata) {

                    $db_store = [
                        'dm_main'         => $dmsub,
                        'dm_sub'          => "DM" . $dmsub . '.' . $st . '.' . $i,
                        'file_name'       => $storedata['file_name'],
                        'path'            => $storedata['path'],
                        'create_at'       => date('Y-m-d H:i:s'),
                        'comandnocom'     => $st,
                        'cp'              => $cp

                    ];
                    $success = $this->db->insert('tbl_upload_main_search_sub', $db_store);
                }
            } else {
                $data = [
                    'userId'            => $user_id,
                    'select_item_id'    => $select_item_id,
                    'select_item'       => $select_item['name_item'],
                    'code'              => $code,
                    'topic'             => $topic,
                    'section'           => $section,
                    'create_at'         => date('Y-m-d H:i:s'),
                    'organization_upload' => $organization
                ];
                $success = $this->db->insert('tbl_upload_main_search', $data);
                $id = $this->db->insert_id();

                $this->db->where('id', $id);
                $this->db->update('tbl_upload_main_search', ['id_doc' => "DM" . $id]);

                // $this->db->where('section', $section);
                // $this->db->where('store_id', $store_id);
                // $this->db->update('tbl_upload_store', ['status_main_search' => 1]);
                foreach ($storedata as $key => $storedata) {

                    $db_store = [
                        'dm_main'         => $id,
                        'dm_sub'          => "DM" . $id . '.' . $st . '.' . '1',
                        'file_name'       => $storedata['file_name'],
                        'path'            => $storedata['path'],
                        'create_at'       => date('Y-m-d H:i:s'),
                        'comandnocom'     => $st,
                        'cp'              => $cp
                    ];
                    $success = $this->db->insert('tbl_upload_main_search_sub', $db_store);
                }
            }

            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', ' Successfully updated status information !!.');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully updated status information');
            }


            redirect('approved');
        }
    }

    public function add_to_upload_main_search_not_approved()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $store_check           = $this->input->post('store_check');
            $teamId                = $this->input->post('teamId');
            $order_id              = $this->input->post('order_id');
            $user_id               = $this->input->post('userId');
            $select_item_id        = $this->input->post('select_item_id');
            $search_item           = $this->input->post('search_item');
            $code                  = $this->input->post('code');
            $topic                 = $this->input->post('topic');
            $organization          = $this->input->post('organization');
            $cp                    = $this->input->post('cp');
            $storrow        = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->row_array();

            if ($storrow['status_cp'] == 'complete') {
                $st = '1';
            } else {
                $st = '2';
            }

            if ($order_id) {
                $updb = [
                    'check_upload_to_main_search'         => '1',
                ];
                $this->db->where('order_id', $order_id);
                $success = $this->db->update('tbl_upload_order', $updb);
            }


            $select_item = $this->db->get_where('tbl_select_item', ['id' => $select_item_id])->row_array();
            $upload_team = $this->db->get_where('tbl_upload_order_team', ['order_id' => $order_id])->result_array();
            if (!empty($select_item)) {
                $data = [
                    'userId' => $user_id,
                    'select_item_id' => $select_item_id,
                    'select_item' => $select_item['name_item'],
                    'code' => $code,
                    'topic' => $topic,
                    'organization_upload' => $organization,
                    'create_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ];
                $this->db->insert('tbl_upload_main_search', $data);

                $id = $this->db->insert_id();
                $this->db->where('id', $id);
                $this->db->update('tbl_upload_main_search', ['id_doc' => "DM" . $id]);
                $this->db->where('order_id ', $order_id);
                $success        = $this->db->update('tbl_upload_order_team', ['status_approved_upload' => 1]);
                $storedata      = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->result_array();

                foreach ($storedata as $key => $storedata) {

                    $db_store = [
                        'dm_main'         => $id,
                        'dm_sub'          => "DM" . $id . '.' . $st . '.' . '1',
                        'file_name'       => $storedata['file_name'],
                        'path'            => $storedata['path'],
                        'create_at'       => date('Y-m-d H:i:s'),
                        'comandnocom'     => $st,
                        'cp'              => $cp
                    ];
                    $success = $this->db->insert('tbl_upload_main_search_sub', $db_store);
                }
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
