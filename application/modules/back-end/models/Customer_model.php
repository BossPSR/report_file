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
        $this->db->select('*');
        $this->db->from('tbl_upload_order');
        $this->db->where('status_book',1);
        $this->db->where('status_pay',1);
        $this->db->group_by('order_id');
        $this->db->order_by('date_required','desc');
        return $this->db->get()->result_array();

    }

    
    
    public function customer_list_not()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_order');
        $this->db->where('status_book', 2 );
        $this->db->where('status_pay', 1 );
        $this->db->group_by('order_id');
        $this->db->order_by('date_required','desc');
        return $this->db->get()->result_array();

    }
    

}
