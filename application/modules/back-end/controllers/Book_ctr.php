<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Store_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
  
            $this->load->view('options/header');
            $this->load->view('add_bookmark');
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function  bookmark_notpay()
    {
        if ($this->session->userdata('email_admin') != '') {
  
            $data['bookmark_all_not'] = $this->Store_model->bookmark_all_not();
            
            $this->load->view('options/header');
            $this->load->view('bookmark_notpay',$data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function bookmark_notpay_edit()
    {
        $id_order = $this->input->post('id_order');

        $data = array(

            'price_file'                         => $this->input->post('price_file'),
            'date_required'                      => $this->input->post('Daterequired'),
            'update_at'                        => date('Y-m-d H:i:s')

        );
                       $this->db->where('order_id', $id_order);
        $resultsedit = $this->db->update('tbl_upload_order', $data);
        $upload_order =  $this->db->get_where('tbl_upload_order', ['order_id' => $id_order])->result_array();
        $this->sendEmail($upload_order);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
        }
        return redirect('Bookmark_notpay');
    }
   
    private function sendEmail($upload_order)
    {
        $user = $this->db->get_where('tbl_user', ['id' => $upload_order[0]['userId']])->row_array();

        if ($user['score'] < '100') {
            $discount = 0;
        } elseif ($user['score'] <= '199') {
            $discount = 10;
        } elseif ($user['score'] <= '299') {
            $discount = 20;
        } elseif ($user['score'] <= '399') {
            $discount = 30;
        } elseif ($user['score'] <= '499') {
            $discount = 40;
        } elseif ($user['score'] > '499') {
            $discount = 50;
        }
        $priceDis = $upload_order[0]['price_file'] - (($upload_order[0]['price_file'] * $discount) / 100);


        $uploads = [];
        $numFile = 0;
        foreach ($upload_order as $uploadOrder) {
            $uploads[] = $uploadOrder['file_name'];
            $numFile += 1;
        }

        $subject = 'เอกสารการชำระเงิน จาก www.Report-file.com ';

        
        $message  = '<body style="background: #eee;">';
     
        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;"> เอกสารการชำระเงิน จาก www.Report-file.com  </div>';
        $message .= '<table align="center" style="font-size: 20px;border-collapse: separate!important; border-style: dotted;background: white;"  border="0">';

        $message .= '<tr>';
            $message .= '<td rowspan="' . $numFile . '">';
                $message .= ' File Name : ';
            $message .= '</td>';
            $message .= '<td>';
                $message .= ' 1.' . $uploads[0] . ' ';
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
                $message .=  ' ' . $num_list . '.' . $upload . ' ';
                $message .= '</td>';
            $message .= '</tr>';
        }

        $message .= '<tr>';
            $message .= '<td>';
                $message .= ' Order ID : ';
            $message .= '</td>';
            $message .= '<td>';
                $message .= ' ' . $upload_order[0]['order_id'] . ' ';
            $message .= '</td>';
        $message .= '</tr>';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' Price :';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' $' . $upload_order[0]['price_file'] . ' ';
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' Discount : ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' ' . $discount . '% ';
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' Customer ID : ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' ' . $upload_order[0]['userId'] . ' ';
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '</table>';

        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Order ID : '.$upload_order[0]['order_id'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Price : '.$upload_order[0]['price_file'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Discount : '.$discount.'%</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Customer ID : CM'.$upload_order[0]['userId'].'</div>';

        $message .= '<div>';
        $message .= '<div style="text-align: center; margin:15px auto; font-size:25px;    padding-bottom: 22px;">';
        $message .= '<a class="btn btn-info" style="     text-decoration: none;   padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #ffffff;background-color: #05786d;border: 1px solid #05786d;" href="https://www.ip-soft.co.th/ipsoft/payment_email?order_id=' . $upload_order[0]['order_id'] . '">';
        $message .= 'Pay $' . $priceDis . ' To Start';
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
        $this->email->to('infinityp.soft@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            echo '1';
        } else {
            echo '2';
        }
    }

    
    public function fileUpload_store_book()
    {
        // image_lib
        $DM = $this->input->post('DM');

          $upload_book = $this->Store_model->bookmark_upload($DM);

           $target_dir = "uploads/Store/"; // Upload directory
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
                        'store_id'      =>  $upload_book['store_id'],
                        'file_name'     => $uploadData['file_name'],
                        'status_main_search' => 1,
                        'status_chack' => 1,
                        'relive_status' => 1,
                        'path'          => 'uploads/Store/' . $uploadData['file_name'],
                        'status_check_drop' => 11,
                        'create_at'     => date('Y-m-d H:i:s'),
                    );
                    $this->db->insert('tbl_upload_store', $data);
                }
            }
        
    }
   

    public function sendEmail_delivery_pay()
    {
        
        $order_id =$this->input->post('order_id'); 
        $order_team =$this->input->post('order_team');
        $id =$this->input->post('id');       
        $dm_id =$this->input->post('dm_id');        

      

        $this->db->where('order_id',$id);
        $this->db->update('tbl_upload_order',['update_at' => date('Y-m-d H:i:s'),'status_delivery' => 1 ,'notify_team' => 0 ,'notify_user' => 0]);
        foreach ($dm_id as $key =>$dm_id) {
         
    
        $this->db->where('id_doc',$dm_id);
        $this->db->update('tbl_upload_main_search',['update_at' => date('Y-m-d H:i:s')]);



        

  }
       $user_email = $this->db->get_where('tbl_upload_order',['order_id'=> $order_id])->row_array();
       $user_email_send  = $this->db->get_where('tbl_user',['order_id'=> $user_email['userId']])->row_array();
      

        $subject = 'test ip-soft';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Order ID : ' . $id . '</div>';
        foreach ($order_id as $key => $order_id) {
            $order = $this->db->get_where('tbl_upload_store', ['id' => $order_id])->row_array();
            $message .= '<a href="http://ip-soft.co.th/ipsoft/'.$order['path'].'">'.$order['file_name'].'</a>';
            $message .= '<br>';
       }

       foreach ($order_team as $key => $order_team) {
           $orderT = $this->db->get_where('tbl_upload_order_team', ['id' => $order_team])->row_array();
           $message .= '<a href="http://ip-soft.co.th/ipsoft/'.$orderT['path'].'">'.$orderT['file_name'].'</a>';
           $message .= '<br>';

      }
     



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
        $this->email->to($user_email_send['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }

        return redirect('Bookmark');
    }

    public function upload_team_book()
    {
        $data = array(

            'order_id'                         => $this->input->post('order_id'),
            'position'                         => $this->input->post('position'),
            'wage'                             => $this->input->post('wage'),
            'note'                             => $this->input->post('note'),
            'date_required'                    => $this->input->post('Daterequired'),
            'create_at'                        => date('Y-m-d H:i:s')

        );
      
        $resultsedit = $this->db->insert('tbl_upload_team', $data);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
        }
        return redirect('Bookmark');
    }

}
