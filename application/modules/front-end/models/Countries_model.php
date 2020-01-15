<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Countries_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_countries()
    {
        $this->db->select('*');
        $this->db->from('countries');
        $data = $this->db->get();
        
        return $data->result_array();
    }
}

?>