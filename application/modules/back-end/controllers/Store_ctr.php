<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store_ctr extends CI_Controller
{

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
            $this->load->view('store', $data);
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
            $this->load->view('store_a', $data);
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
            $this->load->view('store_b', $data);
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
            $this->load->view('store_c', $data);
            $this->load->view('options/footer');
        }
    }
    public function storeForbuy()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $data['stored'] =  $this->Store_model->store_row();
            $data['ts']     =  $this->Store_model->team_select();
            $this->load->view('options/header');
            $this->load->view('storeforbuy', $data);
            $this->load->view('options/footer');
        }
    }

    public function check_dm()
    {
        $Document = $this->input->post('DocumentResult');
        $DocumentCut = explode(',', $Document[0]);
        $document_arr = array_unique($DocumentCut);


        $num = 0;
        foreach ($document_arr as $document_arr_detail) {
            $check_dm = $this->db->get_where('tbl_bookmark', ['id_document' => $document_arr_detail])->row_array();
            if (!empty($check_dm)) {
                $num += 1;
            }
        }

        echo $num;
    }

    public function check_order_add_com()
    {
        $id         = $this->input->post('id');
        $orderid    = $this->input->post('Order');
        $Document   = $this->input->post('DM');
        $team       = $this->input->post('team');
        $wage       = $this->input->post('wage');
        $Position   = $this->input->post('Position');
        if ($team) {
            $cf = '1';
        } else {
            $cf = '0';
        }
        // $Document = [];
        // $Document = explode(",", $Document[0]);
        // $Document = array_unique($Document);

        $data = array(

            'price_file'            => $this->input->post('price_file'),
            'Date_required'         => $this->input->post('Daterequired'),
            'status_book'           => 1,
            'note'                  => $this->input->post('note_s'),
            'update_at'             => date('Y-m-d H:i:s'),
            'notify_user'           => 0,
            'status_cp'             => $this->input->post('status_cp'),
            'status_confirmed_team' => $cf,
            'notify_admin'          => 0,
        );
        $this->db->where('order_id', $orderid);
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);
        if ($resultsedit1) {
            foreach ($Document as $Document) {

                $data2 = array(

                    'id_document'                => $Document,
                    'id_user'                    => $this->input->post('Customer'),
                    'id_orderBuy'                => $this->input->post('Order'),
                    'create_at'                  => date('Y-m-d H:i:s')

                );
                $this->db->insert('tbl_bookmark', $data2);
            }

            if ($team) {
                $data3 = array(

                    'order_id'       => $orderid,
                    'date_required'  => $this->input->post('Daterequired'),
                    'teamId'         => $team,
                    'wage'           => $wage,
                    'position'       => $Position,
                    'create_at'      => date('Y-m-d H:i:s')

                );
                $this->db->insert('tbl_upload_team', $data3);
            }
        }

        $upload_order =  $this->db->get_where('tbl_upload_order', ['order_id' => $orderid])->result_array();

        $this->sendEmail($upload_order);

        return redirect('back_store_buy');
    }

    private function sendEmail($upload_order)
    {
        $user = $this->db->get_where('tbl_user', ['idUser' => $upload_order[0]['userId']])->row_array();

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

        $subject  = 'เอกสารการชำระเงิน จาก www.report-file.com ';
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
            $this->session->set_flashdata('save_ss2', 'Successfully Update email ST information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update email ST information');
        }
    }



    public function check_NotSatisfired_order_add_com()
    {
        $id         = $this->input->post('id');
        $orderid    = $this->input->post('orderid');
        $team       = $this->input->post('team');
        $wage       = $this->input->post('wage');
        $Position   = $this->input->post('Position');
        if ($team) {
            $cf = '1';
        } else {
            $cf = '0';
        }

        $data = array(

            'price_file'                => $this->input->post('price_file'),
            'Date_required'             => $this->input->post('Daterequired'),
            'note'                      => $this->input->post('note_s'),
            'status_book'               => 2,
            'update_at'                 => date('Y-m-d H:i:s'),
            'status_confirmed_team'     => $cf,
            'notify_user'               => 0,
            'notify_admin'              => 0

        );
        $this->db->where('order_id', $orderid);
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);

        if ($team) {
            $data3 = array(

                'order_id'       => $orderid,
                'date_required'  => $this->input->post('Daterequired'),
                'teamId'         => $team,
                'wage'           => $wage,
                'position'       => $Position,
                'create_at'      => date('Y-m-d H:i:s')

            );
            $this->db->insert('tbl_upload_team', $data3);
        }


        $upload_order =  $this->db->get_where('tbl_upload_order', ['order_id' => $orderid])->result_array();
        $book_mark = null;
        $this->sendEmail($upload_order, $book_mark);

        return redirect('back_store_buy');
    }

    public function reject_order_add_com()
    {
        $id = $this->input->post('id');

        $data = array(

            'note_reject'         => $this->input->post('note'),
            'is_check'            => 1,
            'update_at'           => date('Y-m-d H:i:s'),
            'notify_user'         => 0,
            'notify_admin'        => 0


        );
        $this->db->where('id', $id);
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);

        $orderid = $this->db->get_where('tbl_upload_order', ['id' => $id])->row_array();

        $this->sendEmail_reject($orderid);

        return redirect('back_store_buy');
    }


    private function sendEmail_reject($orderid)
    {
        $user = $this->db->get_where('tbl_user', ['idUser' => $orderid['userId']])->row_array();

        $subject = 'Your document has been rejected.';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'Your order has been placed';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $user['username'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $orderid['order_id'] . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order details ("' . $orderid['order_id'] . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Order ID : ' . $orderid['order_id'] . '</div>';

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
            $this->session->set_flashdata('save_ss2', 'Successfully Update email Reject information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update email information');
        }
    }

    public function reject_for_buy()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $data['store'] = $this->db->get('tbl_upload_order')->result_array();
            $this->load->view('options/header');
            $this->load->view('reject_for_buy', $data);
            $this->load->view('options/footer');
        }
    }

    public function checkForsell()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $data['store'] = $this->Store_model->store_sell();

            $this->load->view('options/header');
            $this->load->view('checkforsell', $data);
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

    public function store_section()
    {

        $id_order = $this->input->get('id_order');

        $data = array(

            'section'         => $this->input->get('id_section'),


        );
        $this->db->where('id', $id_order);
        $resultsedit = $this->db->update('tbl_upload_store', $data);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update section information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update section information');
        }
        return redirect('back_store_checkForsell');
    }

    public function check_store_add_com()
    {
        $store_id       = $this->input->get('id');
        $id_section     = $this->input->get('id_section');
        $uploadStore    = $this->db->get_where('tbl_upload_store', ['store_id' => $store_id])->row_array();
        $user           = $this->db->get_where('tbl_user', ['idUser' => $uploadStore['userId']])->row_array();

        $data = array(

            'status_cp'           => $this->input->get('com'),
            'grade'               => $this->input->get('grad'),
            'price_file'          => $this->input->get('price'),
            'update_at'                  => date('Y-m-d H:i:s'),
            'notify_user'         => 0
        );
        $this->db->where('store_id', $store_id);
        $this->db->where('section', $id_section);
        if ($this->db->update('tbl_upload_store', $data)) {
            $data2 = array(

                'score'           => $user['score'] + $this->input->get('price'),
                'free_forever'    => 1

            );
            $this->db->where('idUser', $uploadStore['userId']);
            $resultsedit = $this->db->update('tbl_user', $data2);
        }



        if ($resultsedit > 0) {

            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
        return redirect('Section');
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
            $this->load->view('reject', $data);
            $this->load->view('options/footer');
        }
    }

    public function status_reject_del()
    {
        $id = $this->input->get('id');


        $reject_del =  $this->db->get_where('tbl_upload_store', ['id' => $id])->row_array();

        unlink($reject_del['path']);

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_upload_store', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated status information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated status information');
        }
        return redirect('back_store_checkForsell');
    }






    public function status_reject()
    {
        $id = $this->input->get('id');

        $this->db->where('id', $id);

        $resultsedit = $this->db->update('tbl_upload_store', ['update_at' => date('Y-m-d H:i:s'), 'is_check' => 1, 'notify_user' => 0, 'notify_user' => 1]);

        $orderid = $this->db->get_where('tbl_upload_order', ['id' => $id])->row_array();

        $this->sendEmail_reject($orderid);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated status information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated status information');
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
            $this->load->view('upload_main_search', $data);
            $this->load->view('options/footer');
        }
    }



    public function add_to_upload_main_search()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $store_check = $this->input->post('store_check');
            $store_id = $this->input->post('store_id');
            $user_id = $this->input->post('userId');
            $select_item_id = $this->input->post('select_item_id');
            $search_item = $this->input->post('search_item');
            $code = $this->input->post('code');
            $topic = $this->input->post('topic');
            $section = $this->input->post('section');

            $select_item = $this->db->get_where('tbl_select_item', ['id' => $select_item_id])->row_array();
            if (!empty($select_item)) {
                $data = [
                    'userId' => $user_id,
                    'select_item_id' => $select_item_id,
                    'search_item' => $search_item,
                    'select_item' => $select_item['name_item'],
                    'code' => $code,
                    'topic' => $topic,
                    'upload_store_id' => $store_id,
                    'section' => $section,
                    'create_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ];
                $success = $this->db->insert('tbl_upload_main_search', $data);
                $id = $this->db->insert_id();
                $this->db->where('id', $id);
                $this->db->update('tbl_upload_main_search', ['id_doc' => "DM" . $id]);
                $this->db->where('section', $section);
                $this->db->update('tbl_upload_store', ['status_main_search' => 1]);
                if ($success > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully updated status information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated status information');
                }

                if ($store_check == 'a') {
                    redirect('back_store_a');
                } elseif ($store_check == 'b') {
                    redirect('back_store_b');
                } elseif ($store_check == 'c') {
                    redirect('back_store_c');
                }
            }

            redirect('Section');
        }
    }

    public function upload_main_searc_ouject()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {
            $com        = $this->input->post('com');
            $select     = $this->input->post('select');
            $search     = $this->input->post('search');
            $code       = $this->input->post('code');
            $topic      = $this->input->post('topic');
            $emailadmin = $this->session->userdata('email_admin');
            $e          = $this->Store_model->admin_id($emailadmin);

            $select_item = $this->db->get_where('tbl_select_item', ['id' => $select])->row_array();
            $buymax      = $this->db->order_by('id', 'DESC')->get('tbl_order_s')->row();
            $dm      = $this->db->order_by('id', 'DESC')->get('tbl_upload_main_search')->row();
            $dmplus  = $dm->id + 1 ;
            if (!empty($select_item)) {
                $data = [
                    'userId' => $e['adminId'],
                    'id_doc' => 'DM' . $dmplus,
                    'select_item_id' => $select,
                    'search_item' => $search,
                    'select_item' => $select_item['name_item'],
                    'code' => $code,
                    'topic' => $topic,
                    'upload_store_id' => $buymax->order_main,
                    'create_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ];
                $success = $this->db->insert('tbl_upload_main_search', $data);
                echo $success;
            }
        }
    }


    public function check_com()
    {
        $store_id = $this->input->get('id');
        $dm = $this->db->get_where('tbl_upload_store', ['store_id' => $store_id, 'is_check' => '0'])->result_array();


        foreach ($dm as $key => $dm) {
            if ($dm['section'] == 0) {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Update Checking complete information');
                return redirect('back_store_checkForsell');
                continue;
            }
        }

        $data = array(
            'status_chack'                    => 1,
            'notify_admin'                    => 0
        );

        $this->db->where('store_id', $store_id);
        $resultsedit = $this->db->update('tbl_upload_store', $data);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update Checking complete information !!.');
            return redirect('back_store_checkForsell');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update Checking complete information');
            return redirect('back_store_checkForsell');
        }
    }


    public function status_cut_score()
    {
        $id         = $this->input->post('id');
        $CM         = $this->input->post('CM');
        $Order      = $this->input->post('Order');
        $score      = $this->input->post('score');
        $user       = $this->db->get_where('tbl_user', ['idUser' => $CM])->row_array();
        $path_del   = $this->db->get_where('tbl_upload_store', ['id' => $id])->row_array();

        $insert = array(
            'userId' => $CM,
            'order_id' => $Order,
            'deduct' => $score,
            'create_at' => date('Y-m-d H:i:s')
        );
        $success = $this->db->insert('tbl_deduct', $insert);

        if ($success) {

            $user_cut = $user['score'] - $score;
            $this->db->where('idUser', $CM);
            $this->db->update('tbl_user', ['score' => $user_cut]);

            unlink($path_del['path']);
            $this->db->where('id', $id);
            $resultsedit = $this->db->delete('tbl_upload_store');
        }

        $this->sendEmail_cut_score($Order, $score, $CM);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated status cut score information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated status cut score information');
        }
        return redirect('back_store_checkForsell');
    }

    private function sendEmail_cut_score($Order, $score, $CM)
    {
        $user = $this->db->get_where('tbl_user', ['idUser' => $CM])->row_array();

        $subject = 'Your document has been rejected.';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'Your order has been placed';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $user['username'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $Order . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order details ("' . $Order . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">รหัส : ' . $CM .  'order' . $Order . ' โดนหัก ' . $score . '</div>';

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
            $this->session->set_flashdata('save_ss2', 'Successfully Update email cut Score information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update email cut Score information');
        }
    }

    public function edit_date_required()
    {
        $order_id = $this->input->post('order_id');
        $date_required = $this->input->post('date_required');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'date_required' => $date_required]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated edit_date_required information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated edit_date_required information');
        }
        return redirect('back_store_buy');
    }


    public function  status_reject_forbey()
    {
        $id = $this->input->get('id');

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'is_check' => 0]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Clover File information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Clover File information');
        }
        return redirect('back_store_reject_for_buy');
    }

    public function fileUpload_search_main()
    {
        $emailadmin = $this->session->userdata('email_admin');
        $e = $this->Store_model->admin_id($emailadmin);

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

                $buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_s')->row();

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();

                    $data = array(
                        'userId'                => $e['adminId'],
                        'store_id'              => $buymax->order_main,
                        'file_name'             => $uploadData['file_name'],
                        'path'                  => 'uploads/Store/' . $uploadData['file_name'],
                        'create_at'             => date('Y-m-d H:i:s'),
                        'notify_admin'          => 0,
                        'status_main_search'    => 1
                    );
                    $this->db->insert('tbl_upload_store', $data);
                }
            }
        }
    }
}
