<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Store_model');
        $this->load->helper('form');
        $this->load->library('email');  // เรียกใช้ email class
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

    public function check_order_add_com()
    {
            $id = $this->input->post('id');
            $orderid = $this->input->post('orderid');
            

        $data = array(

            'price_file'         => $this->input->post('price_file'),
            'Date_required'         => $this->input->post('Daterequired'),
            'status_book'         => 1
           

        );
                       $this->db->where('order_id', $orderid);     
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);
 
        $data2 = array(

            'id_document'                => $this->input->post('Document'),
            'id_user'                    => $this->input->post('Customer'),
            'id_orderBuy'                => $this->input->post('Order'), 
            'create_at'                  => date('Y-m-d H:i:s')
           

        );

                        
        $resultsedit2 = $this->db->insert('tbl_bookmark', $data2);

        $bookmark_id = $this->db->insert_id();
        $this->sendEmail($orderid,$bookmark_id);

        if ($resultsedit1 > 0 && $resultsedit2 > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
        return redirect('back_store_buy');
    }

    private function sendEmail($orderid,$bookmark_id)
    {
        $upload_order =  $this->db->get_where('tbl_upload_order', ['id' => $orderid])->row_array();
        $book_mark =  $this->db->get_where('tbl_bookmark', ['id' => $bookmark_id])->row_array();

        $subject = 'test ip-soft';
        
        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';

        $message .= 'Dear<br>';
        $message .= 'Hello World';
        $message .= 'File Name : '.$upload_order['file_name'];
        $message .= '<br>';
        $message .= 'Order ID : '.$upload_order['order_id'];
        $message .= '<br>';
        $message .= 'Price : '.$upload_order['price_file'];
        $message .= '<br>';
        $message .= 'Customer ID : CM'.$upload_order['userId'];
        $message .= '<br>';
        $message .= '<button type="button" class="btn btn-success"><a href="https://www.ip-soft.co.th/ipsoft/">Pay</a></button>';

        
        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'P@Ssw0rd';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";
    
        //$file_path = 'uploads/' . $file_name;
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('infinityp.soft@gmail.com');
            $this->email->to('boss3075030750@gmail.com');
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->set_mailtype('html');
        
                if($this->email->send()==true)
                {
                echo '1';
                }
                else
                {
                echo '2';
                }
        
    }

    // public function pay()
    // {
    //     if ($this->session->userdata('email_admin') == '') {
    //         redirect('backend');
    //     } else {
    //         $data['store'] = $this->db->get('tbl_upload_order')->result_array();
    //         $this->load->view('options/header');
    //         $this->load->view('reject_for_buy',$data);
    //         $this->load->view('options/footer');
	//     }
    // }

    public function check_NotSatisfired_order_add_com()
    {
            $id = $this->input->post('id');

        $data = array(

            'price_file'         => $this->input->post('price_file'),
            'Date_required'         => $this->input->post('Daterequired'),
            'status_book'         => 2
           

        );
                       $this->db->where('id', $id);     
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);
 
    


        if ($resultsedit1 > 0 ) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
        return redirect('back_store_buy');
    }

    public function reject_order_add_com()
    {
            $id = $this->input->post('id');

        $data = array(

            'note_reject'         => $this->input->post('note'),
            'is_check'            => 1
           
           

        );
                       $this->db->where('id', $id);     
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);
 
    


        if ($resultsedit1 > 0 ) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
        return redirect('back_store_buy');
    }

    public function reject_for_buy()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
	
        $data['store'] = $this->db->get('tbl_upload_order')->result_array();
		$this->load->view('options/header');
		$this->load->view('reject_for_buy',$data);
		$this->load->view('options/footer');
	 }
    }

    public function checkForsell()
	{
		if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
     } else {
	
        // $data['store'] = $this->Store_model->store_list();
        $data['store'] = $this->db->get_where('tbl_upload_store',['grade' => null ,'price_file'=> null ,'status_cp'=> null ])->result_array();
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
            $store_check = $this->input->post('store_check');
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

                if ($store_check == 'a') {
                    redirect('back_store_a');
                }elseif ($store_check == 'b') {
                    redirect('back_store_b');
                }elseif ($store_check == 'c') {
                    redirect('back_store_c');
                }
                
            }
            $this->session->set_flashdata('del_ss2','Not Successfully updated status information');
            redirect('back_store');
	    }

    }
	
}