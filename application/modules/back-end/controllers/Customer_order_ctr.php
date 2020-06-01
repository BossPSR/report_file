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

            $data['order_notwork'] = $this->Customer_model->customer_notwork();
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
            'date_required'                    => $this->input->post('Daterequired'),
            'create_at'                        => date('Y-m-d H:i:s')

        );

        $resultsedit = $this->db->insert('tbl_upload_team', $data);
        $this->db->where('order_id', $this->input->post('order_id'));
        $this->db->update('tbl_upload_order', ['notify_admin' => 1]);

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
            'date_required'                    => $this->input->post('Daterequired'),
            'create_at'                        => date('Y-m-d H:i:s')

        );

        $resultsedit = $this->db->insert('tbl_upload_team', $data);
        $this->db->where('order_id', $this->input->post('order_id'));
        $this->db->update('tbl_upload_order', ['notify_admin' => 1]);

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
            $this->db->update('tbl_upload_order', [ 'status_confirmed_team' => 1]);
        }

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Satisfied information');
        }
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
            $this->db->update('tbl_upload_order', [ 'status_confirmed_team' => 1]);
        }

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Not Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Not Satisfied information');
        }
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
            $this->db->update('tbl_upload_order', [ 'status_confirmed_team' => 1]);
        }

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit My StockAdmin information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit My StockAdmin information');
        }
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
        $no_work = $this->db->get_where('tbl_upload_team', ['teamId' => null])->result_array();
        echo count($no_work);
    }

	public function refresh_ns()
	{
		$not_submit = $this->db->get_where('tbl_feedback', ['check_feedback_dalivery' => 0])->result_array();
		echo count($not_submit);
	}
   	
	public function click_step()
	{
		$order_id = $this->input->post('order_id');
		
		$uploadOrder = $this->db->get_where('tbl_upload_order',['order_id' => $order_id])->result_array();
		foreach ($uploadOrder as $upload_order) {
			$click_step = $upload_order['click_step'] + 1;
			if ($click_step >= 4) {
				$click_step = 0;
			}
			$this->db->where('id',$upload_order['id']);
			$this->db->update('tbl_upload_order',['click_step' => $click_step]);
			
		}

		$clickStep = $this->db->get_where('tbl_upload_order',['order_id' => $order_id])->row_array();

		echo $clickStep['click_step'];

		
	}
}
