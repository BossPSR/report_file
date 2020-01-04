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

    public function my_upload($id,$usersid)
    {

        $this->db->select('*');
        $this->db->from('tbl_upload');
        $this->db->join('tbl_upload_full', 'tbl_upload_full.upload_id = tbl_upload.id', 'left');
        $this->db->where('tbl_upload.select_item_id', $id);
        $this->db->where('tbl_upload_full.userId', $usersid);
        $data = $this->db->get();

        return $data->result_array();
    }

    public function my_upload_folder($usersid)
    {

        $this->db->select('*,count(tbl_upload.select_item_id) AS count_');
        $this->db->from('tbl_upload');
        $this->db->join('tbl_upload_full', 'tbl_upload_full.upload_id = tbl_upload.id');
        $this->db->join('tbl_select_item', 'tbl_select_item.id = tbl_upload.select_item_id');
        $this->db->where('tbl_upload_full.userId', $usersid);
        $this->db->group_by('tbl_upload.select_item_id');
        // $this->db->where('tbl_upload.select_item_id');
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

    public function unlocks_s($id)
    {
        $this->db->select('*,tbl_upload_full.id AS id_full ');
        $this->db->from('tbl_upload_full');
        $this->db->join('tbl_user', 'tbl_upload_full.userId = tbl_user.id', 'left');
        $this->db->where('tbl_upload_full.id', $id);
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
