<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Forget_password_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function forget_pass($email, $OTP)
    {
        // $this->email->from('infinityP.soft@gmail.com');
        // $this->email->to($email); // ส่งถึง

        // $this->email->subject('Reset password'); // หัวข้อที่ส่ง
        // $this->email->message($OTP);  // รายละเอียด
    }
    
}
