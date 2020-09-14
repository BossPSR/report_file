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
			$data['stock'] 	= $this->My_stock_model->stock_Admin();
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
			$ordername = $this->db->get_where('tbl_upload_order',['order_id' => $orderST])->row_array();

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
                        'create_at'         => date('Y-m-d H:i:s'),
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

		$userId     	=  $id_admin['adminId'];
		$date_req   	=  $this->input->post('date_required');
		$name       	=  $this->input->post('name');
		$email      	=  $this->input->post('email');
		$status_cp_save =  $this->input->post('status_cp_save');
		$price_save 	=  $this->input->post('price_save');
		$org_save   	=  $this->input->post('org_save');
		$note1_save 	=  $this->input->post('note1_save');
		$DMCheck    	=  $this->input->post('DMCheck');
		
		if (!empty($DMCheck)) {
			$num = 1;
		} else {
			$num = 2;
		}

		if ($status_cp_save == 'complete') {
			$cp = 1;
		}else{
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

					'userId'        	=> $userId,
					'order_id'      	=> $buymax->order_main,
					'date_required' 	=> $date_req,
					'Username'      	=> $name,
					'email'      		=> $email,
					'status_admin'  	=> 1,
					'status_book'   	=> $num,
					'status_bookmark'   => $cp,
					'status_pay'    	=> 1,
					'price_file'    	=> $price_save,
					'note_user'    		=> $note1_save,
					'organization'  	=> $org_save,
					'status_cp'  		=> $status_cp_save,
					'file_name'     	=> $uploadData['file_name'],
					'path'          	=> 'uploads/Buy/' . $uploadData['file_name'],
					'create_at'     	=> date('Y-m-d H:i:s'),
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
					'email'      	=> $email,
					'status_admin'  =>  1,
					'status_book'   =>  2,
					'status_pay'    =>  1,
					'file_name'     => $uploadData['file_name'],
					'path'          => 'uploads/Buy/' . $uploadData['file_name'],
					'create_at'     => date('Y-m-d H:i:s'),
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
}
