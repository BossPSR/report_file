<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Store_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function store_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->group_by('store_id');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result_array();
    }
    public function store_list_a()
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('grade', 'A');
        $this->db->where('status_main_search =', 0);
        $this->db->order_by('id', 'asc');
        return $this->db->get()->result_array();
    }
    public function store_list_b()
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('grade', 'B');
        $this->db->where('status_main_search =', 0);
        $this->db->order_by('id', 'asc');
        return $this->db->get()->result_array();
    }
    public function store_list_c()
    {

        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('grade', 'C');
        $this->db->where('status_main_search =', 0);
        $this->db->order_by('id', 'asc');
        return $this->db->get()->result_array();
    }

    public function store_row()
    {
        $this->db->select('*,tbl_upload_order.id idmain');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_user', 'tbl_user.idUser = tbl_upload_order.userId', 'left');
        $this->db->join('countries', 'countries.id = tbl_user.country_id', 'left');
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->where('tbl_upload_order.status_book', 0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.id', 'ASC');
        return $this->db->get()->result_array();
    }

    public function store_sell()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->join('tbl_user', 'tbl_user.idUser = tbl_upload_store.userId', 'left');
        $this->db->join('countries', 'countries.id = tbl_user.country_id', 'left');
        $this->db->where('tbl_upload_store.status_chack', 0);
        $this->db->where('tbl_upload_store.is_check', 0);
        $this->db->group_by('tbl_upload_store.store_id');
        $this->db->order_by('tbl_upload_store.id', 'DESC');
        return $this->db->get()->result_array();
    }



    public function store_section()
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_store');
        $this->db->where('status_chack', 1);
        $this->db->where('is_check', 0);
        $this->db->where('status_main_search', 0);
        $this->db->group_by('store_id');
        return $this->db->get()->result_array();
    }

    public function team_select()
    {
        $this->db->select('*');
        $this->db->from('tbl_team');
        $this->db->where('status', 1);

        return $this->db->get()->result_array();
    }

    public function bookmark_all()
    {
        $this->db->select('*,tbl_bookmark.id_user AS user_name,tbl_upload_order.file_name AS file_order,
        tbl_bookmark.id_orderBuy AS orderby,tbl_upload_order.date_required AS date_re ,tbl_upload_order.order_id AS order_save
        ,tbl_upload_order.price_file AS price_save , tbl_upload_team.teamId AS teamT3 ,tbl_upload_order.status_cp AS statusB
        ,tbl_upload_team.wage AS wageT , tbl_upload_order.status_admin statusAdmin ,tbl_upload_order.order_id orderd  ,tbl_upload_order.userId usermain ');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_bookmark', 'tbl_upload_order.order_id = tbl_bookmark.id_orderBuy', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_bookmark.id_document = tbl_upload_main_search.id_doc', 'left');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id = tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_upload_order_team', 'tbl_upload_order.order_id=tbl_upload_order_team.order_id', 'left');
        $this->db->join('tbl_user', 'tbl_user.idUser = tbl_upload_order.userId', 'left');
        $this->db->join('countries', 'countries.id = tbl_user.country_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->where('tbl_upload_order.status_bookmark', 1);
        $this->db->where('tbl_upload_order.status_delivery', 0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_upload_order.date_required', 'ASC');

        return  $this->db->get()->result_array();
    }


    public function bookmark_all_not()
    {
        $this->db->select('*,tbl_bookmark.id_user AS user_name,tbl_upload_order.file_name AS file_order
        ,tbl_bookmark.id_orderBuy AS orderby,tbl_upload_order.date_required AS date_re,
        tbl_upload_order.price_file AS pricr_f,tbl_upload_order.order_id AS order_upload
        ,tbl_upload_order.userId AS user_upload , tbl_upload_order.status_cp AS Stp 
        , tbl_upload_order.status_admin AS Sadmin , tbl_upload_order.id AS upload_order_id');
        $this->db->from('tbl_upload_order');
        $this->db->join('tbl_bookmark', 'tbl_upload_order.order_id=tbl_bookmark.id_orderBuy', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_bookmark.id_document=tbl_upload_main_search.id_doc', 'left');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id=tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_upload_order_team', 'tbl_upload_order.order_id=tbl_upload_order_team.order_id', 'left');
        $this->db->join('tbl_user', 'tbl_user.idUser = tbl_upload_order.userId', 'left');
        $this->db->join('countries', 'countries.id = tbl_user.country_id', 'left');
        $this->db->where('tbl_upload_order.status_book !=', 0);
        $this->db->where('tbl_upload_order.status_pay', 0);
        $this->db->where('tbl_upload_order.is_check', 0);
        $this->db->group_by('tbl_upload_order.order_id');
        $this->db->order_by('tbl_bookmark.id', 'ASC');

        return $this->db->get()->result_array();
    }


    public function bookmark_upload($DM)
    {
        $this->db->select('*');
        $this->db->from('tbl_upload_main_search_sub');
        $this->db->where('tbl_upload_main_search_sub.dm_sub', $DM);

        return $this->db->get()->row_array();
    }

    public function bookmark_dm()
    {
        $this->db->select('*,tbl_bookmark.id_user AS user_name,tbl_upload_order.file_name AS file_order,tbl_bookmark.id_orderBuy AS orderby,tbl_upload_order.date_required AS date_re');
        $this->db->from('tbl_bookmark');
        $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id=tbl_bookmark.id_orderBuy', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_bookmark.id_document=tbl_upload_main_search.id_doc', 'left');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id=tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_upload_order_team', 'tbl_upload_order.order_id=tbl_upload_order_team.order_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->group_by('tbl_bookmark.id_document');
        $this->db->order_by('tbl_bookmark.id', 'ASC');
        return $this->db->get()->result_array();
    }

    public function bookmark_dm1()
    {
        $this->db->select('*,tbl_bookmark.id_user AS user_name,tbl_upload_order.file_name AS file_order,tbl_bookmark.id_orderBuy AS orderby,tbl_upload_order.date_required AS date_re');
        $this->db->from('tbl_bookmark');
        $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id=tbl_bookmark.id_orderBuy', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_bookmark.id_document=tbl_upload_main_search.id_doc', 'left');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id=tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_upload_order_team', 'tbl_upload_order.order_id=tbl_upload_order_team.order_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->group_by('tbl_bookmark.id_document');
        $this->db->order_by('tbl_bookmark.id', 'ASC');
        return $this->db->get()->result_array();
    }




    public function bookmark_show_dm()
    {
        $this->db->select('*,tbl_bookmark.id_user AS user_name,tbl_upload_order.file_name AS file_order,tbl_bookmark.id_orderBuy AS orderby,tbl_upload_order.date_required AS date_re');
        $this->db->from('tbl_bookmark');
        $this->db->join('tbl_upload_order', 'tbl_upload_order.order_id=tbl_bookmark.id_orderBuy', 'left');
        $this->db->join('tbl_upload_main_search', 'tbl_bookmark.id_document=tbl_upload_main_search.id_doc', 'left');
        $this->db->join('tbl_upload_team', 'tbl_upload_order.order_id=tbl_upload_team.order_id', 'left');
        $this->db->join('tbl_upload_order_team', 'tbl_upload_order.order_id=tbl_upload_order_team.order_id', 'left');
        $this->db->where('tbl_upload_order.status_pay', 1);
        $this->db->group_by('tbl_bookmark.id_document');
        $this->db->order_by('tbl_bookmark.id', 'ASC');
        return $this->db->get()->result_array();
    }

    public function check_dm($Document)
    {

        $this->db->select('count(*) AS check_dm1');
        $this->db->from('tbl_bookmark');
        //$this->db->join('tbl_upload_order','tbl_upload_order.order_id = tbl_bookmark.id_orderBuy');
        // $this->db->where('tbl_upload_order.status_delivery',0);
        $this->db->where_in('id_document', $Document);
        return $this->db->get()->row_array();
    }

    public function admin_id($emailadmin)
    {
        $this->db->where('email', $emailadmin);
        return $this->db->get('tbl_admin')->row_array();
    }

    public function dm_sub($dmsub)
    {
        $this->db->where('dm_main', $dmsub);
        $this->db->group_by('dm_sub');

        return $this->db->get('tbl_upload_main_search_sub')->result_array();
    }

    public function dm_sub_upload($DMS,$stu)
    {
        $this->db->like('dm_sub', 'DM'.$DMS.'.'.$stu);
        $this->db->group_by('dm_sub');

        return $this->db->get('tbl_upload_main_search_sub')->result_array();
    }

    public function check_mail($store_id)
    {
        $this->db->where('store_id',$store_id);
        $this->db->where('grade',null);
        $this->db->group_by('section');
        return  $this->db->get('tbl_upload_store')->row_array();

      
    }
    public function check_price($store_id)
    {
        $this->db->where('store_id',$store_id);
        $this->db->where('grade !=','');
        $this->db->group_by('section');
        return  $this->db->get('tbl_upload_store')->result_array();

      
    }

    public function reject_buy()
    {
         $this->db->select('*,tbl_upload_order.update_at as update_buy ,tbl_upload_order.order_id as order_re,tbl_upload_order.file_name as file_name_re' );
         $this->db->from('tbl_upload_order');
         $this->db->join('tbl_upload_team', 'tbl_upload_team.order_id = tbl_upload_order.order_id','left');
         $this->db->join('tbl_user', 'tbl_user.idUser = tbl_upload_order.userId', 'left');
         $this->db->join('countries', 'countries.id = tbl_user.country_id','left');
         $this->db->where('tbl_upload_order.is_check','1');
        return  $this->db->get()->result_array();

      
    }
        
        



    // function fetch_state($st)
    // {
    //     $this->db->where('comandnocom', $st);
    //     $this->db->group_by('dm_sub');
    //     $this->db->order_by('dm_sub', 'asc');
    //     $query = $this->db->get('tbl_upload_main_search_sub');
    //     $output = ' <option value="" disabled>-- Select DM --</option>';
    //     foreach ($query->result() as $row) {
    //         $output .= ' <option value="' . $row->dm_sub . '">' . $row->dm_sub . '</option> ';
    //     }
    //     return $output;
    // }
}
