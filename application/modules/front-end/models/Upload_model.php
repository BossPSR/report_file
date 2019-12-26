<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Upload_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function my_upload($usersid)
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_full');
        $this->db->where('userId', $usersid);
        $data = $this->db->get();

        return $data->result_array();
    }

    public function unlocks($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_full');
        $this->db->where('userId', $id);
        $data = $this->db->get();

        return $data->row_array();
    }

    public function get_unlocks($id, $upload_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_unlocks');
        $this->db->where('userId', $id);
        $this->db->where('upload_id', $upload_id);
        $data = $this->db->get();

        return $data->row_array();
    }

    public function check_afterunlocks($upload_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_full');
        $this->db->where('upload_id', $upload_id);
        $data = $this->db->get();

        return $data->row_array();
    }
}
