<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Selling_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function my_selling($_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('userId', $_user);
        $this->db->where('price_file !=', '');
        $this->db->where('grade !=', '');
        $this->db->group_by('store_id');
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }
}
