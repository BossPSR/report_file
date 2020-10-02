<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_order_ctr extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->model('My_stock_model');
        $this->load->model('Store_model');
    }

    public function index()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['order_main'] = $this->Customer_model->customer_main();
            $data['ts']         = $this->Store_model->team_select();
            $data['more_file_gt']         = $this->Customer_model->more_file_gt();

            $this->load->view('options/header');
            $this->load->view('satisfied', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function download_all_file_satisfied()
    {
        $order_id  = $this->input->post('orderST');

        $this->db->select('*');
        $this->db->from('tbl_upload_order');
        $this->db->where('order_id', $order_id);
        $result = $this->db->get()->result_array();

        echo json_encode($result);
    }
    public function download_all_file_satisfied_gt()
    {
        $order_id  = $this->input->post('orderST');

        $this->db->select('*');
        $this->db->from('tbl_upload_orderGT');
        $this->db->where('order_id', $order_id);
        $result = $this->db->get()->result_array();

        echo json_encode($result);
    }

    public function not_satisfied()
    {
        if ($this->session->userdata('email_admin') != '') {
            $data['order_not']               = $this->Customer_model->customer_list_not();
            $data['ts']                      = $this->Store_model->team_select();
            $data['more_file_gt_st']         = $this->Customer_model->more_file_gt();
            $this->load->view('options/header');
            $this->load->view('not_satisfied', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }


    public function orverall()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['order_all']      = $this->Customer_model->customer_all();
            $data['order_notwork']  = $this->Customer_model->customer_notwork();
            $data['order_notsum']   = $this->Customer_model->customer_notsubmit();
            $data['no_work']        = $this->Customer_model->customer_notwork_count();
            $data['not_submit']     = $this->Customer_model->customer_notsubmit_count();
            $this->load->view('options/header');
            $this->load->view('orverall', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function orvernotwork()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['order_notwork']  = $this->Customer_model->customer_notwork();
            $data['order_notsum']   = $this->Customer_model->customer_notsubmit();
            $data['no_work']        = $this->Customer_model->customer_notwork_count();
            $data['not_submit']     = $this->Customer_model->customer_notsubmit_count();
            $data['ts']         = $this->Store_model->team_select();

            $checks = $this->Customer_model->customer_notwork();
            foreach ($checks as $check) {
                if ($check['requiredOr'] != date('Y-m-d')) {
                    if ($check['update_check'] != date('Y-m-d')) {
                        $num = $check['num_check'] + 1;
                        $updateData = [
                            'update_check' => date('Y-m-d'),
                            'num_check' => $num,
                        ];
                        $this->db->where('order_id', $check['order']);
                        $this->db->update('tbl_upload_order', $updateData);
                    }
                }
            }

            $this->load->view('options/header');
            $this->load->view('orverall_notwork', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function orvernotsubmit()
    {

        if ($this->session->userdata('email_admin') != '') {

            $data['order_notwork']  = $this->Customer_model->customer_notwork();

            $data['order_notsum']   = $this->Customer_model->customer_notsubmit();
            $data['no_work']        = $this->Customer_model->customer_notwork_count();
            $data['not_submit']     = $this->Customer_model->customer_notsubmit_count();
            $data['ts']             = $this->Store_model->team_select();
            $this->load->view('options/header');
            $this->load->view('orverall_notsubmit', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }

    public function deduct_full20()
    {
        $order    = $this->input->get('order');
        $status   = $this->input->get('status');
        $deprice  = $this->input->get('deprice');
        $teamdb   = $this->db->get_where('tbl_upload_team', ['order_id' => $order])->row_array();
        $resultsedit = 0;
        if ($teamdb == true) {
            $tm   = $this->db->get_where('tbl_team', ['IdTeam' => $teamdb['teamId']])->row_array();

            $deduct = [
                'income' =>  $tm['income'] - $deprice
            ];
            $this->db->where('IdTeam', $teamdb['teamId']);
            $good = $this->db->update('tbl_team', $deduct);

            if ($good) {
                $detail = [
                    'teamid_dti'        =>  $teamdb['teamId'],
                    'item_dti'          =>  'ไม่ส่ง Delivery และไม่กดยกเลิก',
                    'income_dti'        =>  $deprice,
                    'order_id_dti'      =>  $order,
                    'note_dti'          =>  'ไม่ส่ง Delivery และไม่กดยกเลิกหัก $20',
                    'create_at_dti'     =>  date("Y-m-d H:i:s"),
                ];
                $this->db->insert('tbl_deduct_team_income', $detail);
            }
            $data = array(

                'check_deduct_full'      => $status,
                'create_at'              => date('Y-m-d H:i:s'),

            );

            $this->db->where('order_id', $order);
            $this->db->where('teamId', $teamdb['teamId']);
            $resultsedit = $this->db->update('tbl_upload_team', $data);
        }



        echo $resultsedit;
    }




    public function Bookmark()
    {
        if ($this->session->userdata('email_admin') != '') {

            $data['bookmark'] = $this->Store_model->bookmark_all();
            // $data['dm1'] = $this->Store_model->bookmark_dm1();
            $data['dm'] = $this->Store_model->bookmark_dm();

            $data['show_dm'] = $this->Store_model->bookmark_show_dm();
            $this->load->view('options/header');
            $this->load->view('bookmark', $data);
            $this->load->view('options/footer');
        } else {
            $this->load->view('login');
        }
    }




    public function ready_refresh()
    {
        $data = $this->Store_model->bookmark_all();
        $result = [];
        $result['successfully'] = true;
        $result['list'] = $data;

        echo json_encode($result);
    }

    public function edit_date_required_All()
    {
        $order  = $this->input->post('order');
        $date   = $this->input->post('date');

        $this->db->where('order_id', $order);
        $data = $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'date_required' => $date]);
        echo $data;
    }


    public function upload_team()
    {
        $data = array(

            'order_id'                         => $this->input->post('order_id'),
            'position'                         => $this->input->post('position'),
            'wage'                             => $this->input->post('wage'),
            'note'                             => $this->input->post('note_t'),
            'create_at'                        => date('Y-m-d H:i:s')

        );

        $resultsedit = $this->db->insert('tbl_upload_team', $data);
        $this->db->where('order_id', $this->input->post('order_id'));
        $this->db->update('tbl_upload_order', ['notify_admin' => 1, 'date_required' => $this->input->post('Daterequired'), 'note_user' => $this->input->post('note')]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update to team information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
        }
        return redirect('Not_Satisfied');
    }

    public function upload_team_ST()
    {
        $order_id           = $this->input->post('order_id');
        $wage               = $this->input->post('wage');
        $teamid             = $this->input->post('teamid') == '' ? null : $this->input->post('teamid');
        $position           = $this->input->post('position');
        $note               = $this->input->post('note_new');
        $date_required      = $this->input->post('date_required');
        $checkbox           = $this->input->post('checkbox');
        $checkboxmain       = $this->input->post('checkboxmain');
        $checkboxgt         = $this->input->post('checkboxgt');

        $wa = $this->db->get_where('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        if ($wa == true) {
            $this->db->delete('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        }

        if ($checkbox) {
            foreach ($checkbox as $key => $checkbox) {
                $resultT = $this->db->get_where('tbl_upload_order_team', ['id' => $checkbox])->row_array();
                $boxdata = [
                    'order_id_back'     => $resultT['order_id'],
                    'file_name_back'     => $resultT['file_name'],
                    'path_back'         => $resultT['path'],
                    'create_at_back'    => date('Y-m-d H:i:s'),
                ];

                $this->db->insert('tbl_upload_backup_team', $boxdata);
            }
        }


        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_order', ['status_confirmed_team' => '0', 'update_at' => date('Y-m-d H:i:s')]);

        if ($teamid) {
            foreach ($teamid as $key => $teamid) {
                $insertdb = [
                    'order_id'          => $order_id,
                    'wage'              => $wage,
                    'position'          => $position,
                    'teamId'            => $teamid,
                    'note'              => $note,
                    'status'            => 0,
                    'status_check_team' => 0,
                    'create_at'         => date('Y-m-d H:i:s')
                ];
                $resultsedit = $this->db->insert('tbl_upload_team', $insertdb);
                $last = $this->db->insert_id();

                if ($checkboxmain) {
                    foreach ($checkboxmain as $key => $checkboxmain) {
                        $resultTM = $this->db->get_where('tbl_upload_order', ['id' => $checkboxmain])->row_array();
                        $mdata = [
                            'sub_id_m'          => $last,
                            'order_id_m'        => $resultTM['order_id'],
                            'file_name_m'       => $resultTM['file_name'],
                            'path_m'            => $resultTM['path'],
                            'create_at_m'       => date('Y-m-d H:i:s'),
                        ];

                        $this->db->insert('tbl_upload_backup_main', $mdata);
                    }
                }

                if ($checkboxgt) {
                    foreach ($checkboxgt as $key => $checkboxgt) {
                        $resultTG = $this->db->get_where('tbl_upload_orderGT', ['id' => $checkboxgt])->row_array();
                        $gtdata = [
                            'sub_id_g'          => $last,
                            'order_id_g'        => $resultTG['order_id'],
                            'file_name_g'       => $resultTG['file_name_GT'],
                            'path_g'            => $resultTG['path_GT'],
                            'create_at_g'       => date('Y-m-d H:i:s'),
                        ];

                        $this->db->insert('tbl_upload_backup_gt', $gtdata);
                    }
                }

                $this->sendEmail_all($teamid, $order_id);
            }
        }


        if ($resultsedit) {
            if ($teamid == '') {
                $this->db->where('order_id', $order_id);
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully Update to team information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1, 'date_required' => $date_required]);
            }
        }

        return redirect('Satisfied');
    }

    public function upload_team_not_work()
    {
        $teamid     = $this->input->post('team');
        $order_id   = $this->input->post('order_id');

        $data = array(

            'order_id'                         => $order_id,
            'position'                         => $this->input->post('position'),
            'wage'                             => $this->input->post('wage'),
            'teamId'                           => $teamid,
            'note'                             => $this->input->post('note'),
            'create_at'                        => date('Y-m-d H:i:s')

        );


        $resultsedit = $this->db->insert('tbl_upload_team', $data);

        $this->db->where('order_id', $this->input->post('order_id'));
        $this->db->update('tbl_upload_order', ['notify_admin' => 1, 'date_required' => $this->input->post('Daterequired')]);

        if ($resultsedit) {
            if ($teamid == '') {
                $this->db->where('order_id', $order_id);
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully Update to team information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully Update to team information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1]);

                $this->sendEmail_all($teamid, $order_id);
            }
        }

        return redirect('Satisfied');
    }

    public function edit_date_required_Satisfied()
    {
        $order_id = $this->input->post('order_id');
        $date_required = $this->input->post('date_required');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'date_required' => $date_required]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Date Required Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Date Required Satisfied information');
        }
        return redirect('Satisfied');
    }

    public function edit_wage_stockadmin()
    {
        $order_id = $this->input->post('order_id');
        $wage = $this->input->post('wage');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['wage' => $wage]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Wage Not Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Wage Not Satisfied information');
        }
        return redirect('my_stock_admin');
    }

    public function edit_info_Satisfied()
    {
        $order_id           = $this->input->post('order_id');
        $wage               = $this->input->post('wage');
        $teamid             = $this->input->post('teamid') == '' ? null : $this->input->post('teamid');
        $position           = $this->input->post('position');
        $note               = $this->input->post('note_new');
        $date_required      = $this->input->post('date_required');
        $checkbox           = $this->input->post('checkbox');
        $checkboxmain       = $this->input->post('checkboxmain');
        $checkboxgt         = $this->input->post('checkboxgt');

        $wa = $this->db->get_where('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        if ($wa == true) {
            $this->db->delete('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        }

        if ($checkbox) {
            foreach ($checkbox as $key => $checkbox) {
                $resultT = $this->db->get_where('tbl_upload_order_team', ['id' => $checkbox])->row_array();
                $boxdata = [
                    'order_id_back'     => $resultT['order_id'],
                    'file_name_back'     => $resultT['file_name'],
                    'path_back'         => $resultT['path'],
                    'create_at_back'    => date('Y-m-d H:i:s'),
                ];

                $this->db->insert('tbl_upload_backup_team', $boxdata);
            }
        }

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['status' => 4, 'position' => $position, 'update_at' => date('Y-m-d H:i:s')]);

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_order', ['status_confirmed_team' => '0', 'update_at' => date('Y-m-d H:i:s')]);

        if ($teamid) {
            foreach ($teamid as $key => $teamid) {
                $insertdb = [
                    'order_id'          => $order_id,
                    'wage'              => $wage,
                    'position'          => $position,
                    'teamId'            => $teamid,
                    'note'              => $note,
                    'status'            => 0,
                    'status_check_team' => 1,
                    'create_at'         => date('Y-m-d H:i:s')
                ];
                $resultsedit = $this->db->insert('tbl_upload_team', $insertdb);
                $last = $this->db->insert_id();

                if ($checkboxmain) {
                    foreach ($checkboxmain as $key => $checkboxmain) {
                        $resultTM = $this->db->get_where('tbl_upload_order', ['id' => $checkboxmain])->row_array();
                        $mdata = [
                            'sub_id_m'          => $last,
                            'order_id_m'        => $resultTM['order_id'],
                            'file_name_m'       => $resultTM['file_name'],
                            'path_m'            => $resultTM['path'],
                            'create_at_m'       => date('Y-m-d H:i:s'),
                        ];

                        $this->db->insert('tbl_upload_backup_main', $mdata);
                    }
                }

                if ($checkboxgt) {
                    foreach ($checkboxgt as $key => $checkboxgt) {
                        $resultTG = $this->db->get_where('tbl_upload_orderGT', ['id' => $checkboxgt])->row_array();
                        $gtdata = [
                            'sub_id_g'          => $last,
                            'order_id_g'        => $resultTG['order_id'],
                            'file_name_g'       => $resultTG['file_name_GT'],
                            'path_g'            => $resultTG['path_GT'],
                            'create_at_g'       => date('Y-m-d H:i:s'),
                        ];

                        $this->db->insert('tbl_upload_backup_gt', $gtdata);
                    }
                }

                $this->sendEmail_all($teamid, $order_id);
            }
        }

        if ($resultsedit) {
            if ($teamid == '') {
                $this->db->where('order_id', $order_id);
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0 , 'date_required' => $date_required]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Team All information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Team All information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1, 'date_required' => $date_required]);
            }
        }

        return redirect('Satisfied');
    }

    public function edit_info_Not_Satisfied()
    {
        $order_id       = $this->input->post('order_id');
        $wage           = $this->input->post('wage');
        $teamid         = $this->input->post('teamid');
        $position       = $this->input->post('position');
        $date_require   = $this->input->post('date_require');
        $note           = $this->input->post('note');
        $checkbox       = $this->input->post('checkbox');


        $wa = $this->db->get_where('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        if ($wa == true) {
            $this->db->delete('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        }

        if ($checkbox) {
            foreach ($checkbox as $key => $checkbox) {
                $resultT = $this->db->get_where('tbl_upload_order_team', ['id' => $checkbox])->row_array();
                $boxdata = [
                    'order_id_back'     => $resultT['order_id'],
                    'file_name_back'     => $resultT['file_name'],
                    'path_back'         => $resultT['path'],
                    'create_at_back'    => date('Y-m-d H:i:s'),
                ];

                $this->db->insert('tbl_upload_backup_team', $boxdata);
            }
        }

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['status' => 4]);

        if ($teamid) {
            foreach ($teamid as $key => $teamid) {
                $insertdb = [
                    'order_id'          => $order_id,
                    'wage'              => $wage,
                    'position'          => $position,
                    'teamId'            => $teamid,
                    'note'              => $note,
                    'status'            => 0,
                    'status_check_team' => 1,
                    'create_at'         => date('Y-m-d H:i:s')
                ];
                $resultsedit = $this->db->insert('tbl_upload_team', $insertdb);
                $this->sendEmail_all($teamid, $order_id);
            }
        }

        if ($resultsedit) {
            if ($teamid == '') {
                $this->db->where('order_id', $order_id);
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0, 'date_required' => $date_require]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Team All information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Team All information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1, 'date_required' => $date_require]);
            }
        }

        return redirect('Not_Satisfied');
    }

    public function edit_info_stockadmin()
    {
        $order_id           = $this->input->post('order_id');
        $wage               = $this->input->post('wage');
        $teamid             = $this->input->post('teamid') == '' ? null : $this->input->post('teamid');
        $position           = $this->input->post('position');
        $note               = $this->input->post('note_new');
        $date_required      = $this->input->post('date_required');
        $checkbox           = $this->input->post('checkbox');
        $checkboxmain       = $this->input->post('checkboxmain');
        $checkboxgt         = $this->input->post('checkboxgt');

        $wa = $this->db->get_where('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        if ($wa == true) {
            $this->db->delete('tbl_upload_backup_team', ['order_id_back' => $order_id]);
        }

        if ($checkbox) {
            foreach ($checkbox as $key => $checkbox) {
                $resultT = $this->db->get_where('tbl_upload_order_team', ['id' => $checkbox])->row_array();
                $boxdata = [
                    'order_id_back'     => $resultT['order_id'],
                    'file_name_back'     => $resultT['file_name'],
                    'path_back'         => $resultT['path'],
                    'create_at_back'    => date('Y-m-d H:i:s'),
                ];

                $this->db->insert('tbl_upload_backup_team', $boxdata);
            }
        }

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['status' => 4, 'position' => $position, 'update_at' => date('Y-m-d H:i:s')]);

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_order', ['status_confirmed_team' => '0', 'update_at' => date('Y-m-d H:i:s')]);

        if ($teamid) {
            foreach ($teamid as $key => $teamid) {
                $insertdb = [
                    'order_id'          => $order_id,
                    'wage'              => $wage,
                    'position'          => $position,
                    'teamId'            => $teamid,
                    'note'              => $note,
                    'status'            => 0,
                    'status_check_team' => 1,
                    'create_at'         => date('Y-m-d H:i:s')
                ];
                $resultsedit = $this->db->insert('tbl_upload_team', $insertdb);
                $last = $this->db->insert_id();

                if ($checkboxmain) {
                    foreach ($checkboxmain as $key => $checkboxmain) {
                        $resultTM = $this->db->get_where('tbl_upload_order', ['id' => $checkboxmain])->row_array();
                        $mdata = [
                            'sub_id_m'          => $last,
                            'order_id_m'        => $resultTM['order_id'],
                            'file_name_m'       => $resultTM['file_name'],
                            'path_m'            => $resultTM['path'],
                            'create_at_m'       => date('Y-m-d H:i:s'),
                        ];

                        $this->db->insert('tbl_upload_backup_main', $mdata);
                    }
                }

                if ($checkboxgt) {
                    foreach ($checkboxgt as $key => $checkboxgt) {
                        $resultTG = $this->db->get_where('tbl_upload_orderGT', ['id' => $checkboxgt])->row_array();
                        $gtdata = [
                            'sub_id_g'          => $last,
                            'order_id_g'        => $resultTG['order_id'],
                            'file_name_g'       => $resultTG['file_name_GT'],
                            'path_g'            => $resultTG['path_GT'],
                            'create_at_g'       => date('Y-m-d H:i:s'),
                        ];

                        $this->db->insert('tbl_upload_backup_gt', $gtdata);
                    }
                }

                $this->sendEmail_all($teamid, $order_id);
            }
        }

        if ($resultsedit) {
            if ($teamid == '') {
                $this->db->where('order_id', $order_id);
                $update = $this->db->update('tbl_upload_order', ['status_confirmed_team' => 0 , 'date_required' => $date_required]);
                if ($update > 0) {
                    $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Team All information !!.');
                } else {
                    $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Team All information');
                }
            } else {

                $this->db->where('order_id', $order_id);
                $this->db->update('tbl_upload_order', ['status_confirmed_team' => 1, 'date_required' => $date_required]);
            }
        }

        return redirect('my_stock_admin');
    }

    public function  my_stock_admin_note()
    {
        $id         = $this->input->post('id');
        $detail     = $this->input->post('detail');

        $this->db->where('order_id', $id);
        $resultsedit = $this->db->update('tbl_upload_order', ['note_user' => $detail]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Note information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Note information');
        }
        return redirect('my_stock_admin');
    }

    public function  my_stock_admin_note_team()
    {
        $id             = $this->input->post('id');
        $detail_team    = $this->input->post('detail_team');

        $this->db->where('order_id', $id);
        $resultsedit = $this->db->update('tbl_upload_team', ['note' => $detail_team]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Note information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Note information');
        }
        return redirect('my_stock_admin');
    }

    public function edit_date_required_Not_Satisfied()
    {
        $order_id = $this->input->post('order_id');
        $date_required = $this->input->post('date_required');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_order', ['update_at' => date('Y-m-d H:i:s'), 'date_required' => $date_required]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Date Required Not Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Date Required Not Satisfied information');
        }
        return redirect('Not_Satisfied');
    }

    public function edit_wage_Not_Satisfied()
    {
        $order_id = $this->input->post('order_id');
        $wage = $this->input->post('wage');

        $this->db->where('order_id', $order_id);
        $resultsedit = $this->db->update('tbl_upload_team', ['wage' => $wage]);

        if ($resultsedit > 0) {
            $this->session->set_flashdata('save_ss2', ' Successfully updated Edit Wage Not Satisfied information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully updated Edit Wage Not Satisfied information');
        }
        return redirect('Not_Satisfied');
    }

    public function refresh_nw()
    {
        $no_work      = $this->Customer_model->customer_notwork_count();
        echo count($no_work);
    }

    public function refresh_ns()
    {
        $not_submit     = $this->Customer_model->customer_notsubmit_count();
        echo count($not_submit);
    }

    public function click_step()
    {
        $order_id = $this->input->post('order_id');

        $uploadOrder = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->result_array();
        foreach ($uploadOrder as $upload_order) {
            $click_step = $upload_order['click_step'] + 1;
            if ($click_step >= 4) {
                $click_step = 0;
            }
            $this->db->where('id', $upload_order['id']);
            $this->db->update('tbl_upload_order', ['click_step' => $click_step]);
        }

        $clickStep = $this->db->get_where('tbl_upload_order', ['order_id' => $order_id])->row_array();

        echo $clickStep['click_step'];
    }


    private function sendEmail_all($teamid, $order_id)
    {
        $team  = $this->db->get_where('tbl_team', ['idTeam' => $teamid])->row_array();

        $subject = 'You have received additional work from the admin. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $team['name'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order_id . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Order Details ("' . $order_id . '")</p>';

        $message .= '<div style="text-align:center; margin:15px 0; color:#000000; font-size:16px;"> You have received an order at : ' . $order_id . ' , Please check the binder. http://www.ip-soft.co.th/ipsoft </div>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinityP23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($team['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Update PriceFile information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Update PriceFile information');
        }
    }

    public function sendEmail_new_daterq()
    {
        $userid  = $this->input->post('userid');
        $order   = $this->input->post('order');
        $daterq  = $this->input->post('daterq');
        $user    = $this->db->get_where('tbl_user', ['IdUser' => $userid])->row();


        $subject = 'You have received additional work from the admin. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $userid . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Your order time has expired. You can choose from 3 options. ("' . $order . '")</p>';
        $message .= '<br>';
        $message .= '<p style="font-size: 18px;">New Date required. ' . $daterq . '</p>';

        $message .= '<a class="btn btn-info" style="text-decoration: none;padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #fff;background-color: #00cc2cfa;border: 1px solid #009c22;" href="https://www.ip-soft.co.th/ipsoft/ok_new_date?order=' . $order . '&date=' . $daterq . '&user=' . $userid . ' ">';
        $message .= 'ตกลงเวลาใหม่ที่แอดมินกำหนด ';
        $message .= '</a> &nbsp;';
        $message .= '<a class="btn btn-info" style="text-decoration: none;padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #fff;background-color: #ef0000;border: 1px solid #b10000;" href="https://www.ip-soft.co.th/ipsoft/no_ok_new_date?order=' . $order . '&date=' . $daterq . '&user=' . $userid . '">';
        $message .= 'ยกเลิกออเดอร์ ';
        $message .= '</a> &nbsp;';
        $message .= '<a class="btn btn-info" style="text-decoration: none;padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #000000;background-color: #ffda00;border: 1px solid #ffc03f;" href="https://www.ip-soft.co.th/ipsoft/user-manual?order=' . base64_encode($order) . '">';
        $message .= 'ฉันขอกำหนดวันที่ด้วยตัวเอง ';
        $message .= '</a>';


        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinityP23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($user->email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Sent new date !!.');
            return redirect('Satisfied');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Sent new date');
            return redirect('Satisfied');
        }
    }

    public function sendEmail_no_new_daterq()
    {
        $userid  = $this->input->post('userid');
        $order   = $this->input->post('order');
        $daterq  = $this->input->post('daterq');
        $user    = $this->db->get_where('tbl_user', ['IdUser' => $userid])->row();


        $subject = 'You have received additional work from the admin. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $userid . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p>Your order time has expired. You can choose from 3 options. ("' . $order . '")</p>';
        $message .= '<br>';
        $message .= '<p style="font-size: 18px;">New Date required. ' . $daterq . '</p>';

        $message .= '<a class="btn btn-info" style="text-decoration: none;padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #fff;background-color: #00cc2cfa;border: 1px solid #009c22;" href="https://www.ip-soft.co.th/ipsoft/ok_new_date?order=' . $order . '&date=' . $daterq . '&user=' . $userid . ' ">';
        $message .= 'ตกลงเวลาใหม่ที่แอดมินกำหนด ';
        $message .= '</a> &nbsp;';
        $message .= '<a class="btn btn-info" style="text-decoration: none;padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #fff;background-color: #ef0000;border: 1px solid #b10000;" href="https://www.ip-soft.co.th/ipsoft/no_ok_new_date?order=' . $order . '&date=' . $daterq . '&user=' . $userid . '">';
        $message .= 'ยกเลิกออเดอร์ ';
        $message .= '</a> &nbsp;';
        $message .= '<a class="btn btn-info" style="text-decoration: none;padding: 12px 30px;border-radius: 5px;width: 300px;font-size: 18px;color: #000000;background-color: #ffda00;border: 1px solid #ffc03f;" href="https://www.ip-soft.co.th/ipsoft/user-manual?order=' . base64_encode($order) . '">';
        $message .= 'ฉันขอกำหนดวันที่ด้วยตัวเอง ';
        $message .= '</a>';


        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinityP23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($user->email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');

        if ($this->email->send() == true) {
            $this->session->set_flashdata('save_ss2', 'Successfully Sent new date !!.');
            return redirect('Satisfied');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully Sent new date');
            return redirect('Satisfied');
        }
    }

    public function ok_new_date()
    {
        $order   = $this->input->get('order');
        $date    = $this->input->get('date');
        $user    = $this->input->get('user');
        $userdb  = $this->db->get_where('tbl_user', ['IdUser' => $user])->row_array();
        $teamdb  = $this->db->get_where('tbl_upload_team', ['order_id' => $order])->row_array();
        $orderdb = $this->db->get_where('tbl_upload_order', ['order_id' => $order])->row_array();

        if ($orderdb['check_email_ot'] == 1) {
            $this->session->set_flashdata('del_ss2', 'You have already done this. Sorry for the inconvenience.');
            return redirect('home');
        }

        $update = [
            'date_required'  =>  $date,
            'check_email_ot' =>  1
        ];
        $this->db->where('order_id', $order);
        $success = $this->db->update('tbl_upload_order', $update);

        $this->sendEmail_success_user($userdb, $order, $date);

        if ($teamdb == true) {
            $this->sendEmail_success_team($teamdb, $order, $date);
        }

        if ($success) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }
        return redirect('home');
    }

    public function no_ok_new_date()
    {
        $order   = $this->input->get('order');
        $date    = $this->input->get('date');
        $user    = $this->input->get('user');
        $userdb  = $this->db->get_where('tbl_user', ['IdUser' => $user])->row_array();
        $teamdb  = $this->db->get_where('tbl_upload_team', ['order_id' => $order])->row_array();
        $orderdb = $this->db->get_where('tbl_upload_order', ['order_id' => $order])->row_array();

        if ($orderdb['check_email_ot'] == 1) {
            $this->session->set_flashdata('del_ss2', 'You have already done this. Sorry for the inconvenience.');
            return redirect('home');
        }

        $update = [
            'is_check'          =>  1,
            'check_email_ot'    =>  1
        ];
        $this->db->where('order_id', $order);
        $success = $this->db->update('tbl_upload_order', $update);

        $this->sendEmail_success_user_no($userdb, $order, $date);

        if ($teamdb == true) {
            $this->sendEmail_success_user_no($teamdb, $order, $date);
        }

        if ($success) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }
        return redirect('home');
    }


    public function sendEmail_success_user($userdb, $order, $date)
    {

        $subject = 'You have successfully changed the date. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $userdb['username'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p> You have successfully changed the date. ("' . $order . '")</p>';
        $message .= '<p style="font-size: 18px;">New Date required. ' . $date . '</p>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinityP23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($userdb['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');
        $this->email->send();
    }

    public function sendEmail_success_user_no($userdb, $order, $date)
    {

        $subject = 'You have successfully changed the date. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $userdb['username'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p> You have successfully canceled your order. ("' . $order . '")</p>';
        $message .= '<p style="font-size: 18px;">Thank you customers for using our services.</p>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinityP23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($userdb['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');
        $this->email->send();
    }

    public function sendEmail_success_team($teamdb, $order, $date)
    {

        $subject = 'You have successfully changed the date. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $teamdb['name'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p> You have successfully changed the date. ("' . $order . '")</p>';
        $message .= '<p style="font-size: 18px;">New Date required. ' . $date . '</p>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinityP23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($teamdb['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');
        $this->email->send();
    }

    public function sendEmail_success_team_no($teamdb, $order, $date)
    {

        $subject = 'You have successfully changed the date. ';

        $message  = '<center>';
        $message .= '<div style="max-width:800px;">';
        $message .= '<div class="content" >';
        $message .= '<div style="background-color: #0063d1; color: #fff;text-align:center;padding:20px 1px;font-size:16px;">';
        $message .= 'You have received additional work from the admin..';
        $message .= '</div>';
        $message .= '<div class="row">';
        $message .= '<p>Hey "' . $teamdb['name'] . '",</p>';
        $message .= '<p>You have been Order number <span style="color: #0063d1;">"' . $order . '"</span></p>';
        $message .= '<p>If you have any questions, feel free to contact us at any time viaemail at</p>';
        $message .= '<p style="color: #0063d1;">support@reportfile.co.th</p><br />';
        $message .= '<p>Check below for your order details.</p><hr>';
        $message .= '<p> You have successfully canceled your order. ("' . $order . '")</p>';
        $message .= '<p style="font-size: 18px;">Thank you customers for using our services.</p>';

        $message .= '</center>';

        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '2002';
        $config['smtp_user'] = 'infinityp.soft@gmail.com';
        $config['smtp_pass'] = 'infinityP23';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['smtp_crypto'] = 'tls';
        $config['newline'] = "\r\n";

        //$file_path = 'uploads/' . $file_name;
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('infinityp.soft@gmail.com');
        $this->email->to($teamdb['email']);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype('html');
        $this->email->send();
    }


    public function rename_uploadmain()
    {
        $resume = $this->input->post('resume');
        $doc    = $this->input->post('doc');
        $path   = $this->input->post('path');
        $id     = $this->input->post('id');

        rename($path, 'uploads/Team/' . $resume . '.' . $doc);
        if ($id) {
            $update = [
                'file_name' => $resume . '.' . $doc,
                'path' => 'uploads/Team/' . $resume . '.' . $doc,
            ];
            $this->db->where('id', $id);
            $success = $this->db->update('tbl_upload_order_team', $update);
        }

        if ($success) {
            $this->session->set_flashdata('save_ss2', 'Successfully send delivery information !!.');
        } else {
            $this->session->set_flashdata('del_ss2', 'Not Successfully send delivery information');
        }
        return redirect('Bookmark');
    }

    public function satisfied_up_mainfile()
    {
        if ($this->session->userdata('email_admin') != '') {
            $orderST                = $this->input->post('orderST');
            $userOR                 = $this->input->post('userOR');
            $User_St                = $this->input->post('User_St');
            $St_email               = $this->input->post('St_email');
            $price_file             = $this->input->post('price_file');
            $price_dis_order        = $this->input->post('price_dis_order');
            $score_user             = $this->input->post('score_user');
            $dateREST               = $this->input->post('dateREST');
            $create_times           = $this->input->post('create_times');
            $status_book            = $this->input->post('status_book');
            $status_admin           = $this->input->post('status_admin');
            $is_check               = $this->input->post('is_check');
            $note_reject            = $this->input->post('note_reject');
            // $is_confirm             = $this->input->post('is_confirm');
            $status_pay             = $this->input->post('status_pay');
            $select_item            = $this->input->post('select_item');
            $status_approved        = $this->input->post('status_approved');
            $notify_user            = $this->input->post('notify_user');
            $status_confirmed_team  = $this->input->post('status_confirmed_team');
            $status_cp              = $this->input->post('status_cp');
            $status_delivery        = $this->input->post('status_delivery');
            $notify_team            = $this->input->post('notify_team');
            $notify_admin           = $this->input->post('notify_admin');
            $click_step             = $this->input->post('click_step');

            $target_dir = "uploads/Main/"; // Upload directory
            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/Main/';
                // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['allowed_types']   = '*';
                $config['max_size']        = '99999'; // max_size in kb
                $config['file_name']     = $_FILES['file']['name'];

                //Load upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();

                    $data = array(
                        'order_id'          => $orderST,
                        'userId'            => $userOR,
                        'Username'          => $User_St,
                        'email'             => $St_email,
                        'price_file'        => $price_file,
                        'price_dis_order'   => $price_dis_order,
                        'score_user'        => $score_user,
                        'date_required'     => $dateREST,
                        'status_book'       => $status_book,
                        'status_admin'      => $status_admin,
                        'is_check'          => $is_check,
                        'note_reject'       => $note_reject,
                        // 'is_confirm'        => $is_confirm,
                        'status_pay'        => $status_pay,
                        'select_item'       => $select_item,
                        'status_approved'   => $status_approved,
                        'notify_user'       => $notify_user,
                        'status_confirmed_team' => $status_confirmed_team,
                        'status_cp'         => $status_cp,
                        'status_delivery'   => $status_delivery,
                        'notify_team'       => $notify_team,
                        'notify_admin'      => $notify_admin,
                        'click_step'        => $click_step,
                        'file_name'         => $uploadData['file_name'],
                        'path'              => 'uploads/Main/' . $uploadData['file_name'],
                        'created_at_buy'         => date('Y-m-d H:i:s'),
                        'status_upload_admin'   => 1 // admin
                    );
                    $this->db->insert('tbl_upload_order', $data);
                }
            }
        } else {
            redirect('Login_admin');
        }
    }

    public function satisfied_per_add_gt_file()
    {
        if ($this->session->userdata('email_admin') != '') {
            $orderST                = $this->input->post('orderST');
            $userOR                 = $this->input->post('userOR');

            $data = array(
                'userId'        => $userOR,
                'order_id'      => $orderST,
                'create_at'     => date('Y-m-d H:i:s'),
            );
            $success = $this->db->insert('tbl_morefile_GT', $data);
            echo $success;
        } else {
            redirect('Login_admin');
        }
    }

    public function satisfied_up_gtfile()
    {
        if ($this->session->userdata('email_admin') != '') {
            $orderST                = $this->input->post('orderST');
            $userOR                 = $this->input->post('userOR');


            $target_dir = "uploads/Buy/GT/"; // Upload directory
            if (!empty($_FILES['file']['name'])) {

                // Set preference
                $config['upload_path']     = 'uploads/Buy/GT/';
                // $config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['allowed_types']   = '*';
                $config['max_size']        = '99999'; // max_size in kb
                $config['file_name']     = $_FILES['file']['name'];

                //Load upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $max_id = $this->db->order_by('id', 'desc')->get('tbl_morefile_GT')->row_array();
                    $uploadData = $this->upload->data();
                    $data2 = array(
                        'more_id'       => $max_id['id'],
                        'order_id'      => $orderST,
                        'file_name_GT'  => $uploadData['file_name'],
                        'path_GT'       => 'uploads/Buy/GT/' . $uploadData['file_name'],
                        'create_at'     => date('Y-m-d H:i:s'),
                    );
                    $this->db->insert('tbl_upload_orderGT', $data2);
                }
            }
        } else {
            redirect('Login_admin');
        }
    }

    public function rename_filename()
    {
        $id = $this->input->post('id');
        $name_file = $this->input->post('name_file');
        $last_file = $this->input->post('last_file');
        $path = $this->input->post('path');

        if ($this->session->userdata('email_admin') != '') {
            rename($path, 'uploads/Buy/' . $name_file . '.' . $last_file);
            if ($id) {
                $update = [
                    'file_name' => $name_file . '.' . $last_file,
                    'path' => 'uploads/Buy/' . $name_file . '.' . $last_file,
                ];
                $this->db->where('id', $id);
                $success = $this->db->update('tbl_upload_order', $update);
                echo $success;
            }
        } else {
            redirect('Login_admin');
        }
    }

    public function rename_filenameGT()
    {
        $id = $this->input->post('id');
        $name_file = $this->input->post('name_file');
        $last_file = $this->input->post('last_file');
        $path = $this->input->post('path');

        if ($this->session->userdata('email_admin') != '') {
            rename($path, 'uploads/Buy/GT/' . $name_file . '.' . $last_file);
            if ($id) {
                $update = [
                    'file_name_GT' => $name_file . '.' . $last_file,
                    'path_GT' => 'uploads/Buy/GT/' . $name_file . '.' . $last_file,
                ];
                $this->db->where('id', $id);
                $success = $this->db->update('tbl_upload_orderGT', $update);
                echo $success;
            }
        } else {
            redirect('Login_admin');
        }
    }
}
