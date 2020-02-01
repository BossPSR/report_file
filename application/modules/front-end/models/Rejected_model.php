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
        $this->db->select('*,COUNT(bookid_rj) as total , tbl_rejected.create_at AS create_rj');
        $this->db->from('tbl_rejected');
        $this->db->join('tbl_upload_full', 'tbl_upload_full.upload_id = tbl_rejected.bookid_rj');
        $this->db->join('tbl_upload', 'tbl_upload.id = tbl_rejected.bookid_rj');
        $this->db->where('tbl_upload_full.userId', $_user);
        $this->db->group_by('tbl_rejected.bookid_rj');
        $this->db->order_by('tbl_rejected.create_at', 'asc');

        $data = $this->db->get();

        return $data->result_array();
    }

    function rejected2($_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_rejected');
        $this->db->where('userId_rj', $_user);
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }
}
