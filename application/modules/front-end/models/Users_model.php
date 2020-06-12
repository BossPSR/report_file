<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function check_GT($as)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_team');
        $this->db->join('tbl_morefile_GT', 'tbl_morefile_GT.order_id = tbl_upload_team.order_id');
        $this->db->join('tbl_upload_orderGT', 'tbl_upload_orderGT.more_id = tbl_morefile_GT.id');
        $this->db->where('tbl_upload_team.teamId', $as);
        $this->db->where('tbl_morefile_GT.status_more_file', 1);
        $this->db->where('tbl_morefile_GT.status_see_more_file_team !=', 11);

        $data = $this->db->get();
        return $data->row_array();
    }

    
}
