<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        if ($this->session->userdata('email') == '') {
            redirect('home');
        } else {
            $data['userId'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('options/header_login');
            $this->load->view('store', $data);
            $this->load->view('options/footer');
        }
    }

    public function fileUpload_store()
    {
        // image_lib
        $userId = $this->input->post('userId');

        $target_dir = "uploads/Store/"; // Upload directory

        $request = 1;

        if (isset($_POST['request'])) {
            $request = $_POST['request'];
        }
        if ($request == 1) {
            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/Store/';
                // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['allowed_types']   = '*';
                $config['max_size']        = '99999'; // max_size in kb
                $config['file_name']     = $_FILES['file']['name'];

                //Load upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();

                    $data = array(
                        'userId'      => $userId,
                        // 'order_id'      => $insert_id,
                        'file_name'      => $uploadData['file_name'],
                        'path'        => 'uploads/Store/' . $uploadData['file_name'],
                        'create_at'      => date('Y-m-d H:i:s'),
                    );
                    if ($this->db->insert('tbl_upload_store', $data)) {
                        $last_id = $this->db->insert_id();

                        $data2 = array(
                            'store_id'  => "ST-" . $last_id,
                        );
                        $this->db->where('id', $last_id);
                        $this->db->update('tbl_upload_store', $data2);
                    
                    }
                }
            }
        }

        $paypalCheck = $this->db->order_by('id', 'DESC')->get_where('tbl_paypal', ['user_id' => $userId])->row_array();
        $datePaypal = date("Y-m-d", strtotime($paypalCheck['start_time']));
        $checkDate = DateDiff($datePaypal, date("Y-m-d"));

        if ($paypalCheck['status_drop'] == 0) {
            $start_time = date('Y-m-d H:i:s', strtotime($paypalCheck['start_time'] . ' + 30 days'));
            $this->db->where('user_id', $paypalCheck['user_id']);
            $this->db->update('tbl_paypal', ['status_drop' => 1, 'start_time' => $start_time]);
        }

        if (empty($paypalCheck) || empty($paypalCheck['orderID']) && empty($paypalCheck['payerID'])) {
            $start_time = date('Y-m-d H:i:s', strtotime("+29 day"));
            $dataFree = [
                'currency_code' => 'USD',
                'user_id' => $userId,
                'create_time' => date('Y-m-d H:i:s'),
                'start_time' => $start_time,
                'status_drop' => 1
            ];
            $this->db->insert('tbl_paypal', $dataFree);
        }

      
    }
}
