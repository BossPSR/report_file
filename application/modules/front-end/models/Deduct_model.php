<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Deduct_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function my_deduct($_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_deduct');
        $this->db->where('userId', $_user);
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }
}
