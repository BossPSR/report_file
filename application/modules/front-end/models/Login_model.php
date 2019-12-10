<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function login($email, $password)
    {
       $this->db->where('email', $email);
       $this->db->where('password', $password);
       $query = $this->db->get('tbl_user');

       if ($query->num_rows() > 0)
       {
        return true;
       }
       else
       {
        return false;
       }

    }

    public function check_usre($passport,$email)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('passport',$passport);
        $this->db->where('email',$email);
        $data = $this->db->get();
        
        return $data->row_array();
    }

    public function check_usre2($username)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('username',$username);
    
        $data = $this->db->get();
        
        return $data->row_array();
    }
}

?>