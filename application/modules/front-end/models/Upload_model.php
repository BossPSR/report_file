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

    public function my_upload($usersid) {
        
        $this->db->select('*');
        $this->db->from('tbl_upload_preview');
        $this->db->where('userId', $usersid);
        $data = $this->db->get();

        return $data->result_array();
        
    }
    
}
