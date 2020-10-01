<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_ctr extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		if ($this->session->userdata('email_admin') != '') {
			$lang = $this->session->userdata("lang") == null ? "english" : $this->session->userdata("lang");
			$this->lang->load($lang, $lang);
			$data = [];
			$this->db->group_by('order_id');
			$uploadOrder = $this->db->get('tbl_upload_order')->result_array();
			//Delivery
			$original_d = 0;
			$notComplete_d = 0;
			$rewrite_d = 0;
			$notSatified_d = 0;
			$deliveryList = [];

			//Processing New Oder 
			$original_new_order = 0;
			$notComplete_new_order = 0;
			$rewrite_new_order = 0;
			$notSatified_new_order = 0;
			$processingList = [];

			foreach ($uploadOrder as $order) {
				//Delivery
				if ($order['status_cp'] == "complete" && $order['status_delivery'] == 1) {
					$original_d += 1;
				}
				if ($order['status_cp'] == "notcomplete" && $order['status_delivery'] == 1) {
					$notComplete_d += 1;
				}
				if ($order['status_cp'] == "rewrite" && $order['status_delivery'] == 1) {
					$rewrite_d += 1;
				}
				if ($order['status_book'] == 2 && $order['status_delivery'] == 1) {
					$notSatified_d += 1;
				}

				//Processing New Oder 
				if ($order['status_cp'] == "complete" && $order['is_check'] == 0 && $order['status_approved'] == 0) {
					$original_new_order += 1;
				}
				if ($order['status_cp'] == "notcomplete" && $order['is_check'] == 0 && $order['status_approved'] == 0) {
					$notComplete_new_order += 1;
				}
				if ($order['status_cp'] == "rewrite" && $order['is_check'] == 0 && $order['status_approved'] == 0) {
					$rewrite_new_order += 1;
				}
				if ($order['status_book'] == 2 && $order['is_check'] == 0 && $order['status_approved'] == 0) {
					$notSatified_new_order += 1;
				}
			}

			//Delivery
			$deliveryList[0] = $original_d;
			$deliveryList[1] = $notComplete_d;
			$deliveryList[2] = $rewrite_d;
			$deliveryList[3] = $notSatified_d;
			$result_d = 0;
			$result_d = $original_d + $notComplete_d + $rewrite_d + $notSatified_d;
			$deliveryList[4] = $result_d;


			//Processing New Oder 
			$processingList[0] = $original_new_order;
			$processingList[1] = $notComplete_new_order;
			$processingList[2] = $rewrite_new_order;
			$processingList[3] = $notSatified_new_order;
			$result_new_order = 0;
			$result_new_order = $original_new_order + $notComplete_new_order + $rewrite_new_order + $notSatified_new_order;
			$processingList[4] = $result_new_order;

			//Feedback All

			$this->db->join('tbl_upload_order', 'tbl_feedback.order_id = tbl_upload_order.order_id', 'left');
			$this->db->group_by('tbl_upload_order.order_id');
			$up_feedbackall = $this->db->get('tbl_feedback')->result_array();

			$original_feedback_all = 0;
			$notComplete_feedback_all = 0;
			$rewrite_feedback_all = 0;
			$notSatified_feedback_all = 0;
			$feedback_allList = [];

			foreach ($up_feedbackall as $feedback_all) {
				if ($feedback_all['status_cp'] == "complete" && $feedback_all['status_delivery'] == 1) {
					$original_feedback_all += 1;
				}
				if ($feedback_all['status_cp'] == "notcomplete" && $feedback_all['status_delivery'] == 1) {
					$notComplete_feedback_all += 1;
				}
				if ($feedback_all['status_cp'] == "rewrite" && $feedback_all['status_delivery'] == 1) {
					$rewrite_feedback_all += 1;
				}
				if ($feedback_all['status_book'] == 2 && $feedback_all['status_delivery'] == 1) {
					$notSatified_feedback_all += 1;
				}
			}

			$feedback_allList[0] = $original_feedback_all;
			$feedback_allList[1] = $notComplete_feedback_all;
			$feedback_allList[2] = $rewrite_feedback_all;
			$feedback_allList[3] = $notSatified_feedback_all;
			$result_feedback_all = 0;
			$result_feedback_all = $original_feedback_all + $notComplete_feedback_all + $rewrite_feedback_all + $notSatified_feedback_all;
			$feedback_allList[4] = $result_feedback_all;



			// Processing Feedback
			$this->db->join('tbl_feedback', 'tbl_feedback.order_id = tbl_upload_order.order_id');
			$this->db->group_by('tbl_upload_order.order_id');
			$up_feedback = $this->db->get('tbl_upload_order')->result_array();

			$original_processing_all = 0;
			$notComplete_processing_all = 0;
			$rewrite_processing_all = 0;
			$notSatified_processing_all = 0;
			$processing_feedbackList = [];

			foreach ($up_feedback as $feedback) {
				if ($feedback['status_cp'] == "complete" && $feedback['status_delivery'] == 1) {
					$original_processing_all += 1;
				}
				if ($feedback['status_cp'] == "notcomplete" && $feedback['status_delivery'] == 1) {
					$notComplete_processing_all += 1;
				}
				if ($feedback['status_cp'] == "rewrite" && $feedback['status_delivery'] == 1) {
					$rewrite_processing_all += 1;
				}
				if ($feedback['status_book'] == 2 && $feedback['status_delivery'] == 1) {
					$notSatified_processing_all += 1;
				}
			}

			$processing_feedbackList[0] = $original_processing_all;
			$processing_feedbackList[1] = $notComplete_processing_all;
			$processing_feedbackList[2] = $rewrite_processing_all;
			$processing_feedbackList[3] = $notSatified_processing_all;
			$result_processing_all = 0;
			$result_processing_all = $original_processing_all + $notComplete_processing_all + $rewrite_processing_all + $notSatified_processing_all;
			$processing_feedbackList[4] = $result_processing_all;

			// กด Cancel 
			$this->db->join('tbl_cancel', 'tbl_cancel.order_id = tbl_upload_order.order_id');
			$this->db->group_by('tbl_upload_order.order_id');
			$up_cancel = $this->db->get('tbl_upload_order')->result_array();

			$original_cancel = 0;
			$notComplete_cancel = 0;
			$rewrite_cancel = 0;
			$notSatified_cancel = 0;
			$cancelList = [];

			foreach ($up_cancel as $cancel) {
				if ($cancel['status_cp'] == "complete" && $cancel['status_delivery'] == 1) {
					$original_cancel += 1;
				}
				if ($cancel['status_cp'] == "notcomplete" && $cancel['status_delivery'] == 1) {
					$notComplete_cancel += 1;
				}
				if ($cancel['status_cp'] == "rewrite" && $cancel['status_delivery'] == 1) {
					$rewrite_cancel += 1;
				}
				if ($cancel['status_book'] == 2 && $cancel['status_delivery'] == 1) {
					$notSatified_cancel += 1;
				}
			}

			$cancelList[0] = $original_cancel;
			$cancelList[1] = $notComplete_cancel;
			$cancelList[2] = $rewrite_cancel;
			$cancelList[3] = $notSatified_cancel;
			$result_cancel = 0;
			$result_cancel = $original_cancel + $notComplete_cancel + $rewrite_cancel + $notSatified_cancel;
			$cancelList[4] = $result_cancel;

			// ไม่กด Cancel ไม่ส่ง

			$this->db->where('tbl_upload_team.teamId !=', '');
			$this->db->where('tbl_upload_team.status', '0');
			$this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id', 'left');
			$this->db->group_by('tbl_upload_order.order_id');
			$up_team = $this->db->get('tbl_upload_order')->result_array();

			$original_cancel_notWorking = 0;
			$notComplete_cancel_notWorking = 0;
			$rewrite_cancel_notWorking = 0;
			$notSatified_cancel_notWorking = 0;
			$cancel_notWorkingList = [];

			foreach ($up_team as $team) {
				if ($team['status_cp'] == "complete" && $team['status_delivery'] == 1) {
					$original_cancel_notWorking += 1;
				}
				if ($team['status_cp'] == "notcomplete" && $team['status_delivery'] == 1) {
					$notComplete_cancel_notWorking += 1;
				}
				if ($team['status_cp'] == "rewrite" && $team['status_delivery'] == 1) {
					$rewrite_cancel_notWorking += 1;
				}
				if ($team['status_book'] == 2 && $team['status_delivery'] == 1) {
					$notSatified_cancel_notWorking += 1;
				}
			}

			$cancel_notWorkingList[0] = $original_cancel_notWorking;
			$cancel_notWorkingList[1] = $notComplete_cancel_notWorking;
			$cancel_notWorkingList[2] = $rewrite_cancel_notWorking;
			$cancel_notWorkingList[3] = $notSatified_cancel_notWorking;
			$result_cancel_notWorking = 0;
			$result_cancel_notWorking = $original_cancel_notWorking + $notComplete_cancel_notWorking + $rewrite_cancel_notWorking + $notSatified_cancel_notWorking;
			$cancel_notWorkingList[4] = $result_cancel_notWorking;

			//total DM
			$upload_main_search_sub = $this->db->get('tbl_upload_main_search_sub')->result_array();
			$sell_completeTotal_dm = 0;
			$sell_notCompleteTotal_dm = 0;
			$originalTotal_dm = 0;
			$rewriteTotal_dm = 0;
			$total_dmList = [];

			foreach ($upload_main_search_sub as $upload_mainSearchSub) {
				if ($upload_mainSearchSub['comandnocom'] == 1) {
					$sell_completeTotal_dm += 1;
				}
				if ($upload_mainSearchSub['comandnocom'] == 2) {
					$sell_notCompleteTotal_dm += 1;
				}
				if ($upload_mainSearchSub['comandnocom'] == 3) {
					$originalTotal_dm += 1;
				}
				if ($upload_mainSearchSub['comandnocom'] == 4) {
					$rewriteTotal_dm += 1;
				}
			}

			$total_dmList[0] = $sell_completeTotal_dm;
			$total_dmList[1] = $sell_notCompleteTotal_dm;
			$total_dmList[2] = $originalTotal_dm;
			$total_dmList[3] = $rewriteTotal_dm;
			$result_total_dm = 0;
			$result_total_dm = $sell_completeTotal_dm + $sell_notCompleteTotal_dm + $originalTotal_dm + $rewriteTotal_dm;
			$total_dmList[4] = $result_total_dm;

			//approved
			$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
			$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
			$this->db->where('tbl_upload_order.status_approved', '1');
			$this->db->group_by('tbl_upload_order.order_id');
			$up_app = $this->db->get('tbl_upload_order')->result_array();

			$sell_completeApproved = 0;
			$sell_notCompleteApproved = 0;
			$originalApproved = 0;
			$rewriteApproved = 0;
			$approvedList = [];

			foreach ($up_app as $app) {
				if ($app['comandnocom'] == 1) {
					$sell_completeApproved += 1;
				}
				if ($app['comandnocom'] == 2) {
					$sell_notCompleteApproved += 1;
				}
				if ($app['comandnocom'] == 3) {
					$originalApproved += 1;
				}
				if ($app['comandnocom'] == 4) {
					$rewriteApproved += 1;
				}
			}

			$approvedList[0] = $sell_completeApproved;
			$approvedList[1] = $sell_notCompleteApproved;
			$approvedList[2] = $originalApproved;
			$approvedList[3] = $rewriteApproved;
			$resultApproved = 0;
			$resultApproved = $sell_completeApproved + $sell_notCompleteApproved + $originalApproved + $rewriteApproved;
			$approvedList[4] = $resultApproved;


			//not approved
			$this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
			$this->db->join('tbl_upload_main_search_sub', 'tbl_bookmark.id_document = tbl_upload_main_search_sub.dm_sub', 'left');
			$this->db->where('tbl_upload_order.status_approved', '2');
			$this->db->group_by('tbl_upload_order.order_id');
			$up_appnot = $this->db->get('tbl_upload_order')->result_array();

			$sell_completeNotApproved = 0;
			$sell_notCompleteNotApproved = 0;
			$originalNotApproved = 0;
			$rewriteNotApproved = 0;
			$not_approvedList = [];

			foreach ($up_appnot as $appnot) {
				if ($appnot['comandnocom'] == 1) {
					$sell_completeNotApproved += 1;
				}
				if ($appnot['comandnocom'] == 2) {
					$sell_notCompleteNotApproved += 1;
				}
				if ($appnot['comandnocom'] == 3) {
					$originalNotApproved += 1;
				}
				if ($appnot['comandnocom'] == 4) {
					$rewriteNotApproved += 1;
				}
			}

			$not_approvedList[0] = $sell_completeNotApproved;
			$not_approvedList[1] = $sell_notCompleteNotApproved;
			$not_approvedList[2] = $originalNotApproved;
			$not_approvedList[3] = $rewriteNotApproved;
			$resultNotApproved = 0;
			$resultNotApproved = $sell_completeNotApproved + $sell_notCompleteNotApproved + $originalNotApproved + $rewriteNotApproved;
			$not_approvedList[4] = $resultNotApproved;

			//result
			$data[] = "";
			$data['deliveryList'] = $deliveryList;
			$data['feedback_allList'] = $feedback_allList;
			$data['processingList'] = $processingList;
			$data['processing_feedbackList'] = $processing_feedbackList;
			$data['cancelList'] = $cancelList;
			$data['cancel_notWorkingList'] = $cancel_notWorkingList;

			$data['total_dmList'] = $total_dmList;
			$data['approvedList'] = $approvedList;
			$data['not_approvedList'] = $not_approvedList;

			/////////////////////////////////////////////////////
			//ตำแหน่งงานทั้งหมด
			$this->db->join('tbl_upload_team', 'tbl_item_position.id = tbl_upload_team.position', 'left');
			$this->db->group_by('tbl_item_position.id');
			$item_postion = $this->db->get('tbl_item_position')->result_array();

			//ตำแหน่งงานที่รับงาน
			$this->db->join('tbl_upload_team', 'tbl_item_position.id = tbl_upload_team.position', 'left');
			$this->db->where('tbl_upload_team.teamId !=','');
			$this->db->where('tbl_upload_team.status !=','5');
			$this->db->group_by('tbl_item_position.id');
			$item_confilm = $this->db->get('tbl_item_position')->result_array();
			// print_r($item_confilm);

			//ตำแหน่งงานทีมงานที่ว่างงานอยู่
			$this->db->join('tbl_upload_team', 'tbl_item_position.id = tbl_upload_team.position', 'left');
			$this->db->where('tbl_upload_team.teamId','');
			$this->db->group_by('tbl_item_position.id');
			$item_confilm = $this->db->get('tbl_item_position')->result_array();


			$this->load->view('options/header');
			$this->load->view('index', $data);
			$this->load->view('options/footer');
		} else {
			$this->load->view('login');
		}
	}
	public function realtime_data()
	{
		if ($this->session->userdata('email_admin') != '') {
			$data = $this->Home_model->order_list();

			echo json_encode($data);
		} else {
			$this->load->view('login');
		}
	}

	public function realtime_data1()
	{
		if ($this->session->userdata('email_admin') != '') {
			$data1 = $this->Home_model->order_list1();

			echo json_encode($data1);
		} else {
			$this->load->view('login');
		}
	}

	public function realtime_data2()
	{
		if ($this->session->userdata('email_admin') != '') {
			$data2 = $this->Home_model->order_list2();

			echo json_encode($data2);
		} else {
			$this->load->view('login');
		}
	}
	public function realtime_data3()
	{
		if ($this->session->userdata('email_admin') != '') {
			$data3 = $this->Home_model->order_list3();

			echo json_encode($data3);
		} else {
			$this->load->view('login');
		}
	}


	public function change()
	{
		$type	= $this->input->get('type');
		$uri     = $this->input->get('uri');
		$this->session->set_userdata('lang', $type);
		redirect($uri);
	}

	public function check_first_12()
	{
		$order 				= $this->input->get('order');
		$status 			= $this->input->get('status');
		$upload_order00  	= $this->db->get_where('tbl_upload_order', ['order_id' => $order])->result_array();
		$upload_order  		= $this->db->get_where('tbl_upload_order', ['order_id' => $order])->row_array();

		$this->db->where('order_id', $order);
		$orderdb02  = $this->db->update('tbl_upload_order', ['created_at_buy' => date("Y-m-d H:i:s"), 'check_time_not_pay' => $status]);

		$user = $this->db->get_where('tbl_user', ['idUser' => $upload_order['userId']])->row_array();

		if ($user['score'] >= '100') {
			$discount = 10;
		} else {
			$discount = 0;
		}

		$priceDis = $upload_order['price_file'] - (($upload_order['price_file'] * $discount) / 100);

		$uploads = [];
		$numFile = 0;
		foreach ($upload_order00 as $uploadOrder) {
			$uploads[] = $uploadOrder['file_name'];
			$numFile += 1;
		}

		$subject = 'System notification Please pay for the pending order. ';

		$message  = '<center>';
		$message .= '<div style="max-width:800px;">';
		$message .= '<div class="content" >';
		$message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
		$message .= 'Your order has been placed';
		$message .= '</div>';
		$message .= '<div class="row">';
		$message .= '<p>Hey "' . $user['username'] . '",</p>';
		$message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $upload_order['order_id'] . '"</span></p>';
		$message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
		$message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
		$message .= '<p>Check below for your order details.</p><hr>';


		$message .= '<table style="font-size: 14px;border="0">';

		// $message .= '<tr>';
		// $message .= '<td rowspan="' . $numFile . '">';
		// $message .= ' File Name : ';
		// $message .= '</td>';
		// $message .= '<td>';
		// $message .= ' 1.' . $uploads[0] . ' ';
		// $message .= '</td>';
		// $message .= '</tr>';

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
		$message .= ' ' . $upload_order['order_id'] . ' ';
		$message .= '</td>';
		$message .= '</tr>';

		$message .= '<tr>';
		$message .= '<td>';
		$message .= ' Date required : ';
		$message .= '</td>';
		$message .= '<td>';
		$message .= ' ' . $upload_order['date_required'] . ' ';
		$message .= '</td>';
		$message .= '</tr>';

		$message .= '<tr>';
		$message .= '<td>';
		$message .= ' Price :';
		$message .= '</td>';
		$message .= '<td>';
		$message .= ' $' . $upload_order['price_file'] . ' ';
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
		$message .= ' ' . $upload_order['userId'] . ' ';
		$message .= '</td>';
		$message .= '</tr>';

		$message .= '<tr>';
		$message .= '<td>';
		$message .= ' Warranty  : ';
		$message .= '</td>';
		$message .= '<td>';
		$message .= ' ' . $upload_order['end_time'] . ' ';
		$message .= '</td>';
		$message .= '</tr>';

		$message .= '</table>';



		$message .= '<div>';
		$message .= '<div style="text-align: center; margin:15px auto; font-size:25px;    padding-bottom: 22px;">';
		$message .= '<a class="btn btn-info" style=" margin-right: 10px ; text-decoration: none;padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #ffffff;background-color: #05786d;border: 1px solid #05786d;" href="https://www.ip-soft.co.th/ipsoft/payment_email?order_id=' . $upload_order['order_id'] . '">';
		$message .= 'Pay $' . $priceDis . ' To Start';
		$message .= '</a>';
		$message .= '<a class="btn btn-info" style="     text-decoration: none;   padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #000000;background-color: #ffda00;border: 1px solid #ffc03f;" href="https://www.ip-soft.co.th/ipsoft/my-deposit">';
		$message .= ' เติมเงิน ';
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
		$config['smtp_pass'] = 'infinityP23';  //sender's password
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = 'TRUE';
		$config['smtp_crypto'] = 'tls';
		$config['newline'] = "\r\n";


		//$file_path = 'uploads/' . $file_name;
		// $this->load->library('email', $config);
		// $this->email->set_newline("\r\n");
		// $this->email->from('infinityp.soft@gmail.com');
		// $this->email->to($user['email']);
		// $this->email->subject($subject);
		// $this->email->message($message);
		// $this->email->set_mailtype('html');

		// if ($this->email->send() == true) {
		//     $this->session->set_flashdata('save_ss2', 'Successfully Update email ST information !!.');
		// } else {
		//     $this->session->set_flashdata('del_ss2', 'Not Successfully Update email ST information');
		// }
	}

	// check_first_24

	public function check_first_24()
	{
		$order 		= $this->input->post('order');
		$status 	= $this->input->post('status');
		$upload_order  	= $this->db->get_where('tbl_upload_order', ['order_id' => $order])->result_array();

		$this->db->where('order_id', $order);
		$orderdb02  = $this->db->update('tbl_upload_order', ['created_at_buy' => date("Y-m-d H:i:s"), 'check_time_not_pay' => $status]);

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

		$subject = 'System notification Please pay for the pending order. ';

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

		$message .= '<tr>';
		$message .= '<td>';
		$message .= ' Warranty  : ';
		$message .= '</td>';
		$message .= '<td>';
		$message .= ' ' . $upload_order[0]['end_time'] . ' ';
		$message .= '</td>';
		$message .= '</tr>';

		$message .= '</table>';



		$message .= '<div>';
		$message .= '<div style="text-align: center; margin:15px auto; font-size:25px;    padding-bottom: 22px;">';
		$message .= '<a class="btn btn-info" style=" margin-right: 10px ; text-decoration: none;padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #ffffff;background-color: #05786d;border: 1px solid #05786d;" href="https://www.ip-soft.co.th/ipsoft/payment_email?order_id=' . $upload_order[0]['order_id'] . '">';
		$message .= 'Pay $' . $priceDis . ' To Start';
		$message .= '</a>';
		$message .= '<a class="btn btn-info" style="     text-decoration: none;   padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #000000;background-color: #ffda00;border: 1px solid #ffc03f;" href="https://www.ip-soft.co.th/ipsoft/my-deposit">';
		$message .= ' เติมเงิน ';
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
		$config['smtp_pass'] = 'infinityP23';  //sender's password
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = 'TRUE';
		$config['smtp_crypto'] = 'tls';
		$config['newline'] = "\r\n";


		//$file_path = 'uploads/' . $file_name;
		// $this->load->library('email', $config);
		// $this->email->set_newline("\r\n");
		// $this->email->from('infinityp.soft@gmail.com');
		// $this->email->to($user['email']);
		// $this->email->subject($subject);
		// $this->email->message($message);
		// $this->email->set_mailtype('html');

		// if ($this->email->send() == true) {
		//     $this->session->set_flashdata('save_ss2', 'Successfully Update email ST information !!.');
		// } else {
		//     $this->session->set_flashdata('del_ss2', 'Not Successfully Update email ST information');
		// }
	}
}
