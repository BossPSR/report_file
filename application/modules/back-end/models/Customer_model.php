<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Customer_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function customer_list()
    {
        $this->db->select('*,tbl_upload_order.userId AS cm');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_bookmark','tbl_upload_order.order_id = tbl_bookmark.id_orderBuy');
        $this->db->join('tbl_upload_main_search','tbl_bookmark.id_document = tbl_upload_main_search.id_doc');
        $this->db->where('tbl_upload_order.status_book=',1);
        $this->db->order_by('tbl_upload_order.date_required','desc');
        return $this->db->get()->result_array();

    }
    
    public function customer_list_not()
    {
        $this->db->select('*,tbl_upload_order.userId AS cm');
        $this->db->from('tbl_upload_order');
        $this->db->where('status_book=',2);
        $this->db->order_by('date_required','desc');
        return $this->db->get()->result_array();

    }
    

}
