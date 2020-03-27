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
        $this->db->select('*,tbl_withdraw.id AS idW');
        $this->db->from('tbl_withdraw');
        $this->db->join('tbl_user','tbl_user.id = tbl_withdraw.userId');
        return $this->db->get()->result_array();

    }

    public function withdraw_list_team()
    {
        $this->db->select('*,tbl_withdraw_team.id AS idW,tbl_withdraw_team.status AS status_id');
        $this->db->from('tbl_withdraw_team');
        $this->db->join('tbl_team','tbl_team.IdTeam = tbl_withdraw_team.teamId');
        return $this->db->get()->result_array();

    }
   



}
