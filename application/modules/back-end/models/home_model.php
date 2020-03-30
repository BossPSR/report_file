<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class home_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function order_list()
    {
        $this->db->select('*,count(tbl_upload_team.position)AS position_number,count(tbl_upload_team.teamId) AS team_number');
        $this->db->from('tbl_item_position');
        $this->db->join('tbl_upload_team','tbl_item_position.id=tbl_upload_team.position','left');
        $this->db->join('tbl_upload_order','tbl_upload_team.order_id=tbl_upload_order.order_id','left');
        $this->db->group_by('tbl_item_position.id');
        return $this->db->get()->result_array();

    }
   
  
    public function order_list1()
    {
        $this->db->select('*,count(tbl_upload_team.position) AS position_number');
        $this->db->from('tbl_item_position');
        $this->db->join('tbl_upload_team','tbl_item_position.id=tbl_upload_team.position','left');
        //$this->db->join('tbl_upload_order','tbl_upload_team.order_id=tbl_upload_order.order_id','left');
        $this->db->group_by('tbl_item_position.id');
        return $this->db->get()->result_array();

    }

    public function order_list2()
    {
        $this->db->select('*,count(tbl_upload_team.status_dashboard) AS team_number');
        $this->db->from('tbl_item_position');
        $this->db->join('tbl_upload_team','tbl_item_position.id=tbl_upload_team.position','left');
        //$this->db->join('tbl_upload_order','tbl_upload_team.order_id=tbl_upload_order.order_id','left');
        //$this->db->where('tbl_upload_team.status_desbroad',1);
        $this->db->group_by('tbl_item_position.id');
        return $this->db->get()->result_array();

    }
   
    
    public function order_list3()
    {
        $this->db->select('*,count(tbl_upload_team.status_dashboard) AS team_number');
        $this->db->from('tbl_item_position');
        $this->db->join('tbl_upload_team','tbl_item_position.id=tbl_upload_team.position','left');
        //$this->db->join('tbl_upload_order','tbl_upload_team.order_id=tbl_upload_order.order_id','left');
        $this->db->group_by('tbl_item_position.id');
        return $this->db->get()->result_array();

    }


}
