<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Cashback_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function list_cashback($_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_cashback');
        $this->db->where('userId', $_user);
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    function search_cashback($search_key, $_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_cashback');
        $this->db->like('create_at',$search_key);
        $this->db->where('userId', $_user);
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }
}
