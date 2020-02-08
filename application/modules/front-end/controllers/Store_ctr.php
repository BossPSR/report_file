<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buy_model');
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

                $buymax = $this->Buy_model->buy_max();

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();

                    $data = array(
                        'userId'        => $userId,
                        'store_id'      => $buymax->maxorder,
                        'file_name'     => $uploadData['file_name'],
                        'path'          => 'uploads/Store/' . $uploadData['file_name'],
                        'create_at'     => date('Y-m-d H:i:s'),
                    );
                    $this->db->insert('tbl_upload_store', $data);
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

    public function payment_email()
    {
        $order_id = $this->input->get('order_id');
        $upload_order =  $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->result_array();
        $uploads = [];
        foreach ($upload_order as $uploadOrder) {
            $uploads[] = $uploadOrder['file_name'];
        }
        $end_uploads = end($uploads);
        $fileName = "";
        foreach ($uploads as $upload) {
            if ($upload == $end_uploads) {
                $fileName .=  $upload;
            }else{
                $fileName .=  $upload.',';
            }
        }

        $user = $this->db->get_where('tbl_user',['id' => $upload_order[0]['userId']])->row_array();

        if ($user['score'] < '100'){
            $discount = 0;
        }elseif($user['score'] <= '199'){
            $discount = 10;
        }elseif ($user['score'] <= '299'){
            $discount = 20;
        }elseif ($user['score'] <= '399'){
            $discount = 30;
        }elseif ($user['score'] <= '499'){
            $discount = 40;
        }elseif ($user['score'] > '499'){
            $discount = 50;
        }
        $priceDis = $upload_order[0]['price_file'] - (($upload_order[0]['price_file']*$discount)/100);

        $data['file_name'] = $fileName;
        $data['order_id'] = $upload_order[0]['order_id'];
        $data['price_file'] = $upload_order[0]['price_file'];
        $data['discount'] = $discount;
        $data['customer_id'] = $upload_order[0]['userId'];
        $data['price_dis'] = $priceDis;
        
        $this->load->view('payment_email',$data);
    }

    public function payment_email_success()
    {
        $file_name = $this->input->post('file_name');
        $order_id = $this->input->post('order_id');
        $price_file = $this->input->post('price_file');
        $discount = $this->input->post('discount');
        $price_dis = $this->input->post('price_dis');
        $customer_id = $this->input->post('customer_id');
        $email = $this->input->post('email');
        $user_id = $this->input->post('user_id');
        $user = $this->db->get_where('tbl_user',['id' => $user_id])->row_array();

        $checkStore_for_buy_email = $this->db->get_where('tbl_store_for_buy_email',['order_id',$order_id])->row_array();
        if (!empty($checkStore_for_buy_email)) {
            $this->session->set_flashdata('fail_doc', TRUE);
            redirect('/');
        }

        if ($user['cash'] < $price_dis) {
            $this->session->set_flashdata('error_cash', TRUE);
            redirect('/');
        }

        $data = [
            'file_name' => $file_name,
            'order_id' => $order_id,
            'price_file' => $price_file,
            'discount' => $discount,
            'price_dis' => $price_dis,
            'customer_id' => $customer_id,
            'email' => $email,
            'user_id' => $user_id,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('tbl_store_for_buy_email',$data);
        $this->session->set_flashdata('success_cash', TRUE);
        redirect('/');
        
    }
}
