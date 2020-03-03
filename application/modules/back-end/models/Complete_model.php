<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Complete_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    

    public function complete()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_order_team');
        $this->db->join('tbl_upload_order','tbl_upload_order_team.order_id=tbl_upload_order.order_id');
        $this->db->where('tbl_upload_order_team.status_admin',0);
        $this->db->group_by('tbl_upload_order_team.order_id');

        return $this->db->get()->result_array();

    }

   
    
    
    
    

}
