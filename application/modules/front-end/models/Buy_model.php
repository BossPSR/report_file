<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Buy_model extends CI_Model
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

    function buy_max()
    {
        $this->db->select('*,max(order_main) AS maxorder');
        $this->db->from('tbl_order_f');
        $data = $this->db->get();
        return $data->row();
    }

    function buy_max_sell()
    {
        $this->db->select('*,max(order_main) AS maxorder');
        $this->db->from('tbl_order_s');
        $data = $this->db->get();
        return $data->row();
    }
}
