<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Team_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $data['team'] = $this->Team_model->teamOrder();
            // $data['team_job'] = $this->Team_model->team_job();

            $this->load->view('options/header');
            $this->load->view('team_list', $data);
            $this->load->view('options/footer');
        }
    }

    public function team_job_status()
    {
        $id = $this->input->post('id');
       
        $data = array(

            'status_approve'          => $this->input->post('status'),
            
        );
                       $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_job_position', $data);
        echo $resultsedit;
    }

    public function T3()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $data['team'] = $this->db->get('tbl_team')->result_array();

            $this->load->view('options/header');
            $this->load->view('t3_online', $data);
            $this->load->view('options/footer');
        }
    }
    public function status_team_t3()
    {
        $id = $this->input->get('id');
        $status_position = $this->input->get('status');

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_job_position', ['status_approve' => $status_position]);
        $team = $this->db->get_where('tbl_team', ['id' => $id])->row_array();
        $this->sendEmail_T3($team, $status_position);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated status information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated status information');
        }
        return redirect('T3_online');
    }

    private function sendEmail_T3($team, $status_position = false)
    {

        $team_1 = $this->db->get_where('tbl_team', ['id' => $team['id']])->row_array();

        $text = "";
        if ($status_position == 1) {
            $text = "Approve";
        } elseif ($status_position == 2) {
            $text = "Not Approve";
        }

        $text1 = "";
        if ($status_position == 1) {
            $text1 = "Approve";
        } elseif ($status_position == 2) {
            $text1 = "Not Approve";
        }

        $subject = 'Administrator approval status';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center;"><img src="" style="max-width:100%;"></div>';
        if ($status_position == false) {
            $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">' . $text1 . '</div>';
            $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">คุณ : ' . $team_1['name'] . 'โดน' . $text1 . '</div>';
        } elseif ($status_position == false) {
            $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">' . $text . '</div>';
            $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">คุณ : ' . $team_1['name'] . 'โดน' . $text . '</div>';
        }





        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Price : '.$upload_order[0]['price_file'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Discount : '.$discount.'%</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Customer ID : CM'.$upload_order[0]['userId'].'</div>';

        $message .= '<div>';
        $message .= '<div style="text-align: center;width:40%; margin:15px auto; background:#0063d1; font-size:28px;">';
        if ($status_position == false) {
            $message .= $text1;
        } elseif ($status_position == false) {
            $message .= $text;
        }
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
        $this->email->to($team_1['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send sendEmail_T3 information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send sendEmail_T3 information');
        }
        return redirect('back_team');
    }



    public function fileUpload_team_email()
    {
        // image_lib
        $team_id = $this->input->post('team_id');


        $target_dir = "uploads/T3/"; // Upload directory
        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path']     = 'uploads/T3/';
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
                    'id_team'       => $team_id,
                    'file_name'     => $uploadData['file_name'],
                    'path'          => 'uploads/T3/' . $uploadData['file_name'],
                    'create_at'     => date('Y-m-d H:i:s'),
                );
                $this->db->insert('tbl_send_email_team', $data);
                // $maxT = $this->db->insert_id();

                $team_id_send = $this->db->get_where('tbl_team', ['IdTeam' => $team_id])->row_array();

                $this->sendEmail_team($team_id_send);
            }
        }
    }

    private function sendEmail_team($team_id_send)
    {



        $subject = 'Email from system Career Development Tests';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;"> </div>';

        $team = $this->db->get_where('tbl_send_email_team', ['id_team' => $team_id_send['IdTeam']])->result_array();

        foreach ($team as $key => $team) {
            $message .= '<a href="http://ip-soft.co.th/ipsoft/' . $team['path'] . '">' . $team['file_name'] . '</a>';
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
        $this->email->to($team_id_send['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send Email T3 information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send Email T3 information');
        }

        return redirect('T3_online');
    }

    public function status_team()
    {
        $id = $this->input->get('id');
        $status = $this->input->get('status');

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_team', ['status' => $status, 'notify_admin' => 1]);
        $team = $this->db->get_where('tbl_team', ['id' => $id])->row_array();
        $this->sendEmail_Appove($team, $status);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated status information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated status information');
        }
        return redirect('back_team');
    }
    private function sendEmail_Appove($team, $status = false, $status_position = false)
    {

        $team1 = $this->db->get_where('tbl_team', ['id' => $team['id']])->row_array();

        $text = "";
        if ($status == 1) {
            $text = "Approve";
        } elseif ($status == 2) {
            $text = "Not Approve";
        } elseif ($status == 3) {
            $text = "Ban";
        }

        $text1 = "";
        if ($status_position == 1) {
            $text1 = "Approve";
        } elseif ($status_position == 2) {
            $text1 = "Not Approve";
        }

        $subject = 'Administrator approval status';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center;"><img src="" style="max-width:100%;"></div>';
        if ($status == false) {
            $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">' . $text1 . '</div>';
            $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">คุณ : ' . $team1['name'] . 'โดน' . $text1 . '</div>';
        } elseif ($status_position == false) {
            $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">' . $text . '</div>';
            $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">คุณ : ' . $team1['name'] . 'โดน' . $text . '</div>';
        }





        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Price : '.$upload_order[0]['price_file'].'</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Discount : '.$discount.'%</div>';
        //$message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Customer ID : CM'.$upload_order[0]['userId'].'</div>';

        $message .= '<div>';
        $message .= '<div style="text-align: center;width:40%; margin:15px auto; background:#0063d1; font-size:28px;">';
        if ($status == false) {
            $message .= $text1;
        } elseif ($status_position == false) {
            $message .= $text;
        }
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
        $this->email->to($team1['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }
        return redirect('back_team');
    }


    public function NotificationBan()
    {
        $id = $this->input->post('id');
        $team = $this->db->get_where('tbl_team', ['id' => $id])->row_array();
        $data_notification = [
            'IdTeam' => $team['IdTeam'],
            'notification_detail' => $this->input->post('note_ban'),
            'create_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ];
        $resultsedit = $this->db->insert('tbl_notification', $data_notification);


        $this->sendEmail_Notification_Ban($team);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
        }
        return redirect('back_team');
    }


    private function sendEmail_Notification_Ban($team)
    {


        $subject = 'System Warning';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;"> </div>';


        $teamsend = $this->db->get_where('tbl_team', ['id' => $team['id']])->row_array();
        $message .= '' . $teamsend['notification_ban'] . '';
        $message .= '<br>';






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
        $this->email->to($teamsend['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }

        return redirect('back_team');
    }

    public function deduct_income()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $income       = $this->input->post('income');
            $idteam       = $this->input->post('idteam');



            $team = $this->db->get_where('tbl_team', ['IdTeam' => $idteam])->row_array();
            $sum  = $team['income'] - $income;

            if ($sum < 0) {
                $this->session->set_flashdata('del_ss2', 'Out of balance can not be deducted.');
                redirect('back_team');
            } else {

                $data = [
                    'income'        => $sum,
                    'update_at'     => date('Y-m-d H:i:s'),
                ];
                $this->db->where('IdTeam', $idteam);
                $success = $this->db->update('tbl_team', $data);


                $detail       = $this->input->post('detail');
                $admin_by       = $this->input->post('admin_by');


                $this->load->library('upload');
                $config['upload_path'] = './uploads/deduct/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
                $config['max_size']     = '999999';
                $config['max_width'] = '10000';
                $config['max_height'] = '10000';
                $name_file = "Deduct-" . time();
                $config['file_name'] = $name_file;
                $this->upload->initialize($config);

                $this->upload->do_upload('file_name');

                $gamber     = $this->upload->data();
                $data = array(

                    'file_name'                => $gamber['file_name'],
                    'detail'                   => $detail,
                    'teamid_deduct'            => $idteam,
                    'deduct'                   => $income,
                    'admin_by'                 => $admin_by,
                    'path'                     => 'uploads/deduct/' . $gamber['file_name'],
                    'create_at'               => date('Y-m-d H:i:s')
                );


                $success = $this->db->insert('tbl_deduct', $data);
                $id_set = $this->db->insert_id();
                $this->sendEmail_deduct_income($team, $id_set);
                if ($success > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully  !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully ');
                }
                redirect('back_team');
            }
        }
    }
    private function sendEmail_deduct_income($team, $id_set)
    {


        $subject = 'System Warning';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;"> </div>';


        $teamsend = $this->db->get_where('tbl_deduct', ['id' => $id_set])->row_array();
        $message .= 'โดนโทษปรับ เป็นจำนวนเงินทั้งหมด' . $teamsend['deduct'] . '';
        $message .= 'รายละเอียด:' . $teamsend['detail'] . '';
        $message .= '<br>';






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
        $this->email->to($team['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }

        return redirect('back_team');
    }
    public function add_score_team()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $score      = $this->input->post('score');
            $idteam     = $this->input->post('idteam');

            $team = $this->db->get_where('tbl_team', ['IdTeam' => $idteam])->row_array();


            $data = [
                'team_score'     => $team['team_score'] + $score,
                'update_at'     => date('Y-m-d H:i:s'),
            ];

            $this->db->where('IdTeam', $idteam);
            $success = $this->db->update('tbl_team', $data);
            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', ' Successfully updated add score !!.');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully updated add score');
            }
            redirect('back_team');
        }
    }

    public function deduct_score_team()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $deduct       = $this->input->post('deduct');
            $idteam       = $this->input->post('idteam');

            $team = $this->db->get_where('tbl_team', ['IdTeam' => $idteam])->row_array();
            $sum = $team['team_score'] - $deduct;
            if ($sum < 0) {
                $this->session->set_flashdata('del_ss2', 'Out of balance can not be deducted.');
                redirect('back_team');
            } else {
                $data = [
                    'team_score'    => $sum,
                    'update_at'     => date('Y-m-d H:i:s'),
                ];
                $this->db->where('IdTeam', $idteam);
                $success = $this->db->update('tbl_team', $data);

                $detail_score       = $this->input->post('detail_score');
                $admin_by       = $this->input->post('admin_by');


                $this->load->library('upload');
                $config['upload_path'] = './uploads/deduct/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
                $config['max_size']     = '999999';
                $config['max_width'] = '10000';
                $config['max_height'] = '10000';
                $name_file = "Deduct_score-" . time();
                $config['file_name'] = $name_file;
                $this->upload->initialize($config);

                $this->upload->do_upload('file_name');

                $gamber     = $this->upload->data();
                $data = array(

                    'file_name'                => $gamber['file_name'],
                    'detail_score'             => $detail_score,
                    'teamid_deduct'            => $idteam,
                    'deduct_score'             => $deduct,
                    'admin_by'                 => $admin_by,
                    'path'                     => 'uploads/deduct/' . $gamber['file_name'],
                    'create_at'                => date('Y-m-d H:i:s')
                );


                $success = $this->db->insert('tbl_deduct_score', $data);
                $id_set = $this->db->insert_id();
                $this->sendEmail_deduct_score($team, $id_set);
                if ($success > 0) {
                    $this->session->set_flashdata('save_ss2', 'Successfully updated deduct score !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated deduct score');
                }
                redirect('back_team');
            }
        }
    }
    private function sendEmail_deduct_score($team, $id_set)
    {


        $subject = 'System Warning';

        $message = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
        $message .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
        $message .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
        $message .= '<body style="background: #eee;">';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;">Hello World</div>';


        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:18px;"> </div>';


        $teamsend = $this->db->get_where('tbl_deduct_score', ['id' => $id_set])->row_array();
        $message .= 'โดนโทษปรับ เป็นจำนวนเงินทั้งหมด' . $teamsend['deduct'] . '';
        $message .= 'รายละเอียด:' . $teamsend['detail'] . '';
        $message .= '<br>';






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
        $this->email->to($team['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully send  information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send  information');
        }

        return redirect('back_team');
    }
}
