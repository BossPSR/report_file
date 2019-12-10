<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function user()
    {
        $this->db->select('*');
        $this->db->from('tbl_personal');
        $data = $this->db->get();

        return $data->result();
    }

    public function company()
    {
        $this->db->select('*');
        $this->db->from('tbl_company');
        $data = $this->db->get();

        return $data->result();
    }

    public function category_show()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->limit(7);
        $data = $this->db->get();

        return $data->result();
    }
    public function type_job()
    {
        $this->db->select('*');
        $this->db->from('tbl_typejob');
        $data = $this->db->get();

        return $data->result();
    }

    public function company_post()
    {
        $this->db->select('*');
        $this->db->from('tbl_postin');
        $data = $this->db->get();

        return $data->result();
    }

    public function province()
    {
        $this->db->select('*');
        $this->db->from('tbl_province');
        $data = $this->db->get();

        return $data->result();
    }

    public function postin_detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_postin');
        $this->db->where('id', $id);
        $data = $this->db->get();

        return $data->row_array();

    }
}
