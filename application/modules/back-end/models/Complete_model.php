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
        $this->db->select('*,tbl_upload_order_team.order_id AS order_id_t,tbl_upload_order.date_required AS date_required_t,tbl_upload_order.userId AS user_m');
        $this->db->from('tbl_upload_order_team');
        $this->db->join('tbl_bookmark','tbl_upload_order_team.order_id=tbl_bookmark.id_orderBuy','left');
        $this->db->join('tbl_upload_order','tbl_upload_order_team.order_id=tbl_upload_order.order_id','left');
        $this->db->join('tbl_upload_main_search','tbl_bookmark.id_document=tbl_upload_main_search.id_doc','left');
        $this->db->join('tbl_upload_store','tbl_upload_main_search.upload_store_id=tbl_upload_store.store_id','left');
       
        $this->db->where('tbl_upload_order_team.status_admin',0);
        $this->db->group_by('tbl_upload_order_team.order_id');

        return $this->db->get()->result_array();

    }

   
    
    
    
    

}
