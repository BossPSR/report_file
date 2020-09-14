<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_ctr extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        

    }


    public function success()
    {
        $data = [];
        $data['user_id'] = $this->input->post('user_id');
        $data['package'] = $this->input->post('package');
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['create_time'] = $this->input->post('create_time');
        $data['amount'] = $this->input->post('amount');
        $data['currency_code'] = $this->input->post('currency_code');
        $data['orderID'] = $this->input->post('orderID');
        $data['payerID'] = $this->input->post('payerID');
        $pac_su = $this->db->get_where('tbl_package', ['id' => $data['package']])->row_array();
		$dateend = date("Y-m-d" , strtotime("+ ".$pac_su['month_pk']." month"));
		$commission = $this->input->post('commission');
		if ($commission == "") {
			$commission = null;
		}
		
		if ($commission != "" || $commission !== null) {
			$checkCommission = $this->db->get_where('tbl_commission',['commission_inviter'=> $commission , 'commission_recipient' => $data['user_id']])->row_array();
			if (empty($checkCommission)) {
				$dataCommission = [];
				$dataCommission['commission_inviter'] = $commission;
				$dataCommission['commission_recipient'] = $data['user_id'];
				$dataCommission['id_package_com'] = $data['package'];
				$dataCommission['update_at'] = date("Y-m-d H:i:s");
				$dataCommission['commission_price'] = $pac_su['price_pk'];
				$dataCommission['commission_detail'] = "เชิญเข้ามา join กัน";
				$dataCommission['commission_sale'] = $pac_su['new_price'];
				$dataCommission['create_at'] = date("Y-m-d H:i:s");
				$this->db->insert('tbl_commission', $dataCommission);

				$userCommission = $this->db->get_where('tbl_user' ,['idUser' => $commission])->row_array();
				$userCom = $userCommission['commission'] + $pac_su['commission_price'];
				$this->db->where('idUser' , $commission);
				$this->db->update('tbl_user' , ['commission' => $userCom] );
			}
			
		}
		
		
        $insert = [
            'orderID' => $data['orderID'],
            'payerID' => $data['payerID'],
            'package_pay' => $data['package'],
            'amount' => $data['amount'],
            'currency_code' => $data['currency_code'],
            'user_id' => $data['user_id'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'create_time' => date("Y-m-d H:i:s"),
            'start_time' => date("Y-m-d H:i:s"),
            'status_drop' => 0
        ];

        $success = $this->db->insert('tbl_paypal', $insert);

        $this->db->where('idUser' , $data['user_id']);
        $this->db->update('tbl_user' , ['package_user' => $data['package'] , 'package_end' => $dateend ] );

        $this->sendEmail($data['user_id']);

        echo json_encode($data);  
    }

    private function sendEmail($userid)
    {
        $user = $this->db->get_where('tbl_user', ['idUser' => $userid])->row_array();
        $pac = $this->db->get_where('tbl_package', ['id' => $user['package_user']])->row_array();

        if ($user['score'] >= '100') {
            $discount = 10;
        } else {
            $discount = 0;
        }

       

        $subject  = 'เอกสารการชำระเงิน จาก www.report-file.com ';
        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'การชำระเงิน Package ของคุณสำเร็จแล้ว';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $user['username'] . '",</p>';
        
        $message .= '<table style="font-size: 14px;border="0">';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' User Id  : ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' ' . $user['idUser'] . ' ';
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' Detail Package : ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' ' . $pac['month_pk'] . ' ' .$pac['time_pk'] . ' ' ;
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' Price Package  : ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' ' . $pac['price_pk'] . ' '  ;
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '<tr>';
        $message .= '<td>';
        $message .= ' End Package  : ';
        $message .= '</td>';
        $message .= '<td>';
        $message .= ' ' . $user['package_end'] . ' '  ;
        $message .= '</td>';
        $message .= '</tr>';

        $message .= '</table>';


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

    public function FreePackage_success()
    {
        $user_id = $this->input->post('user_id');
        $currency_code = "USD";
        $amount = 0;

        $insert = [
            
            'amount' => $amount,
            'currency_code' => $currency_code,
            'user_id' => $user_id,
            'create_time' => date("Y-m-d H:i:s"),
            'start_time' => date("Y-m-d H:i:s")
        ];

        $success = $this->db->insert('tbl_paypal', $insert);
        redirect('my-profile');
    }
}
