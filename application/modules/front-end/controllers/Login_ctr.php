<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ctr extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
       
    }


	public function loginMe()
    {
    	$this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email','required');
        $this->form_validation->set_rules('password', 'Password','required');
        if ($this->form_validation->run())
        {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $this->load->model('Login_model');
            
            if ($this->Login_model->login($email, $password))
            {
                $user_data = array(
                    'email' => $email
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('save_ss', TRUE);
                redirect('my-profile');
            }
            else
            {
                $this->session->set_flashdata('del_ss', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> กรุณากรอก Email หรือ Password ให้ถูกต้อง !! </div>');
                redirect('home','refresh');
            }
        }   
        else
        {
            redirect('home','refresh');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();//ล้างsession

        redirect('home');//กลับไปหน้า Login
    }



	public function register()
	{	
        if ($this->session->userdata('username')  != '' )
        {
            redirect('My-account');
        }
        else
        {
            $this->load->view('options/header');
            $this->load->view('register');
            $this->load->view('options/footer');
        }
	}

    public function register_com()
    {
        $first_name     = $this->input->post('first_name');
        $last_name      = $this->input->post('last_name');
        $username       = $this->input->post('username');
        $tel            = $this->input->post('tel');
        $password       = $this->input->post('password');
      
        $check          = $this->input->post('check');

        if($username == $check)
        {
            echo "<script>";
			echo "alert('ขออภัย Username นี้มีผู้อื่นใช้แล้ว กรุณาลองใหม่อีกครั้ง !!!');";
			echo "window.location='Register';";
          	echo "</script>";
        }
        else
        {
            $data = array(
                'first_name'   => $first_name,
                'last_name'    => $last_name,
                'username'     => $username,
                'tel'          => $tel,
                'password'     => (md5($password))
               
            );
            $success = $this->db->insert('tbl_register',$data);
        
            if($succeed > 0)
            {
                $this->session->set_flashdata('msg','ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง !!.');
            }else
            {
                $this->session->set_flashdata('response','สมัครสมาชิกเรียบร้อยแล้ว ท่านสามารถเข้าสู่ระบบได้ <a href="LOgin" style="color:blue;"><u>คลิกที่นี่</u></a>');
            }
                redirect('Register');
        }
    }
}