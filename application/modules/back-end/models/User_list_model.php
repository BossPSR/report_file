<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class User_list_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function user_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->join('tbl_paypal','tbl_user.id=tbl_paypal.user_id','left');
        return $this->db->get()->result_array();

    }
   



}
