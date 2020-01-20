<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') == '') {
            redirect('backend');
        } else {

            $data['admin'] = $this->db->get('tbl_admin')->result_array();

            $this->load->view('options/header');
            $this->load->view('admin_list', $data);
            $this->load->view('options/footer');
        }
    }
    public function add_admin()
    {



        $this->load->view('options/header');
        $this->load->view('add_admin');
        $this->load->view('options/footer');
    }


    public function Admin_add_com()
    {


        $data = array(

            'email'         => $this->input->post('email'),
            'phone'   => $this->input->post('phone'),
            'username'   => $this->input->post('username'),
            'password'   => md5($this->input->post('password')),
            'is_admin'   => $this->input->post('is_admin'),
            'created_at'     => date('Y-m-d H:i:s')

        );

        $resultsedit = $this->db->insert('tbl_admin', $data);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Add Admin information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Add Admin information');
        }
        return redirect('back_admin');
    }

    public function edit_admin()
    {



        $this->load->view('options/header');
        $this->load->view('edit_admin');
        $this->load->view('options/footer');
    }

    public function edit_admin_save()
    {
        if ($this->session->userdata('email_admin')  != '') {
            $id                  = $this->input->post('id');
            $c_password          = $this->input->post('c_password');
            $password            = $this->input->post('password');


            if ($password == '' && $c_password == '') {
                $data = array(

                    'email'         => $this->input->post('email'),
                    'phone'   => $this->input->post('phone'),
                    'username'   => $this->input->post('username'),
                    'is_admin'   => $this->input->post('is_admin'),
                    'created_at'     => date('Y-m-d H:i:s')

                );

                $this->db->where('id', $id);
                $success = $this->db->update('tbl_admin', $data);

                if ($success > 0) {
                    $this->session->set_flashdata('save_ss2', 'Successfully updated Admin information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated Admin information');
                }
                return redirect('back_admin');
            } else {
                if ($password == $c_password) {
                    $data = array(

                        'email'         => $this->input->post('email'),
                        'phone'   => $this->input->post('phone'),
                        'username'   => $this->input->post('username'),
                        'password'   => md5($this->input->post('password')),
                        'is_admin'   => $this->input->post('is_admin'),
                        'created_at'     => date('Y-m-d H:i:s')


                    );

                    $this->db->where('id', $id);
                    $success = $this->db->update('tbl_admin', $data);

                    if ($success > 0) {
                        $this->session->set_flashdata('save_ss2',  'Successfully updated Admin information !!. ');
                    } else {
                        $this->session->set_flashdata('del_ss2', 'Not Successfully updated Admin information');
                    }
                    return redirect('back_admin');
                } else {
                    echo "<script>";
                    echo "alert('please Password Matches !!!');";
                    echo "window.location='back_admin';";
                    echo "</script>";
                }
            }
        } else {
            redirect('backend', 'refresh');
        }
    }


    public function status_Admin()
    {
        $id = $this->input->get('id');
        $status = $this->input->get('status');

        $this->db->where('id', $id);
        $resultsedit = $this->db->update('tbl_admin', ['is_admin' => $status]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated status information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated status information');
        }
        return redirect('back_admin');
    }

  
    public function  delete_admin()
    {
        $id = $this->input->get('id');
       

        $this->db->where('id', $id);
        $resultsedit = $this->db->delete('tbl_admin', ['id' => $id]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully delete Admin information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully delete Admin information');
        }
        return redirect('back_admin');
    }
}
