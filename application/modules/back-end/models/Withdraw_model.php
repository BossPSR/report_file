<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Withdraw_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function withdraw_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_withdraw');
        $this->db->join('tbl_user','tbl_user.id = tbl_withdraw.userId');
        return $this->db->get()->result_array();

    }
   



}
