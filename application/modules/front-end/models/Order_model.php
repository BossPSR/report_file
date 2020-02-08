<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Order_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function buy()
    {
        $this->db->select('*,count(id) AS all');
        $this->db->from('tbl_order_f');
        $data = $this->db->get();
        return $data->row();
        
    }
    public function order_buy($userId)
    {
        $this->db->select('*,tbl_store_for_buy_email.update_at AS update_at_buy');
        $this->db->from('tbl_store_for_buy_email');
        $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_store_for_buy_email.order_id');
        $this->db->where('tbl_store_for_buy_email.user_id', $userId);
        
        $data = $this->db->get();
        return $data->result_array();
        
    }
}
