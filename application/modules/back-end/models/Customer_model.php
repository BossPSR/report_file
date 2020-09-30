<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Customer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }



    public function customer_main()
    {
        $this->db->select('*,tbl_upload_order.userId AS userOR,tbl_upload_order.id AS id_sss,tbl_upload_order.order_id AS orderST 
         ,tbl_upload_order.date_required AS dateREST ,tbl_upload_order.Username AS User_St , tbl_upload_order.email AS St_email
        ,tbl_upload_team.note as note_team,tbl_upload_order.id AS id_order_main , tbl_upload_team.status st01');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_bookmark', 'tbl_upload_order.order_id = tbl_bookmark.id_orderBuy ', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_bookmark.id_document = tbl_upload_main_search.id_doc ', 'left');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id ', 'left');
        $this->db->join('tbl_user', 'tbl_user.idUser = tbl_upload_order.userId', 'left');
        $this->db->join('countries', 'countries.id = tbl_user.country_id', 'left');
        $this->db->where('tbl_upload_order.status_book', 1);
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->where_in('tbl_upload_order.status_approved', ['0', '3' , '4' , '5']);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'desc');
        return $this->db->get()->result_array();
    }



    public function customer_list_not()
    {
        $this->db->select('*,tbl_upload_order.order_id AS orderNOT
        ,tbl_upload_order.id AS id_num ,tbl_upload_team.order_id AS orderT3 
        ,tbl_upload_order.date_required AS dateNOT,tbl_upload_team.note as note_team');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id ', 'left');
        $this->db->join('tbl_user', 'tbl_user.idUser = tbl_upload_order.userId', 'left');
        $this->db->join('countries', 'countries.id = tbl_user.country_id', 'left');
        $this->db->where('tbl_upload_order.status_book', 2);
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->where_in('tbl_upload_order.status_approved', ['0', '3' , '4' , '5']);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'desc');
        return $this->db->get()->result_array();
    }

    public function customer_all()
    {
		$this->db->select('*,tbl_upload_order.order_id AS order  ,
		  tbl_upload_order.date_required AS requiredOr ,tbl_upload_team.status AS status_team, tbl_cancel.status_check AS status_cancel');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_bookmark', 'tbl_upload_order.order_id = tbl_bookmark.id_orderBuy ', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_bookmark.id_document = tbl_upload_main_search.id_doc ', 'left');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_user', 'tbl_user.idUser = tbl_upload_order.userId', 'left');
		$this->db->join('countries', 'countries.id = tbl_user.country_id', 'left');
		$this->db->join('tbl_cancel','tbl_cancel.order_id = tbl_upload_team.order_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'desc');
        return $this->db->get()->result_array();
    }

    public function customer_notwork()
    {
        $this->db->select('*,tbl_upload_order.order_id AS order ,tbl_upload_order.id AS id_not
        ,  tbl_upload_order.date_required AS requiredOr , tbl_upload_order.email AS emailOt  ');
        $this->db->from('tbl_upload_order');
		$this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.status_confirmed_team', 0);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->where('tbl_upload_team.teamId', null);
        $this->db->where_in('tbl_upload_order.status_approved', ['0', '3']);
        $this->db->or_where('tbl_upload_team.teamId', '');
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'desc');
        return $this->db->get()->result_array();
    }

    public function customer_notwork_count()
    {
        $this->db->select('*,tbl_upload_order.order_id AS order
        ,  tbl_upload_order.date_required AS requiredOr  ');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.status_confirmed_team', 0);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->where('tbl_upload_team.teamId', null);
        $this->db->or_where('tbl_upload_team.teamId', '');
        $this->db->group_by('tbl_upload_order.order_id');
        return $this->db->get()->result_array();
    }

    public function customer_notsubmit()
    {
        $this->db->select('*,tbl_upload_order.order_id AS order ,tbl_upload_order.id AS id_c ,
        tbl_upload_order.date_required AS requiredOr ,tbl_upload_team.update_confirm AS uadateTOr
        ,tbl_cancel.status AS statusC,tbl_upload_team.teamId AS t_id  ');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_feedback', 'tbl_upload_order.order_id = tbl_feedback.order_id', 'left');
        $this->db->join('tbl_feedback_file', 'tbl_feedback_file.id_feedback = tbl_feedback.id', 'left');
        $this->db->join('tbl_cancel', 'tbl_cancel.order_id = tbl_upload_order.order_id', 'left');
        $this->db->join('tbl_bookmark', 'tbl_upload_order.order_id = tbl_bookmark.id_orderBuy ', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_feedback.check_feedback_dalivery', 0);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->where('tbl_upload_team.status', 2);
        $this->db->or_where('tbl_cancel.status', 1);
        // $this->db->or_where('tbl_upload_team.status', 0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'desc');
        return $this->db->get()->result_array();
    }

    public function customer_notsubmit_count()
    {
        $this->db->select('*,tbl_upload_order.order_id AS order ,  tbl_upload_order.date_required AS requiredOr  ');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_feedback', 'tbl_upload_order.order_id = tbl_feedback.order_id', 'left');
        $this->db->join('tbl_feedback_file', 'tbl_feedback_file.id_feedback = tbl_feedback.id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->where('tbl_upload_team.status', 2);
        $this->db->where('tbl_feedback.check_feedback_dalivery', 0);
        $this->db->group_by('tbl_upload_order.order_id');
        return $this->db->get()->result_array();
    }

    public function more_file_gt()
    {
        $this->db->select('*');
        $this->db->from('tbl_morefile_GT');
        $this->db->join('tbl_upload_orderGT', 'tbl_morefile_GT.id = tbl_upload_orderGT.more_id', 'left');
        $this->db->where('tbl_morefile_GT.status_more_file', 1);
        $this->db->where('tbl_morefile_GT.status_see_more_file_team', 1);
        return $this->db->get()->result_array();
    }


    
}
