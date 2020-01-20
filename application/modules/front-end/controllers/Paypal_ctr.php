<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_ctr extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        

    }


    public function success()
    {
        $data = [];
        $data['user_id'] = $this->input->post('user_id');
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['create_time'] = $this->input->post('create_time');
        $data['amount'] = $this->input->post('amount');
        $data['currency_code'] = $this->input->post('currency_code');
        $data['orderID'] = $this->input->post('orderID');
        $data['payerID'] = $this->input->post('payerID');

        $insert = [
            'orderID' => $data['orderID'],
            'payerID' => $data['payerID'],
            'amount' => $data['amount'],
            'currency_code' => $data['currency_code'],
            'user_id' => $data['user_id'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'create_time' => date("Y-m-d H:i:s")
        ];

        $success = $this->db->insert('tbl_paypal', $insert);

        echo json_encode($data);  
    }
}