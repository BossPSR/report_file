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
        $this->db->join('tbl_upload_full', 'tbl_upload_full.upload_id = tbl_upload.id');
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
        $this->db->join('tbl_upload_full', 'tbl_upload_full.upload_id = tbl_upload.id');
        $this->db->where("select_item", $select_item);
        $query  =   $this->db->get();

        return $query->result_array();
    }

    function get_search($keyword, $select_item)
    {

        $this->db->select('*');
        $this->db->from('tbl_upload');
        $this->db->join('tbl_upload_full', 'tbl_upload_full.upload_id = tbl_upload.id');
        $this->db->where("select_item", $select_item);
        $this->db->group_start();
        $this->db->like("search_item", $keyword);
        $this->db->or_like("code", $keyword);
        $this->db->or_like("topic", $keyword);
        $this->db->group_end();
        $query  =   $this->db->get();

        return $query->result_array();
    }

    function search_date_reject($search_key, $_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('userId', $_user);
        $this->db->where('is_check', 1);
        $this->db->like('create_at', $search_key);
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    function search_date_selling($search_key, $_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->like('create_at',$search_key);
        $this->db->where('userId', $_user);
        $this->db->where('price_file !=', '');
        $this->db->where('grade !=', '');
        $this->db->group_by('store_id');
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    function search_date_deduct($search_key, $_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_deduct');
        $this->db->like('create_at',$search_key);
        $this->db->where('userId', $_user);
        $this->db->group_by('store_id');
        $this->db->order_by('create_at', 'desc');

        $data = $this->db->get();
        return $data->result_array();
    }

    
}
