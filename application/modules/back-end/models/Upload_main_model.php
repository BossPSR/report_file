<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Upload_main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function upload_list()
    {
        $this->db->select('*,tbl_upload_main_search.update_at AS update_atMain 
        ,tbl_upload_main_search.create_at AS create_atMain 
        ,tbl_upload_main_search.userId AS userMain  ');
        $this->db->from('tbl_upload_main_search');
        $this->db->join('tbl_bookmark', 'tbl_bookmark.id_document = tbl_upload_main_search.id_doc', 'left');
        $this->db->join('tbl_upload_order', 'tbl_bookmark.id_orderBuy = tbl_upload_order.order_id', 'left');
        $this->db->group_by('tbl_upload_main_search.id_doc');
        return $this->db->get()->result_array();
    }

   
}
