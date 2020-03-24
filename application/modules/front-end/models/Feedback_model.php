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
        $this->db->select('*,tbl_feedback.id as id_feed');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_feedback.order_id');
        $this->db->join('tbl_item_position', 'tbl_item_position.id = tbl_upload_team.position');
        $this->db->where('tbl_upload_team.teamId', $as);
        // $this->db->group_by('tbl_feedback.order_id');
        $this->db->order_by('tbl_upload_team.date_required');
        $data = $this->db->get();
        return $data->result_array();
    }
}
