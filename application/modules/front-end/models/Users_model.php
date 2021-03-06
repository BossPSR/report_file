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

    function check_GT($as)
    {
        $this->db->select('* , tbl_upload_team.teamid ti');
        $this->db->from('tbl_upload_team');
        $this->db->join('tbl_morefile_GT', 'tbl_morefile_GT.order_id = tbl_upload_team.order_id');
        $this->db->join('tbl_upload_orderGT', 'tbl_upload_orderGT.more_id = tbl_morefile_GT.id');
        $this->db->where('tbl_upload_team.teamId', $as);
        $this->db->where('tbl_morefile_GT.status_more_file', 1);
        $this->db->where('tbl_morefile_GT.status_see_more_file_team !=', 11);

        $data = $this->db->get();
        return $data->row_array();
    }

    function check_order($us, $sq)
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_order');
        $this->db->where('userId', $us);
        $this->db->where('status_pay', 0);
        $this->db->where('price_file !=', null);
        // $this->db->where('create_at >=', $sq);
        // $this->db->where('create_at <=', $horu  );
        $this->db->group_by('order_id');
        $this->db->order_by('created_at_buy', 'desc');

        $data = $this->db->get()->result_array();
        // return $data->result_array();

        foreach ($data as $key => $data) {
            $horu = date('Y-m-d H:i:s', strtotime('+ 1 day', strtotime(date('Y-m-d H:i:s'))));
            $this->db->select('*');
            $this->db->from('tbl_upload_order');
            $this->db->where('userId', $us);
            $this->db->where('status_pay', 0);
            $this->db->where('price_file !=', null);
            $this->db->where('created_at_buy >=', $data['created_at_buy']);
            $this->db->where('created_at_buy <=', $horu  );
            $this->db->group_by('order_id');
            $this->db->order_by('created_at_buy', 'desc');
            $data2 = $this->db->get();
            // print_r($horu)  ; print_r(date('Y-m-d H:i:s'))  ;
            
            // exit;
            return $data2->result_array();
            
        }
    }
}
