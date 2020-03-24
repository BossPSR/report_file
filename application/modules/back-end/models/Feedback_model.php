<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Feedback_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    

    public function feedback()
    {
        $this->db->select('*,tbl_feedback.order_id AS order_feed,tbl_feedback.create_at AS time,tbl_feedback.id AS id_f');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team','tbl_feedback.order_id=tbl_upload_team.order_id','left');
        $this->db->join('tbl_feedback_file','tbl_feedback.id=tbl_feedback_file.id','left');
        $this->db->group_by('tbl_feedback_file.id_feedback');
        
        return $this->db->get()->result_array();

    }

    
    public function feedback_team()
    {
        $this->db->select('*,tbl_feedback.id AS id_num,tbl_feedback.create_at AS time,tbl_feedback.id AS id_f');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team','tbl_feedback.order_id=tbl_upload_team.order_id');
        $this->db->join('tbl_feedback_file','tbl_feedback.id=tbl_feedback_file.id','left');
        $this->db->group_by('tbl_feedback_file.id_feedback');

      
        return $this->db->get()->result_array();

    }

    
    
    
    
    

}
