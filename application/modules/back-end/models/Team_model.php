<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Team_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    

    public function teamOrder()
    {
		$this->db->select('*,count(tbl_upload_team.teamId) AS orders');
        $this->db->from('tbl_team');
        $this->db->join('tbl_upload_team','tbl_upload_team.teamId = tbl_team.IdTeam','left');
        return $this->db->get()->result_array();

    }

    
}
