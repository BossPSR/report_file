<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Rejected_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function rejected($_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('is_check', 1);
        $this->db->where('userId', $_user);
        $this->db->group_by('tbl_upload_store.store_id');
        $this->db->order_by('tbl_upload_store.store_id', 'desc');

        $data = $this->db->get();

        return $data->result_array();
    }

    function rejected2($_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('userId', $_user);
        $this->db->where('is_check', 1);
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }
}
