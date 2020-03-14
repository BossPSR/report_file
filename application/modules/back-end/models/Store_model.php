<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Store_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function store_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->group_by('userId');
        $this->db->order_by('id','asc');
        return $this->db->get()->result_array();

    }
    public function store_list_a()
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('grade','A');
        $this->db->where('status_main_search =', 0);
        $this->db->order_by('id','asc');
        return $this->db->get()->result_array();

    }
    public function store_list_b()
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('grade','B');
        $this->db->where('status_main_search =', 0);
        $this->db->order_by('id','asc');
        return $this->db->get()->result_array();

    }
    public function store_list_c()
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('grade','C');
        $this->db->where('status_main_search =', 0);
        $this->db->order_by('id','asc');
        return $this->db->get()->result_array();

    }

    public function store_row()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_order');
        $this->db->where('is_check', 0);
        $this->db->where('status_book', 0);
        $this->db->group_by('order_id');
        return $this->db->get()->result_array();
    }

    public function store_sell()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('status_chack', 0);
        $this->db->where('is_check', 0);
        $this->db->group_by('store_id');
        return $this->db->get()->result_array();
           
    }



    public function store_section()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('status_chack', 1);
        $this->db->where('is_check', 0);
        $this->db->where('status_main_search', 0);
        $this->db->group_by('store_id');
        return $this->db->get()->result_array();
           
    }

    public function bookmark_all()
    {
        $this->db->select('*,tbl_bookmark.id_user AS user_name,tbl_upload_order.file_name AS file_order,tbl_bookmark.id_orderBuy AS orderby,tbl_upload_order.date_required AS date_re' );
        $this->db->from('tbl_bookmark');
        $this->db->join('tbl_upload_order','tbl_upload_order.order_id=tbl_bookmark.id_orderBuy','left');
        $this->db->join('tbl_upload_main_search','tbl_bookmark.id_document=tbl_upload_main_search.id_doc','left');
        $this->db->join('tbl_upload_store','tbl_upload_main_search.upload_store_id=tbl_upload_store.store_id','left');
        $this->db->join('tbl_upload_team','tbl_upload_order.order_id=tbl_upload_team.order_id','left');
        $this->db->join('tbl_upload_order_team','tbl_upload_order.order_id=tbl_upload_order_team.order_id','left');
        $this->db->where('tbl_upload_order.status_pay',1);
        $this->db->group_by('tbl_bookmark.id_orderBuy');
        $this->db->order_by('tbl_bookmark.id','ASC');
        
        return $this->db->get()->result_array();
           
    }

    public function bookmark_all_not()
    {
        $this->db->select('*,tbl_bookmark.id_user AS user_name,tbl_upload_order.file_name AS file_order,tbl_bookmark.id_orderBuy AS orderby,tbl_upload_order.date_required AS date_re' );
        $this->db->from('tbl_bookmark');
        $this->db->join('tbl_upload_order','tbl_upload_order.order_id=tbl_bookmark.id_orderBuy','left');
        $this->db->join('tbl_upload_main_search','tbl_bookmark.id_document=tbl_upload_main_search.id_doc','left');
        $this->db->join('tbl_upload_store','tbl_upload_main_search.upload_store_id=tbl_upload_store.store_id','left');
        $this->db->join('tbl_upload_team','tbl_upload_order.order_id=tbl_upload_team.order_id','left');
        $this->db->join('tbl_upload_order_team','tbl_upload_order.order_id=tbl_upload_order_team.order_id','left');
        $this->db->where('tbl_upload_order.status_pay',0);
        $this->db->group_by('tbl_bookmark.id_orderBuy');
        $this->db->order_by('tbl_bookmark.id','ASC');
        
        return $this->db->get()->result_array();
           
    }


    public function bookmark_upload($DM)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_main_search');
        $this->db->join('tbl_upload_store','tbl_upload_store.store_id=tbl_upload_main_search.upload_store_id','left');
        $this->db->where('tbl_upload_main_search.id_doc',$DM);

        return $this->db->get()->row_array();
           
    }



 

}
