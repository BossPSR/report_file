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

    public function feedback($as)
    {
        $this->db->select('*,tbl_feedback.id as id_feed,tbl_feedback.order_id as orIdd');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_feedback.order_id');
        $this->db->join('tbl_item_position', 'tbl_item_position.id = tbl_upload_team.position');
        $this->db->where('tbl_feedback.teamId', $as);
        $this->db->where('tbl_feedback.status_c_feedack_team', 1);
        
        $this->db->order_by('tbl_upload_team.date_required');
        $data = $this->db->get();
        return $data->result_array();
    }

    public function feedback_c_read($as)
    {
        $this->db->select('*');
        $this->db->from('tbl_feedback');
        $this->db->where('status_feedback_read', 0);
        $this->db->where('teamId', $as);

        $data = $this->db->get();
        return $data->row_array();
    }
}
