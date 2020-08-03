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
			$checkTime = $this->Store_model->bookmark_all_not();
			foreach ($checkTime as $checkTime) {
				if ($checkTime['status_pay'] == 0) {
					
					$date_orderUp = date('Y-m-d H:i:s' ,strtotime('+30 day',strtotime($checkTime['upload_order_create_at'])));
					if ($date_orderUp <= date('Y-m-d')) {
						$this->db->where('id',$checkTime['upload_order_id']);
						$this->db->delect('tbl_upload_order');
					}
				
				}
			}
			
            $this->load->view('options/header');
            $this->load->view('bookmark_notpay', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function bookmark_notpay_edit()
    {
		$id_order   = $this->input->post('id_order');
		$user_id    = $this->input->post('user_id');
		$dm         = $this->input->post('DM');
        $status_cp  = $this->input->post('status_cp');
        
        $data = array(
            'price_file'       => $this->input->post('price_file'),
            'date_required'    => $this->input->post('Daterequired'),
            'create_at'        => date('Y-m-d H:i:s'),
            'update_at'        => date('Y-m-d H:i:s')
        );
        $this->db->where('order_id', $id_order);
        $resultsedit = $this->db->update('tbl_upload_order', $data);
        
		$this->db->where('id_orderBuy',$id_order);
        $this->db->delete('tbl_bookmark');
        
		foreach ($dm as $dm) {
			$dataDM = [
				'id_user'     => $user_id,
				'id_orderBuy' => $id_order,
				'id_document' => $dm,
				'create_at'   => date('Y-m-d H:i:s'),
			];
			$this->db->insert('tbl_bookmark',$dataDM);
		}
		
		$this->db->where('order_id',$id_order);
		$this->db->update('tbl_upload_order',['status_cp' => $status_cp ,'update_at' => date('Y-m-d H:i:s')]);
		
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
        $user = $this->db->get_where('tbl_user', ['idUser' => $upload_order[0]['userId']])->row_array();

        if ($user['score'] >= '100') {
            $discount = 10;
        } else {
            $discount = 0;
        }


        $priceDis = $upload_order[0]['price_file'] - (($upload_order[0]['price_file'] * $discount) / 100);


        $uploads = [];
        $numFile = 0;
        foreach ($upload_order as $uploadOrder) {
            $uploads[] = $uploadOrder['file_name'];
            $numFile += 1;
        }

        $subject  = 'เอกสารแจ้งชำระเงิน การแเปลี่ยนแปลงออเดอร์ จาก www.report-file.com ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'Your order has been placed';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $user['username'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $upload_order[0]['order_id'] . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order details ("' . $upload_order[0]['order_id'] . '")</p>';


        $message .= '<table style="font-size: 14px;border="0">';

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
        $message .= ' Date required : ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' ' . $upload_order[0]['date_required'] . ' ';
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


        $message .= '<div>';
        $message .= '<div style="text-align: center; margin:15px auto; font-size:25px;    padding-bottom: 22px;">';
        $message .= '<a class="btn btn-info" style="     text-decoration: none;   padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #ffffff;background-color: #05786d;border: 1px solid #05786d;" href="https://www.ip-soft.co.th/ipsoft/payment_email?order_id=' . $upload_order[0]['order_id'] . '">';
        $message .= 'Pay $' . $priceDis . ' To Start';
        $message .= '</a>';
        $message .= '</div>';
        $message .= '</div>';
        $message .= '</div>';
        $message .= '</center>';

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
        $this->email->to($user['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send Not Pay Edit information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send Not Pay Edit information');
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

    public function uploadmain_auto()
    {
        $status     =  $this->input->post('status');
        $DMS        =  $this->input->post('DMS');
        $stu        =  $this->input->post('stu');
        $s          = $this->Store_model->dm_sub_upload($DMS, $stu);

        $i = 1;
        foreach ($s as $key => $s) {
            $i += 1;
        }

        $orf = array(
            'create_at'     => date('Y-m-d H:i:s'),
            'status'        => $status
        );


        if ($this->db->insert('tbl_upload_auto', $orf)) {
            $insert_id = $this->db->insert_id();
            $update = array(
                'dm_create'    => 'DM' . $DMS . '.' . $stu . '.' . $i,
            );
            $this->db->where('id', $insert_id);
            $success = $this->db->update('tbl_upload_auto', $update);
            echo $success;
        }
    }

    public function fileUpload_main()
    {
        // image_lib
        $DM         = $this->input->post('DM');
        $status_cp  = $this->input->post('status_cpS');

        // $upload_book = $this->Store_model->bookmark_upload($DM);
                     $this->db->order_by('id', 'DESC');
        $dmmax     = $this->db->get('tbl_upload_auto')->row();



        $target_dir = "uploads/Store/"; // Upload directory
        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path']      = 'uploads/Store/';
            // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
            $config['allowed_types']    = '*';
            $config['max_size']         = '99999'; // max_size in kb
            $config['file_name']        = $_FILES['file']['name'];

            //Load upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // File upload
            if ($this->upload->do_upload('file')) {
                // Get data about the file
                $uploadData = $this->upload->data();

                // $data = array(
                //     'file_name'             => $uploadData['file_name'],
                //     'store_id'              => $upload_book['store_id'],
                //     'status_main_search'    => 1,
                //     'status_chack'          => 1,
                //     'relive_status'         => 1,
                //     'path'                  => 'uploads/Store/' . $uploadData['file_name'],
                //     'status_check_drop'     => 11,
                //     'section'               => $upload_book['section'],
                //     'create_at'             => date('Y-m-d H:i:s'),
                // );
                // $this->db->insert('tbl_upload_store', $data);

                $db_store = [
                    'dm_main'         => $DM,
                    'dm_sub'          => $dmmax->dm_create,
                    'file_name'       => $uploadData['file_name'],
                    'path'            => 'uploads/Store/' . $uploadData['file_name'],
                    'create_at'       => date('Y-m-d H:i:s'),
                    'comandnocom'     => $status_cp,
                ];
                $success = $this->db->insert('tbl_upload_main_search_sub', $db_store);
            }
        }
    }

    public function sendEmail_delivery_pay()
    {
        $order_id   = $this->input->post('order_id');
        $order_team = $this->input->post('order_team');
        $id         = $this->input->post('id');
        $dm_id      = $this->input->post('dm_id');

        $this->db->where('order_id', $id);
        $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'status_delivery' => 1, 'notify_team' => 0, 'notify_user' => 0]);
        foreach ($dm_id as $key => $dm_id) {

            $this->db->where('id_doc', $dm_id);
            $this->db->update('tbl_upload_main_search', ['update_at' => date('Y-m-d H:i:s')]);
        }

        $user_email = $this->db->get_where('tbl_upload_order', ['order_id' => $id])->row_array();
        $user_email_send  = $this->db->get_where('tbl_user', ['idUser' => $user_email['userId']])->row_array();


        $subject = 'เอกสารของคุณที่สั่งซื้อไว้ จาก www.report-file.com ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'Send all your documents successfully.';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $user_email_send['username'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $id  . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order details ("' . $id  . '")</p>';


        foreach ($order_id as $key => $order_id) {
            $order = $this->db->get_where('tbl_upload_store', ['id' => $order_id])->row_array();
            $message .= '<a href="http://ip-soft.co.th/ipsoft/' . $order['path'] . '">' . $order['file_name'] . '</a>';
            $message .= '<br>';
        }

        foreach ($order_team as $key => $order_team) {
            $orderT = $this->db->get_where('tbl_upload_order_team', ['id' => $order_team])->row_array();
            $message .= '<a href="http://ip-soft.co.th/ipsoft/' . $orderT['path'] . '">' . $orderT['file_name'] . '</a>';
            $message .= '<br>';
        }

        $message .= '</center>';



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

        if ($this->db->insert('tbl_upload_team', $data))

            $data2 = array(

                'status_bookmark_upload_to_team'      => 1,
                'update_at'                        => date('Y-m-d H:i:s')

            );

        $this->db->where('order_id', $this->input->post('order_id'));
        $resultsedit = $this->db->update('tbl_upload_order', $data2);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
        }
        return redirect('Bookmark');
    }
}
