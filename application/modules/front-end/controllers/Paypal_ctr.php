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
        echo json_encode($data);
        
    }
}