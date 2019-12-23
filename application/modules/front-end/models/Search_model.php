<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Search_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_searchAll($keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload');
        $this->db->join('tbl_upload_preview', 'tbl_upload_preview.upload_id = tbl_upload.id', 'left');
        $this->db->where("search_item LIKE '%$keyword%'");
        $this->db->or_like("code", $keyword);
        $this->db->or_like("topic", $keyword);
        $query  =   $this->db->get();

        return $query->result_array();
    }

    function get_search_one($select_item)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload');
        $this->db->join('tbl_upload_preview', 'tbl_upload_preview.upload_id = tbl_upload.id', 'left');
        $this->db->where("select_item", $select_item);
        $query  =   $this->db->get();

        return $query->result_array();
    }

    function get_search($keyword, $select_item)
    {

        $this->db->select('*');
        $this->db->from('tbl_upload');
        $this->db->join('tbl_upload_preview', 'tbl_upload_preview.upload_id = tbl_upload.id', 'left');
        $this->db->where("select_item", $select_item);
        $this->db->group_start();
        $this->db->like("search_item", $keyword);
        $this->db->or_like("code", $keyword);
        $this->db->or_like("topic", $keyword);
        $this->db->group_end();
        $query  =   $this->db->get();


        return $query->result_array();
    }
}
