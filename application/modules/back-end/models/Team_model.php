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

    
}
