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
        $this->db->select('*,tbl_feedback.order_id AS order_feed,tbl_feedback.create_at AS time');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team','tbl_feedback.order_id=tbl_upload_team.order_id','left');
        
        return $this->db->get()->result_array();

    }

    
    public function feedback_team()
    {
        $this->db->select('*');
        $this->db->from('tbl_feedback');
        $this->db->join('tbl_upload_team','tbl_feedback.order_id=tbl_upload_team.order_id');

      
        return $this->db->get()->result_array();

    }

    
    
    
    
    

}
