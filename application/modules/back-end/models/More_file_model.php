<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class More_file_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    

    public function more_file()
    {
        $this->db->select('*,tbl_morefile_GT.order_id AS orderGT,tbl_morefile_GT.id AS idM,
        tbl_morefile_GT.teamId AS TM , tbl_upload_team.status AS Tstatus');
        $this->db->from('tbl_morefile_GT');
        $this->db->join('tbl_upload_orderGT','tbl_morefile_GT.id = tbl_upload_orderGT.more_id');
        $this->db->join('tbl_upload_order','tbl_morefile_GT.order_id = tbl_upload_order.order_id');
        $this->db->join('tbl_upload_team','tbl_morefile_GT.order_id = tbl_upload_team.order_id');
        // $this->db->where('tbl_morefile_GT.status_see_more_file_team',0);
        $this->db->where('tbl_morefile_GT.status_more_file',1);
        $this->db->group_by('tbl_morefile_GT.id');

        return $this->db->get()->result_array();

    }

    // public function more_file_team()
    // {
    //     $this->db->select('*,tbl_upload_orderGT.order_id AS orderGT');
    //     $this->db->from('tbl_upload_orderGT');
    //     $this->db->join('tbl_upload_order','tbl_upload_orderGT.order_id=tbl_upload_order.order_id');
    //     $this->db->join('tbl_upload_team','tbl_upload_orderGT.order_id=tbl_upload_team.order_id');
    //     $this->db->where('tbl_upload_orderGT.status_more_file',1);
    //     $this->db->where('tbl_upload_orderGT.status_see_more_file_team',0);
    //     $this->db->group_by('tbl_upload_orderGT.order_id');

    //     return $this->db->get()->result_array();

    // }
   
    
    
    
    
    

}