<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Recently_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function recently($user)
    {
        $this->db->select('*');
        $this->db->from('tbl_history');
        $this->db->join('tbl_upload_full', 'tbl_upload_full.upload_id = tbl_history.upload_id');
        $this->db->where('tbl_history.user_id',$user);
        
        $data = $this->db->get();

        return $data->result_array();
    }

}