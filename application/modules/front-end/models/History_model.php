<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class History_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function my_store_good($_team)
    {
        $this->db->select('*');
        $this->db->from('tbl_store_team');
        $this->db->where('teamid', $_team);
        $this->db->order_by('id', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    function my_store($_team)
    {
        $this->db->select('*');
        $this->db->from('tbl_deduct_team_score');
        $this->db->where('teamid_dts', $_team);
        $this->db->order_by('id', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    function search_store($search_key, $_team)
    {
        $this->db->select('*');
        $this->db->from('tbl_store_team');
        $this->db->like('create_at',$search_key);
        $this->db->where('teamid', $_team);
        $this->db->order_by('id', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    function my_income($_team)
    {
        $this->db->select('*');
        $this->db->from('tbl_income_team');
        $this->db->where('teamid', $_team);
        $this->db->order_by('id', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }
    function my_income_deducte($_team)
    {
        $this->db->select('*');
        $this->db->from('tbl_deduct_team_income');
        $this->db->where('teamid_dti', $_team);
        $this->db->order_by('id', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    function search_income($search_key, $_team)
    {
        $this->db->select('*');
        $this->db->from('tbl_income_team');
        $this->db->like('create_at',$search_key);
        $this->db->where('teamid', $_team);
        $this->db->order_by('id', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }
}
