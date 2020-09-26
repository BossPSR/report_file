<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Feedback_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function feedback()
    {
        $this->db->select('*,tbl_feedback.order_id AS order_feed,tbl_feedback.create_at AS time,tbl_feedback.id AS id_f,tbl_upload_team.teamId AS team');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team', 'tbl_feedback.order_id=tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_upload_order', 'tbl_feedback.order_id=tbl_upload_order.order_id', 'left');
        $this->db->join('tbl_feedback_file', 'tbl_feedback.id=tbl_feedback_file.id', 'left');
        $this->db->where('tbl_feedback.check_feedback_dalivery', 0);
        $this->db->where('tbl_feedback.status_c_feedack_team', 1);
        $this->db->where_not_in('tbl_upload_order.status_approved', ['1', '2']);
        $this->db->group_by('tbl_feedback_file.id_feedback');
        $this->db->order_by('tbl_feedback.order_id', 'DESC');
        $this->db->order_by('tbl_feedback.create_at', 'DESC');

        return $this->db->get()->result_array();
    }


    public function feedback_team()
    {
        $this->db->select('*,tbl_feedback.create_at AS time
        ,tbl_feedback.id AS id_f ,tbl_upload_team.teamId AS team,tbl_upload_order.date_required as date_re
        ,tbl_upload_team.status statusall,tbl_upload_team.note as note_team');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team', 'tbl_feedback.order_id=tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_upload_order', 'tbl_feedback.order_id=tbl_upload_order.order_id', 'left');
        $this->db->join('tbl_feedback_file', 'tbl_feedback.id=tbl_feedback_file.id', 'left');
        $this->db->where_not_in('tbl_upload_order.status_approved', ['1', '2']);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->group_by('tbl_feedback.id');

        return $this->db->get()->result_array();
    }
}
