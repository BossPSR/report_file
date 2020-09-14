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
        $this->db->select('*,tbl_user.idUser AS Us ,tbl_user.id AS id_uu ');
        $this->db->from('tbl_user');
		$this->db->join('tbl_paypal'  ,'tbl_user.idUser   = tbl_paypal.user_id','left');
		$this->db->join('tbl_cashback','tbl_user.idUser   = tbl_cashback.userId','left');
        $this->db->group_by('tbl_user.idUser');
        return $this->db->get()->result_array();

    }
   



}
