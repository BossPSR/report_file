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

    public function rejected()
    {

        $this->db->select('*');
        $this->db->from('tbl_rejected');
        $this->db->join('tbl_upload_full', 'tbl_upload_full.upload_id = tbl_rejected.bookid_rj', 'left');
        $this->db->where('tbl_upload.select_item_id');
        $this->db->group_by('tbl_rejected.bookid_rj');
        
        $data = $this->db->get();

        return $data->result_array();
    }

}
