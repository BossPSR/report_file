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
			$this->db->join('tbl_upload_order','tbl_feedback.order_id = tbl_upload_order.order_id','left');
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
			$this->db->join('tbl_feedback','tbl_feedback.order_id = tbl_upload_order.order_id');
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
			$this->db->join('tbl_cancel','tbl_cancel.order_id = tbl_upload_order.order_id');
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
			$this->db->where('tbl_upload_team.status','0');
			$this->db->join('tbl_upload_team','tbl_upload_team.order_id = tbl_upload_order.order_id','left');
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
			


			$data[] = "";
			$data['deliveryList'] = $deliveryList;
			$data['feedback_allList'] = $feedback_allList;
			$data['processingList'] = $processingList;
			$data['processing_feedbackList'] = $processing_feedbackList;
			$data['cancelList'] = $cancelList;
			$data['cancel_notWorkingList'] = $cancel_notWorkingList;


			$this->load->view('options/header');
			$this->load->view('index',$data);
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
}
