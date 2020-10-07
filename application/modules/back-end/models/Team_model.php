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
		$this->db->select('*,tbl_team.id AS idT, tbl_team.status AS Tstatus ');
        $this->db->from('tbl_team');
      
        return $this->db->get()->result_array();

    }
    public function team_job()
    {
        $this->db->select('*');
        $this->db->from('tbl_team');
        $this->db->join('tbl_job_position','tbl_team.id = tbl_job_position.id_team','left');
        $this->db->where('tbl_team.id');

        return $this->db->get()->result_array();

    }

    public function t3_job()
    {
        $this->db->select('*');
        $this->db->from('tbl_team');
        $this->db->join('tbl_job_position','tbl_team.id = tbl_job_position.id_team','left');
        $this->db->where('tbl_job_position.status_approve', '0');
        

        return $this->db->get()->result_array();

    }
    
}
