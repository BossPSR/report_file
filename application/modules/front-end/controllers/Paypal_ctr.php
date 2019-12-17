<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_ctr extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        

    }


    public function success()
    {
        $data = [];
        $data['name'] = $this->input->post('name');
        $data['create_time'] = $this->input->post('create_time');
        $data['amount'] = $this->input->post('amount');
        $data['currency_code'] = $this->input->post('currency_code');
        $data['orderID'] = $this->input->post('orderId');
        $data['payerId'] = $this->input->post('payerId');
        $data['slip_id'] = $this->input->post('slip_id');

        $insert = [
            'orderID' => $data['orderID'],
            'payerId' => $data['payerId'],
            'amount' => $data['amount'],
            'slip_id' => $data['slip_id'],
            'currency_code' => $data['currency_code'],
            'first_name' => $data['name'],
            'last_name' => $data['name'],
            'create_time' => date("Y-m-d H:i:s")
        ];

        $success = $this->db->insert('tbl_paypal', $insert);

        echo json_encode($data);
        
    }
}