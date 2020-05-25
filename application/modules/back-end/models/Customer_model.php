<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Customer_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    

    public function customer_main()
    {
        $this->db->select('*,tbl_upload_order.userId AS userOR,tbl_upload_order.order_id AS orderST ,tbl_upload_order.create_at AS createST ,tbl_upload_order.date_required AS dateREST');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_bookmark','tbl_upload_order.order_id =tbl_bookmark.id_orderBuy ');
        $this->db->join('tbl_upload_main_search','tbl_bookmark.id_document = tbl_upload_main_search.id_doc ');
        $this->db->join('tbl_upload_team','tbl_upload_order.order_id =tbl_upload_team.order_id ' , 'left');
        $this->db->where('tbl_upload_order.status_book',1);
        $this->db->where('tbl_upload_order.status_pay',1);
        $this->db->where('tbl_upload_order.is_check',0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required','desc');
        return $this->db->get()->result_array();

    }

    
    
    public function customer_list_not()
    {
        $this->db->select('*,tbl_upload_order.order_id AS orderNOT,tbl_upload_team.order_id AS orderT3,tbl_upload_order.create_at AS createNOT ,tbl_upload_order.date_required AS dateNOT');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team','tbl_upload_order.order_id =tbl_upload_team.order_id ' , 'left');
        $this->db->where('tbl_upload_order.status_book', 2 );
        $this->db->where('tbl_upload_order.status_pay', 1 );
        $this->db->where('tbl_upload_order.is_check',0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required','desc');
        return $this->db->get()->result_array();

    }

    public function customer_all()
    {
        $this->db->select('*,tbl_upload_order.order_id AS order ,tbl_upload_order.create_at AS createOr ,  tbl_upload_order.date_required AS requiredOr  ');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1 );
        $this->db->where('tbl_upload_order.is_check',0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required','desc');
        return $this->db->get()->result_array();

    }

    public function customer_notwork()
    {
        $this->db->select('*,tbl_upload_order.order_id AS order ,tbl_upload_order.create_at AS createOr ,  tbl_upload_order.date_required AS requiredOr  ');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1 );
        $this->db->where('tbl_upload_order.status_confirmed_team', 0 );
        $this->db->where('tbl_upload_order.is_check',0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required','desc');
        return $this->db->get()->result_array();

    }
    

}
