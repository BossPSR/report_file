<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Slip_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function my_slip_success($_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_order');
        $this->db->where('userId', $_user);
        $this->db->where('status_pay', 1);
        $this->db->group_by('order_id');
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    function my_slip_not_success($_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_order');
        $this->db->where('userId', $_user);
        $this->db->where('status_pay', 0);
        $this->db->group_by('order_id');
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    function my_slip_team($_team)
    {
        $this->db->select('*, tbl_withdraw_team.status AS st2');
        $this->db->from('tbl_withdraw_team');
        $this->db->join('tbl_team', 'tbl_withdraw_team.teamId = tbl_team.IdTeam');
        $this->db->where('tbl_withdraw_team.teamId', $_team);
        $this->db->order_by('tbl_withdraw_team.create_at', 'desc');
        $data = $this->db->get();
        return $data->result_array();
    }
}
