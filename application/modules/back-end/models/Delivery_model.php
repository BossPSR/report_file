<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Delivery_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    

    public function delivery()
    {
        $this->db->select('*,tbl_upload_order.order_id AS order_name,tbl_upload_order.userId AS user');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_bookmark','tbl_upload_order.order_id=tbl_bookmark.id_orderBuy','left');
        $this->db->join('tbl_upload_main_search','tbl_bookmark.id_document=tbl_upload_main_search.id_doc','left');
        $this->db->join('tbl_upload_team','tbl_upload_order.order_id=tbl_upload_team.order_id','left');
        $this->db->join('tbl_upload_order_team','tbl_upload_order.order_id=tbl_upload_order_team.order_id','left');
        $this->db->where('.tbl_upload_order.status_delivery',1);
        $this->db->group_by('tbl_upload_order.order_id');

        return $this->db->get()->result_array();

    }

  
   
    
    
    
    

}
