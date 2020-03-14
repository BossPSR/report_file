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
        $this->db->group_by('tbl_upload_order.order_id');

        $data = $this->db->get();
        return $data->result_array();
    }

    public function my_stock($as)
    {
        $this->db->select('*,tbl_upload_order.date_required as or_date');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id');
        $this->db->join('tbl_item_position', 'tbl_upload_team.position = tbl_item_position.id');
        $this->db->join('tbl_upload_orderGT', 'tbl_upload_orderGT.order_id = tbl_upload_order.order_id');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.status_confirmed_team', 0);
        $this->db->where_in('tbl_upload_team.position', $as);
        $this->db->or_where('tbl_upload_order.status_confirmed_team', NULL);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'DESC');
        $data = $this->db->get();
        return $data->result_array();

    }

    public function my_task($as, $see)
    {
        $this->db->select('*,tbl_upload_order.date_required as or_date');
        $this->db->from('tbl_upload_team');
        $this->db->join('tbl_upload_order', 'tbl_upload_team.order_id = tbl_upload_order.order_id');
        $this->db->join('tbl_item_position', 'tbl_upload_team.position = tbl_item_position.id');
        $this->db->join('tbl_upload_orderGT', 'tbl_upload_orderGT.order_id = tbl_upload_order.order_id');
        $this->db->where('tbl_upload_order.status_book', 2);
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.status_confirmed_team', 1);
        $this->db->where_in('tbl_upload_team.position', $as);
        $this->db->where('tbl_upload_team.teamId', $see);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'DESC');

        $data = $this->db->get();
        return $data->result_array();
    }

    public function delivery_team($sessi)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_team');
        $this->db->where('teamId', $sessi);
        $this->db->order_by('order_id', 'DESC');

        $data = $this->db->get();
        return $data->result_array();
    }
}
