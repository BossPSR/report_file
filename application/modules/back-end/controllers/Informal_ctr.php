<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informal_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Approved_model');
    }

    public function add_team_informal()
    {
        if ($this->session->userdata('email_admin') != '') {

            $order_id   = $this->input->post('order_id');
            $name       = $this->input->post('name');
            $position   = $this->input->post('position');
            $Wage       = $this->input->post('Wage');
            $data = [
                'teamId'            => $name,
                'order_id'          => $order_id,
                'position'          => $position,
                'wage'              => $Wage,
                'create_at'         => date('Y-m-d H:i:s'),
                'status_informal'   => '1'
            ];
            $success = $this->db->insert('tbl_upload_team', $data);
            if ($success > 0) {
                $this->session->set_flashdata('save_ss2', 'Successfully Update Team Informal name !!.');
                return redirect('Satisfied');
            } else {
                $this->session->set_flashdata('del_ss2', 'Not Successfully Update Team Informal name');
                return redirect('Satisfied');
            }
        } else {
            $this->load->view('login');
        }
    }
}
