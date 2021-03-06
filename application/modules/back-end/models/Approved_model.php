<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Approved_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    

    public function Approved()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team','tbl_upload_team.order_id = tbl_upload_order.order_id','left');
        $this->db->where('status_approved',1);
        $this->db->group_by('tbl_upload_order.order_id');

        return $this->db->get()->result_array();

    }

    public function not_Approved()
    {
        $this->db->select('*,tbl_upload_order.file_name AS fa
        ,tbl_upload_order.order_id AS or');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_order_team','tbl_upload_order.order_id=tbl_upload_order_team.order_id','left');
        $this->db->where('status_approved',2);
        $this->db->group_by('tbl_upload_order.order_id');

        return $this->db->get()->result_array();

    }
   
    
    
    
    

}
