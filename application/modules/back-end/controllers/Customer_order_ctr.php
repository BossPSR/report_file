<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_order_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->model('My_stock_model');
        $this->load->model('Store_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['order_main'] = $this->Customer_model->customer_main();
            $data['ts']         = $this->Store_model->team_select();

            $this->load->view('options/header');
            $this->load->view('satisfied', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function not_satisfied()
    {
        if ($this->session->userdata('email_admin') != '') {
            $data['order_not']  = $this->Customer_model->customer_list_not();
            $data['ts']         = $this->Store_model->team_select();
            $this->load->view('options/header');
            $this->load->view('not_satisfied', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }


    public function orverall()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['order_all'] = $this->Customer_model->customer_all();
            $data['no_work']        = $this->Customer_model->customer_notwork_count();
            $data['not_submit']     = $this->Customer_model->customer_notsubmit_count();
            $this->load->view('options/header');
            $this->load->view('orverall', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function orvernotwork()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['order_notwork']  = $this->Customer_model->customer_notwork();
            $data['no_work']        = $this->Customer_model->customer_notwork_count();
            $data['not_submit']     = $this->Customer_model->customer_notsubmit_count();
            $this->load->view('options/header');
            $this->load->view('orverall_notwork', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function orvernotsubmit()
    {

        if ($this->session->userdata('email_admin') != '') {

            $data['order_notsum'] = $this->Customer_model->customer_notsubmit();
            $data['no_work']        = $this->Customer_model->customer_notwork_count();
            $data['not_submit']     = $this->Customer_model->customer_notsubmit_count();
            $this->load->view('options/header');
            $this->load->view('orverall_notsubmit', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }




    public function Bookmark()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['bookmark'] = $this->Store_model->bookmark_all();
            // $data['dm1'] = $this->Store_model->bookmark_dm1();
            $data['dm'] = $this->Store_model->bookmark_dm();

            $data['show_dm'] = $this->Store_model->bookmark_show_dm();
            $this->load->view('options/header');
            $this->load->view('bookmark', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }




    public function ready_refresh()
    {
        $data = $this->Store_model->bookmark_all();
        $result = [];
        $result['successfully'] = true;
        $result['list'] = $data;

        echo json_encode($result);
    }

    public function edit_date_required_All()
    {
        $order  = $this->input->post('order');
        $date   = $this->input->post('date');

        $this->db->where('order_id', $order);
        $data = $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'date_required' => $date]);
        echo $data;
    }


    public function upload_team()
    {
        $data = array(

            'order_id'                         => $this->input->post('order_id'),
            'position'                         => $this->input->post('position'),
            'wage'                             => $this->input->post('wage'),
            'note'                             => $this->input->post('note'),
            'create_at'                        => date('Y-m-d H:i:s')

        );

        $resultsedit = $this->db->insert('tbl_upload_team', $data);
        $this->db->where('order_id', $this->input->post('order_id'));
        $this->db->update('tbl_upload_order', ['notify_admin' => 1, 'date_required' => $this->input->post('Daterequired')]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
        }
        return redirect('Not_Satisfied');
    }

    public function upload_team_ST()
    {
        $data = array(

            'order_id'                         => $this->input->post('order_id'),
            'position'                         => $this->input->post('position'),
            'wage'                             => $this->input->post('wage'),
            'note'                             => $this->input->post('note'),
            'create_at'                        => date('Y-m-d H:i:s')

        );

        $resultsedit = $this->db->insert('tbl_upload_team', $data);
        $this->db->where('order_id', $this->input->post('order_id'));
        $this->db->update('tbl_upload_order', ['notify_admin' => 1, 'date_required' => $this->input->post('Daterequired')]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
        }
        return redirect('Satisfied');
    }

    public function edit_date_required_Satisfied()
    {
        $order_id = $this->input->post('order_id');
        $date_required = $this->input->post('date_required');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'date_required' => $date_required]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Date Required Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Date Required Satisfied information');
        }
        return redirect('Satisfied');
    }

    public function edit_wage_stockadmin()
    {
        $order_id = $this->input->post('order_id');
        $wage = $this->input->post('wage');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['wage' => $wage]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Wage Not Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Wage Not Satisfied information');
        }
        return redirect('my_stock_admin');
    }

    public function edit_info_Satisfied()
    {
        $order_id   = $this->input->post('order_id');
        $wage       = $this->input->post('wage');
        $teamid     = $this->input->post('teamid');
        $position   = $this->input->post('position');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['wage' => $wage, 'position' => $position, 'teamId' => $teamid]);
        if ($resultsedit) {
            $this->db->where('order_id', $order_id);
            $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1]);
        }

        $this->sendEmail_all($teamid,$order_id);

        return redirect('Satisfied');
    }

    public function edit_info_Not_Satisfied()
    {
        $order_id   = $this->input->post('order_id');
        $wage       = $this->input->post('wage');
        $teamid     = $this->input->post('teamid');
        $position   = $this->input->post('position');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['wage' => $wage, 'position' => $position, 'teamId' => $teamid]);

        if ($resultsedit) {
            $this->db->where('order_id', $order_id);
            $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1]);
        }

        $this->sendEmail_all($teamid,$order_id);

        return redirect('Not_Satisfied');
    }

    public function edit_info_stockadmin()
    {
        $order_id   = $this->input->post('order_id');
        $wage       = $this->input->post('wage');
        $teamid     = $this->input->post('teamid');
        $position   = $this->input->post('position');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['wage' => $wage, 'position' => $position, 'teamId' => $teamid]);

        if ($resultsedit) {
            $this->db->where('order_id', $order_id);
            $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1]);
        }

        $this->sendEmail_all($teamid,$order_id);
        
        return redirect('my_stock_admin');
    }

    public function edit_date_required_Not_Satisfied()
    {
        $order_id = $this->input->post('order_id');
        $date_required = $this->input->post('date_required');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'date_required' => $date_required]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Date Required Not Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Date Required Not Satisfied information');
        }
        return redirect('Not_Satisfied');
    }

    public function edit_wage_Not_Satisfied()
    {
        $order_id = $this->input->post('order_id');
        $wage = $this->input->post('wage');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['wage' => $wage]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Wage Not Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Wage Not Satisfied information');
        }
        return redirect('Not_Satisfied');
    }

    public function refresh_nw()
    {
        $no_work      = $this->Customer_model->customer_notwork_count();
        echo count($no_work);
    }

    public function refresh_ns()
    {
        $not_submit     = $this->Customer_model->customer_notsubmit_count();
        echo count($not_submit);
    }

    public function click_step()
    {
        $order_id = $this->input->post('order_id');

        $uploadOrder = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->result_array();
        foreach ($uploadOrder as $upload_order) {
            $click_step = $upload_order['click_step'] + 1;
            if ($click_step >= 4) {
                $click_step = 0;
            }
            $this->db->where('id', $upload_order['id']);
            $this->db->update('tbl_upload_order', ['click_step' => $click_step]);
        }

        $clickStep = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->row_array();

        echo $clickStep['click_step'];
    }


    private function sendEmail_all($teamid,$order_id)
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
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
    }
}
