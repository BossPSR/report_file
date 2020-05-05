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
		$this->db->select('*,tbl_team.id AS idT, count(tbl_upload_team.teamId) AS countT');
        $this->db->from('tbl_team');
        $this->db->join('tbl_upload_team','tbl_upload_team.teamId = tbl_team.IdTeam','left');
        $this->db->group_by('tbl_team.IdTeam');
        
        return $this->db->get()->result_array();

    }

    
}
