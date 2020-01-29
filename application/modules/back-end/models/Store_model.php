<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Store_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function store_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->group_by('userId');
        $this->db->order_by('id','asc');
        return $this->db->get()->result_array();

    }
    public function store_list_a()
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('grade','A');
        $this->db->order_by('id','asc');
        return $this->db->get()->result_array();

    }
    public function store_list_b()
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('grade','B');
        $this->db->order_by('id','asc');
        return $this->db->get()->result_array();

    }
    public function store_list_c()
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('grade','C');
        $this->db->order_by('id','asc');
        return $this->db->get()->result_array();

    }

}