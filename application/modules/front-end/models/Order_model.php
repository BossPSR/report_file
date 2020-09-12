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
        $this->db->select('*,tbl_upload_order.update_at AS update_at_buy,tbl_upload_order.order_id as ORD,
        tbl_upload_team.order_id as ORDT ,tbl_upload_order.date_required as Drequired');
        $this->db->from('tbl_store_for_buy_email');
        $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id = tbl_store_for_buy_email.order_id');
        $this->db->join('tbl_upload_team', 'tbl_store_for_buy_email.order_id = tbl_upload_team.order_id', 'left');
        $this->db->where('tbl_store_for_buy_email.customer_id', $userId);
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_store_for_buy_email.order_id', 'asc');

        $data = $this->db->get();
        return $data->result_array();
    }

    public function my_stock_item($as)
    {
        $this->db->select('*');
        $this->db->from('tbl_item_position');
        $this->db->where_in('id', $as);

        $data = $this->db->get();
        return $data->result_array();
    }

    public function my_stock_item_not($as)
    {
        $this->db->select('*');
        $this->db->from('tbl_item_position');
        $this->db->where_not_in('id', $as);

        $data = $this->db->get();
        return $data->result_array();
    }

    public function my_stock($item_id, $sess)
    {
        $this->db->select('*,tbl_upload_order.file_name as file_or ,tbl_upload_order.date_required as or_date,tbl_upload_order.order_id as or_1,tbl_upload_order.order_id as mms,tbl_upload_team.teamId as t_id,tbl_upload_team.note as uptnote , tbl_upload_team.status as up_status2');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id');
        $this->db->join('tbl_item_position', 'tbl_upload_team.position = tbl_item_position.id');
        $this->db->join('tbl_upload_orderGT', 'tbl_upload_orderGT.order_id = tbl_upload_order.order_id', 'left');
        $this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_upload_main_search.id_doc = tbl_bookmark.id_document', 'left');
        $this->db->where('tbl_upload_order.date_required >=', date('Y-m-d'));
        $this->db->where('tbl_upload_order.date_required <=', 'tbl_upload_order.date_required');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.status_confirmed_team', 0);
        $this->db->where('tbl_upload_team.position', $item_id);
        $this->db->or_where('tbl_upload_order.status_confirmed_team', NULL);
        $this->db->where_in('tbl_upload_team.teamId', $sess);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'DESC');
        $data = $this->db->get();
        return $data->result_array();
    }

    public function my_stock_row($sess)
    {
        $this->db->select('*,tbl_upload_order.date_required as or_date,tbl_upload_order.order_id as or_1,tbl_upload_order.order_id as mms,tbl_upload_team.teamId as t_id,tbl_upload_team.status as up_status');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id', 'left');
        $this->db->join('tbl_item_position', 'tbl_upload_team.position = tbl_item_position.id', 'left');
        $this->db->join('tbl_upload_orderGT', 'tbl_upload_orderGT.order_id = tbl_upload_order.order_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_team.status', 2);
        $this->db->where_in('tbl_upload_team.teamId', $sess);
        $this->db->order_by('tbl_upload_order.date_required', 'DESC');
        $data = $this->db->get();
        return $data->row_array();
    }

    public function my_stock_count($sess)
    {
        $this->db->select('*,count(tbl_upload_order.status_approved) as c_app');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id');
        $this->db->join('tbl_item_position', 'tbl_upload_team.position = tbl_item_position.id');
        $this->db->join('tbl_morefile_GT', 'tbl_morefile_GT.order_id = tbl_upload_order.order_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.status_delivery', 1);
        $this->db->where('tbl_upload_order.status_approved', 2);
        $this->db->where_in('tbl_upload_team.teamId', $sess);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'DESC');
        $data = $this->db->get();
        return $data->result_array();
    }

    public function my_task($see)
    {
        $this->db->select('*,tbl_upload_order.date_required as or_date,tbl_upload_order.order_id as or_id
        ,tbl_upload_team.status as c_status,tbl_upload_order.update_at as up_order,tbl_upload_team.teamId as t_ch');
        $this->db->from('tbl_upload_team');
        $this->db->join('tbl_upload_order', 'tbl_upload_team.order_id = tbl_upload_order.order_id');
        $this->db->join('tbl_item_position', 'tbl_upload_team.position = tbl_item_position.id');
        // $this->db->join('tbl_morefile_GT', 'tbl_morefile_GT.order_id = tbl_upload_order.order_id', 'left');
        $this->db->join('tbl_bookmark', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_upload_main_search.id_doc = tbl_bookmark.id_document', 'left');
        $this->db->join('tbl_feedback', 'tbl_feedback.order_id = tbl_upload_team.order_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        // $this->db->where('tbl_upload_order.status_confirmed_team', 1);
        $this->db->where('tbl_upload_team.teamId', $see);

        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'DESC');

        $data = $this->db->get();
        return $data->result_array();
    }

    public function delivery_team($sessi)
    {
        $this->db->select('* , tbl_upload_team.id idt');
        $this->db->from('tbl_upload_team');
        $this->db->join('tbl_upload_order', 'tbl_upload_team.order_id = tbl_upload_order.order_id', 'left');
        $this->db->where('tbl_upload_team.status', 0);
        $this->db->where('tbl_upload_team.teamId', $sessi);
        $this->db->where('tbl_upload_order.status_approved', 0);
        $this->db->group_by('tbl_upload_team.order_id');
        $this->db->order_by('tbl_upload_team.order_id', 'DESC');

        $data = $this->db->get();
        return $data->result_array();
    }

    public function delivery_team_feed($sessi)
    {
        $this->db->select('*,tbl_feedback.order_id as order_feed , tbl_upload_team.id idt');
        $this->db->from('tbl_upload_team');
        $this->db->join('tbl_feedback', 'tbl_feedback.order_id = tbl_upload_team.order_id', 'left');
        $this->db->where('tbl_feedback.check_feedback_dalivery', 0);
        $this->db->where('tbl_upload_team.status', 2);
        $this->db->where('tbl_upload_team.teamId', $sessi);
        $this->db->group_by('tbl_feedback.order_id');
        $this->db->order_by('tbl_upload_team.order_id', 'DESC');

        $data = $this->db->get();
        return $data->result_array();
    }

    public function delete_feedback($order_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_feedback');
        $this->db->where('tbl_feedback.order_id', $order_id);
      
        $data = $this->db->get();
        return $data->result_array();
    }

    public function my_cancel($team)
    {
        $this->db->select('* , count(teamid) ccancel');
        $this->db->from('tbl_cancel');
        $this->db->where('teamid', $team);
        $this->db->order_by('id', 'desc');
      
        $data = $this->db->get();
        return $data->row_array();
    }
}
