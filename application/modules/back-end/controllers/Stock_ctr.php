<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_stock_model');
        $this->load->model('Store_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {
            $data['stock'] = $this->My_stock_model->stock();
            $this->load->view('options/header');
            $this->load->view('my_stock', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function my_stock_admin()
    {
        if ($this->session->userdata('email_admin') != '') {
            $data['stock']     = $this->My_stock_model->stock_Admin();
            $data['ts']     = $this->Store_model->team_select();
            $this->load->view('options/header');
            $this->load->view('my_stock_admin', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }
    public function  my_stock_up_mainfile()
    {
        if ($this->session->userdata('email_admin') != '') {
            $orderST                = $this->input->post('orderST');
            $ordername = $this->db->get_where('tbl_upload_order', ['order_id' => $orderST])->row_array();

            $target_dir = "uploads/Main/"; // Upload directory
            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/Main/';
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
                        'order_id'          => $ordername['order_id'],
                        'userId'            => $ordername['userId'],
                        'Username'          => $ordername['Username'],
                        'email'             => $ordername['email'],
                        'price_file'        => $ordername['price_file'],
                        'price_dis_order'   => $ordername['price_dis_order'],
                        'score_user'        => $ordername['score_user'],
                        'date_required'     => $ordername['date_required'],
                        'status_book'       => $ordername['status_book'],
                        'status_admin'      => $ordername['status_admin'],
                        'is_check'          => $ordername['is_check'],
                        'note_reject'       => $ordername['note_reject'],
                        // 'is_confirm'        => $is_confirm,
                        'status_pay'        => $ordername['status_pay'],
                        'select_item'       => $ordername['select_item'],
                        'status_approved'   => $ordername['status_approved'],
                        'notify_user'       => $ordername['notify_user'],
                        'status_confirmed_team' => $ordername['status_confirmed_team'],
                        'status_cp'         => $ordername['status_cp'],
                        'status_delivery'   => $ordername['status_delivery'],
                        'notify_team'       => $ordername['notify_team'],
                        'notify_admin'      => $ordername['notify_admin'],
                        'click_step'        => $ordername['click_step'],
                        'file_name'         => $uploadData['file_name'],
                        'path'              => 'uploads/Main/' . $uploadData['file_name'],
                        'created_at_buy'         => date('Y-m-d H:i:s'),
                        'status_upload_admin'   => 1 // admin
                    );
                    $this->db->insert('tbl_upload_order', $data);
                }
            }
        } else {
            redirect('Login_admin');
        }
    }
    public function my_stock_up_gtfile()
    {
        if ($this->session->userdata('email_admin') != '') {
            $orderST                = $this->input->post('orderST');
            $userOR                 = $this->input->post('userOR');


            $target_dir = "uploads/Buy/GT/"; // Upload directory
            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/Buy/GT/';
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
                    $max_id = $this->db->order_by('id', 'desc')->get('tbl_morefile_GT')->row_array();
                    $uploadData = $this->upload->data();
                    $data2 = array(
                        'more_id'       => $max_id['id'],
                        'order_id'      => $orderST,
                        'file_name_GT'  => $uploadData['file_name'],
                        'path_GT'       => 'uploads/Buy/GT/' . $uploadData['file_name'],
                        'create_at'     => date('Y-m-d H:i:s'),
                    );
                    $this->db->insert('tbl_upload_orderGT', $data2);
                }
            }
        } else {
            redirect('Login_admin');
        }
    }

    public function add_my_stock_admin()
    {
        if ($this->session->userdata('email_admin') != '') {
            $data['stock'] = $this->My_stock_model->stock();
            $this->load->view('options/header');
            $this->load->view('add_stock_admin', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function fileUpload_buy_admin()
    {
        // image_lib
        $id_admin = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array();

        $userId         =  $id_admin['adminId'];
        $date_req       =  $this->input->post('date_required');
        $name           =  $this->input->post('name');
        $email          =  $this->input->post('email');
        $status_cp_save =  $this->input->post('status_cp_save');
        $price_save     =  $this->input->post('price_save');
        $org_save       =  $this->input->post('org_save');
        $note1_save     =  $this->input->post('note1_save');
        $DMCheck        =  $this->input->post('DMCheck');

        if (!empty($DMCheck)) {
            $num = 1;
        } else {
            $num = 2;
        }

        if ($status_cp_save == 'complete') {
            $cp = 1;
        } else {
            $cp = 0;
        }


        $target_dir = "uploads/Buy/"; // Upload directory

        $request = 1;

        if (isset($_POST['request'])) {
            $request = $_POST['request'];
        }
        if ($request == 1) {
            // Set preference
            $config['upload_path']     = 'uploads/Buy/';
            // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
            $config['allowed_types']   = '*';
            $config['max_size']        = '99999'; // max_size in kb
            $config['file_name']       = $_FILES['file']['name'];

            //Load upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();

            // File upload
            if ($this->upload->do_upload('file')) {
                // Get data about the file
                $uploadData = $this->upload->data();

                $data = array(

                    'userId'            => $userId,
                    'order_id'          => $buymax->order_main,
                    'date_required'     => $date_req,
                    'Username'          => $name,
                    'email'              => $email,
                    'status_admin'      => 1,
                    'status_book'       => $num,
                    'status_bookmark'   => $cp,
                    'status_pay'        => 1,
                    'price_file'        => $price_save,
                    'note_user'            => $note1_save,
                    'organization'      => $org_save,
                    'status_cp'          => $status_cp_save,
                    'file_name'         => $uploadData['file_name'],
                    'path'              => 'uploads/Buy/' . $uploadData['file_name'],
                    'created_at_buy'         => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_upload_order', $data);
            }
        }
    }


    public function fileUpload_buy_main()
    {
        // image_lib
        $id_admin = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email_admin')])->row_array();

        $userId     =  $id_admin['id'];
        $date_req   =  $this->input->post('date_required');
        $name       =  $this->input->post('name');
        $email      =  $this->input->post('email');


        $target_dir = "uploads/Buy/"; // Upload directory

        $request = 1;

        if (isset($_POST['request'])) {
            $request = $_POST['request'];
        }
        if ($request == 1) {
            // Set preference
            $config['upload_path']     = 'uploads/Buy/';
            // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
            $config['allowed_types']   = '*';
            $config['max_size']        = '99999'; // max_size in kb
            $config['file_name']       = $_FILES['file']['name'];

            //Load upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $buymax = $this->db->order_by('id', 'DESC')->get('tbl_order_f')->row();

            // File upload
            if ($this->upload->do_upload('file')) {
                // Get data about the file
                $uploadData = $this->upload->data();

                $data = array(

                    'userId'        => $userId,
                    'order_id'      => $buymax->order_main,
                    'date_required' => $date_req,
                    'Username'      => $name,
                    'email'          => $email,
                    'status_admin'  =>  1,
                    'status_book'   =>  2,
                    'status_pay'    =>  1,
                    'file_name'     => $uploadData['file_name'],
                    'path'          => 'uploads/Buy/' . $uploadData['file_name'],
                    'created_at_buy'     => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_upload_order', $data);
            }
        }
    }

    public function order_approved_admin()
    {
        $order_id       = $this->input->post('order_id');
        $is_confirm     = $this->input->post('status_approved');

        if ($this->session->userdata('email_admin') == '') {
            redirect('home');
        } else {
            $data = array(
                'status_approved'        => $is_confirm,
            );

            $this->db->where('order_id', $order_id);
            $success = $this->db->update('tbl_upload_order', $data);

            echo $success;
        }
    }

    public function order_not_approved_admin()
    {
        $order_id             = $this->input->post('order_id');
        $is_confirm           = $this->input->post('status_approved');

        if ($this->session->userdata('email_admin') == '') {
            redirect('home');
        } else {
            $data = array(
                'status_approved'        => $is_confirm,
            );

            $this->db->where('order_id', $order_id);
            $success = $this->db->update('tbl_upload_order', $data);

            echo $success;
        }
    }

    public function delete_order_stock_admin()
    {
        $id     = $this->input->post('order_id');
        $note   = $this->input->post('note');
        $row    = $this->db->get_where('tbl_upload_team', ['order_id' => $id])->row_array();
        if ($row == true) {
            $team = array(
                'status'      => 4,
            );

            $this->db->where('order_id', $id);
            $this->db->update('tbl_upload_team', $team);
        }

        $data = array(

            'note_reject'         => $note,
            'is_check'            => 1,
            'update_at'           => date('Y-m-d H:i:s'),
            'notify_user'         => 0,
            'notify_admin'        => 0

        );
        $this->db->where('order_id', $id);
        $resultsedit1 = $this->db->update('tbl_upload_order', $data);
        if ($resultsedit1) {
            $cancel = array(

                'order_id'         => $id,
                'status'           => 1,
                'history'          => $note,
                'status_who'       => 'admin cancel',
                'create_at'        => date('Y-m-d H:i:s'),
                'update_at'        => date('Y-m-d H:i:s'),
                'end_date_ncf'     => date("Y-m-d", strtotime(" + 30 days")),

            );
            $this->db->insert('tbl_cancel', $cancel);
        }

        if ($resultsedit1) {
            $this->session->set_flashdata('save_ss2', 'Successfully cancel information !!.');
            return redirect('my_stock_admin');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully cancel email information');
            return redirect('my_stock_admin');
        }
    }

    public function sendemail_delivery_stockadmin()
    {

        $order_id       = $this->input->post('order_id');
        $email          = $this->input->post('email');
        $order_team     = $this->input->post('order_team');

        $user_order     = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->row_array();




        $subject = 'เอกสารของคุณที่สั่งซื้อไว้ จาก www.report-file.com ';

        $message = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'Send all your documents successfully.';
        $message .= '</div>';
        $message .= '<div class="row">';

        $message .= '<p>Hey "' . $email . '",</p>';


        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order_id  . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order details ("' . $order_id  . '")</p>';


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
        $config['smtp_pass'] = 'infinityP23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }

        return redirect('my_stock_admin');
    }

    public function upload_team_ST_admin()
    {
        $order_id           = $this->input->post('order_id');
        $wage               = $this->input->post('wage');
        $teamid             = $this->input->post('teamid') == '' ? null : $this->input->post('teamid');
        $position           = $this->input->post('position');
        $note               = $this->input->post('note_new');
        $date_required      = $this->input->post('date_required');
        $checkbox           = $this->input->post('checkbox');
        $checkboxmain       = $this->input->post('checkboxmain');
        $checkboxgt         = $this->input->post('checkboxgt');

        $wa = $this->db->get_where('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        if ($wa == true) {
            $this->db->delete('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        }

        if ($checkbox) {
            foreach ($checkbox as $key => $checkbox) {
                $resultT = $this->db->get_where('tbl_upload_order_team', ['id' => $checkbox])->row_array();
                $boxdata = [
                    'order_id_back'     => $resultT['order_id'],
                    'file_name_back'     => $resultT['file_name'],
                    'path_back'         => $resultT['path'],
                    'create_at_back'    => date('Y-m-d H:i:s'),
                ];

                $this->db->insert('tbl_upload_backup_team', $boxdata);
            }
        }


        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_order', ['status_confirmed_team' => '0', 'update_at' => date('Y-m-d H:i:s')]);

        if ($teamid) {
            foreach ($teamid as $key => $teamid) {
                $insertdb = [
                    'order_id'          => $order_id,
                    'wage'              => $wage,
                    'position'          => $position,
                    'teamId'            => $teamid,
                    'note'              => $note,
                    'status'            => 0,
                    'status_check_team' => 0,
                    'create_at'         => date('Y-m-d H:i:s')
                ];
                $resultsedit = $this->db->insert('tbl_upload_team', $insertdb);
                $last = $this->db->insert_id();

                if ($checkboxmain) {
                    foreach ($checkboxmain as $key => $checkboxmain) {
                        $resultTM = $this->db->get_where('tbl_upload_order', ['id' => $checkboxmain])->row_array();
                        $mdata = [
                            'sub_id_m'          => $last,
                            'order_id_m'        => $resultTM['order_id'],
                            'file_name_m'       => $resultTM['file_name'],
                            'path_m'            => $resultTM['path'],
                            'create_at_m'       => date('Y-m-d H:i:s'),
                        ];

                        $this->db->insert('tbl_upload_backup_main', $mdata);
                    }
                }

                if ($checkboxgt) {
                    foreach ($checkboxgt as $key => $checkboxgt) {
                        $resultTG = $this->db->get_where('tbl_upload_orderGT', ['id' => $checkboxgt])->row_array();
                        $gtdata = [
                            'sub_id_g'          => $last,
                            'order_id_g'        => $resultTG['order_id'],
                            'file_name_g'       => $resultTG['file_name_GT'],
                            'path_g'            => $resultTG['path_GT'],
                            'create_at_g'       => date('Y-m-d H:i:s'),
                        ];

                        $this->db->insert('tbl_upload_backup_gt', $gtdata);
                    }
                }

                $this->sendEmail_all($teamid, $order_id);
            }
        }


        if ($resultsedit) {
            if ($teamid == '') {
                $this->db->where('order_id', $order_id);
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully Update to team information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1, 'date_required' => $date_required]);
            }
        }

        return redirect('my_stock_admin');
    }


    private function sendEmail_all($teamid, $order_id)
    {
        $team  = $this->db->get_where('tbl_team', ['idTeam' => $teamid])->row_array();

        $subject = 'You have received additional work from the admin. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $team['name'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order_id . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order Details ("' . $order_id . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;"> You have received an order at : ' . $order_id . ' , Please check the binder. http://www.ip-soft.co.th/ipsoft </div>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinityP23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($team['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
    }
}
