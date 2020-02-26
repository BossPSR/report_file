<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class My_stock_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    

    public function stock()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_team');
        $this->db->join('tbl_upload_order','tbl_upload_order.order_id = tbl_upload_team.order_id ');
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.order_id','DESC');

        return $this->db->get()->result_array();

    }

    
    
    
    

}
