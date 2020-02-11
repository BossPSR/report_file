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

      $dm = $this->db->get_where('tbl_upload_main_search',['id_doc'=> $this->input->post('Document')])->row_array();
        if($dm== true){
$data = array(

            'price_file'         => $this->input->post('price_file'),
            'Date_required'         => $this->input->post('Daterequired'),
            'status_book'         => 1,
            'update_at'                  => date('Y-m-d H:i:s')

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

        $upload_order =  $this->db->get_where('tbl_upload_order', ['order_id' => $orderid])->result_array();
        $book_mark =  $this->db->get_where('tbl_bookmark', ['id' => $bookmark_id])->row_array();

        $this->sendEmail($upload_order,$book_mark);

        if ($resultsedit1 > 0 && $resultsedit2 > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update Satisfied information');
        }
        return redirect('back_store_buy');
        }
        else{
            $this->session->set_flashdata('del_ss2', 'Not Successfully math id docment information');
            return redirect('back_store_buy');
        }
      
        
    }

    private function sendEmail($upload_order,$book_mark)
    {
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
            
        
        $uploads = [];
        $numFile = 0;
        foreach ($upload_order as $uploadOrder) {
            $uploads[] = $uploadOrder['file_name'];
            $numFile += 1;
        }

        $subject = 'test ip-soft';
        
        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';
        $message .= '<table align="center" style="font-size: 18px;" border="1">';

        $message .= '<tr>';
        $message .= '<td rowspan="'.$numFile.'">';
        $message .= ' File Name ';       
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' 1.'.$uploads[0].' ';       
        $message .= '</td>';
        $message .= '</tr>';

        $num_list = 1;
        foreach ($uploads as $numKey => $upload) {
            if ($numKey == 0) {
                continue;
            }
            $num_list += 1;
            $message .= '<tr>';
            $message .= '<td>';
            $message .=  ' '.$num_list.'.'.$upload.' ';
            $message .= '</td>';
            $message .= '</tr>';
        }

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' Order ID ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' '.$upload_order[0]['order_id'].' ';
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' Price ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' '.$upload_order[0]['price_file'].' ';
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' Discount ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' '.$discount.' ';
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' Customer ID ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' '.$upload_order[0]['userId'].' ';
        $message .= '</td>';
        $message .= '</tr>';
        

        $message .= '</table>';

        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Order ID : '.$upload_order[0]['order_id'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Price : '.$upload_order[0]['price_file'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Discount : '.$discount.'%</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Customer ID : CM'.$upload_order[0]['userId'].'</div>';

        $message .= '<div>';
        $message .= '<div style="text-align: center;width:40%; margin:15px auto; background:#0063d1; font-size:28px;">';
        $message .= '<a style="color: #000;text-decoration: none; display: block; border: 2px solid;" href="https://www.ip-soft.co.th/ipsoft/payment_email?order_id='.$upload_order[0]['order_id'].'">';
        $message .= 'Pay $'.$priceDis.' To Start';
        $message .= '</a>';
        $message .= '</div>';
        $message .= '</div>';
        $message .= '</body>';
        
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

    private function sendEmail_reject($upload_order,$book_mark)
    {
        $user = $this->db->get_where('tbl_user',['id' => $upload_order[0]['userId']])->row_array();

        $subject = 'test ip-soft';
        
        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Order ID : '.$upload_order[0]['order_id'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Price : '.$upload_order[0]['price_file'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Discount : '.$discount.'%</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Customer ID : CM'.$upload_order[0]['userId'].'</div>';

        $message .= '<div>';
        $message .= '<div style="text-align: center;width:40%; margin:15px auto; background:#0063d1; font-size:28px;">';
        $message .= 'Reject';
        $message .= '</div>';
        $message .= '</div>';
        $message .= '</body>';
        
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

    public function check_NotSatisfired_order_add_com()
    {
            $id = $this->input->post('id');
            $orderid = $this->input->post('orderid');

        $data = array(

            'price_file'         => $this->input->post('price_file'),
            'Date_required'         => $this->input->post('Daterequired'),
            'status_book'         => 2
           

        );
                       $this->db->where('order_id', $orderid);     
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);
 
        $upload_order =  $this->db->get_where('tbl_upload_order', ['order_id' => $orderid])->result_array();
        $book_mark = null;
        $this->sendEmail($upload_order,$book_mark);

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
 
        $orderid = $this->db->get_where('tbl_upload_order', ['id' => $id])->row_array();
        $upload_order =  $this->db->get_where('tbl_upload_order', ['order_id' => $orderid['order_id']])->result_array();
        $book_mark = null;
        $this->sendEmail($upload_order,$book_mark);


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