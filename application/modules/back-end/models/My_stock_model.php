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
        $this->db->join('tbl_bookmark', 'tbl_upload_order.order_id=tbl_bookmark.id_orderBuy', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_bookmark.id_document=tbl_upload_main_search.id_doc', 'left');
        $this->db->join('tbl_upload_store', 'tbl_upload_main_search.upload_store_id=tbl_upload_store.store_id', 'left');
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.order_id','DESC');

        return $this->db->get()->result_array();

    }

    public function stock_Admin()
    {
        $this->db->select('*,tbl_upload_order.userId AS userOR,tbl_upload_order.order_id AS orderST ,tbl_upload_order.create_at AS createST ,tbl_upload_order.date_required AS dateREST,tbl_upload_team.status AS Tstatus');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_bookmark','tbl_upload_order.order_id =tbl_bookmark.id_orderBuy ' , 'left');
        $this->db->join('tbl_upload_main_search','tbl_bookmark.id_document = tbl_upload_main_search.id_doc ' , 'left');
        $this->db->join('tbl_upload_team','tbl_upload_order.order_id =tbl_upload_team.order_id ' , 'left');
        $this->db->where('tbl_upload_order.status_admin',1);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required','desc');

        return $this->db->get()->result_array();

    }

    
    
    
    

}
