<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'front-end/Home_ctr';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['main']                  = 'front-end/Main_ctr';
$route['mainbuysell']           = 'front-end/Main_ctr/mainbuysell';
$route['update_session']        = 'front-end/Login_ctr/update_session';

$route['loginme']               = 'front-end/Login_ctr/loginMe';
$route['Logout']                = 'front-end/Login_ctr/logout';

$route['my-rewards']            = 'front-end/Rewards_ctr/my_rewards';
$route['accept_status']         = 'front-end/My_user_ctr/accept_status';
$route['my-profile']            = 'front-end/My_user_ctr/my_profile';
$route['my-profile_edit']       = 'front-end/My_user_ctr/profile_edit';
$route['my-wallet']             = 'front-end/My_wallet_ctr/my_wallet';
$route['my-deposit']            = 'front-end/My_deposit_ctr/my_deposit';
$route['my-withdraw']           = 'front-end/My_withdraw_ctr/my_withdraw';
$route['my-slip']               = 'front-end/My_slip_ctr/my_slip';
$route['my-folder']             = 'front-end/My_upload_ctr/my_upload_folder';
$route['my-upload']             = 'front-end/My_upload_ctr/my_upload';
$route['my-upload-delete']      = 'front-end/My_upload_ctr/delete_file';
$route['my-upload-edit']        = 'front-end/My_upload_ctr/my_upload_edit';


$route['my-rewards']            = 'front-end/Rewards_ctr/my_rewards';
$route['my-rejected']           = 'front-end/Rejected_ctr/my_rejected';
$route['my-reject']             = 'front-end/Rejected_ctr/my_reject';
$route['my-selling']            = 'front-end/Selling_ctr/my_selling';
$route['register']              = 'front-end/Register_ctr';
$route['register-team']         = 'front-end/Register_ctr/register_team';
$route['register-team-success'] = 'front-end/Register_ctr/register_team_success';
$route['register_success']      = 'front-end/Register_ctr/register_success';
$route['home']                  = 'front-end/Home_ctr';
$route['package']               = 'front-end/Package_ctr';
$route['upload']                = 'front-end/Upload_ctr';
$route['upload_search']         = 'front-end/Upload_ctr/My_upload_search';
$route['upload_step2']          = 'front-end/Upload_ctr/My_upload_step2';
$route['upload-edit']           = 'front-end/Upload_ctr/upload_edit';
$route['upload_edit_complete']  = 'front-end/Upload_ctr/upload_edit_complete';
$route['add_item']              = 'front-end/Upload_ctr/add_item';
$route['edit_item']             = 'front-end/Upload_ctr/edit_item';
$route['search']                = 'front-end/Search_ctr';
$route['unlocks']               = 'front-end/Unlocks_ctr';
$route['unlocks_search']        = 'front-end/Unlocks_ctr/unlocks_search';
$route['unlock_document']       = 'front-end/Unlocks_ctr/unlock_document';
$route['reject_document']       = 'front-end/Unlocks_ctr/reject_document';
$route['downloadDocument']      = 'front-end/Unlocks_ctr/downloadDocument';
$route['after-unlocks']         = 'front-end/After_Unlocks_ctr';
$route['Bookmarked']            = 'front-end/Bookmarked_ctr';
$route['Recently-Accessed']     = 'front-end/Recently_ctr';
$route['fileUpload']            = 'front-end/Upload_ctr/fileUpload';
$route['fileUploadfull']        = 'front-end/Upload_ctr/fileUploadfull';
$route['fileUploadEdit']        = 'front-end/Upload_ctr/fileUploadEdit';
$route['fileUploadEditfull']    = 'front-end/Upload_ctr/fileUploadEditfull';
$route['paypal_success']        = 'front-end/Paypal_ctr/success';
$route['get_search']            = 'front-end/Search_ctr/get_search';
$route['buy']                   = 'front-end/Buy_ctr';
$route['buy_upload']            = 'front-end/Buy_ctr/fileUpload_buy';
$route['withdraw_cash']         = 'front-end/My_withdraw_ctr/withdraw_cash';

$route['thank_for_buy']         = 'front-end/Buy_ctr/thank_for_buy';
$route['store']                 = 'front-end/Store_ctr';
$route['store_upload']          = 'front-end/Store_ctr/fileUpload_store';
$route['my_deposit_paypal']     = 'front-end/My_deposit_ctr/my_deposit_paypal';

$route['order']                 = 'front-end/Order_ctr';
$route['order_auto']            = 'front-end/Buy_ctr/order_auto';

$route['payment_email']         = 'front-end/Store_ctr/payment_email';
$route['payment_email_success'] = 'front-end/Store_ctr/payment_email_success';
$route['userNotify']            = 'front-end/My_user_ctr/userNotify';
$route['read_userNotify']       = 'front-end/My_user_ctr/read_userNotify';

$route['My-stock']              = 'front-end/My_stock_ctr/my_stock';
$route['order_isconfirm']       = 'front-end/My_stock_ctr/order_isconfirm';
$route['My-task']               = 'front-end/My_stock_ctr/my_task';
$route['My-delivery']           = 'front-end/Delivery_ctr';
// /------------------------------------- back-end  ---------------------

$route['back_dashboard']                      = 'back-end/Home_ctr';
$route['back_team']                           = 'back-end/Team_ctr';
$route['back_admin']                          = 'back-end/Admin_ctr';
$route['back_admin_add']                      = 'back-end/Admin_ctr/add_admin';
$route['back_admin_edit']                     = 'back-end/Admin_ctr/edit_admin';
$route['back_admin_edit_save']                = 'back-end/Admin_ctr/edit_admin_save';
$route['back_admin_Admin_add_com']            = 'back-end/Admin_ctr/Admin_add_com';
$route['back_admin_status_Admin']             = 'back-end/Admin_ctr/status_Admin';
$route['back_admin_delete_admin']             = 'back-end/Admin_ctr/delete_admin';
$route['status_team']                         = 'back-end/Team_ctr/status_team';
$route['back_user']                           = 'back-end/User_ctr';
$route['back_store']                          = 'back-end/Store_ctr';
$route['back_store_a']                        = 'back-end/Store_ctr/store_a';
$route['back_store_b']                        = 'back-end/Store_ctr/store_b';
$route['back_store_c']                        = 'back-end/Store_ctr/store_c';
$route['back_store_add_com']                  = 'back-end/Store_ctr/store_add_com';
$route['delete_store']                        = 'back-end/Store_ctr/delete_store';
$route['back_store_buy']                      = 'back-end/Store_ctr/storeForbuy';
$route['check_order_add_com']                 = 'back-end/Store_ctr/check_order_add_com';
$route['check_NotSatisfired_order_add_com']   = 'back-end/Store_ctr/check_NotSatisfired_order_add_com';
$route['back_store_checkForsell']             = 'back-end/Store_ctr/checkForsell';
$route['back_store_check_store_add_com']      = 'back-end/Store_ctr/check_store_add_com';
$route['back_store_reject']                   = 'back-end/Store_ctr/reject';
$route['back_store_reject_for_buy']           = 'back-end/Store_ctr/reject_for_buy';
$route['reject_order_add_com']                = 'back-end/Store_ctr/reject_order_add_com';
$route['back_store_status_reject']            = 'back-end/Store_ctr/status_reject';
$route['Login_admin']                         = 'back-end/Login_ctr/admin_loginMe';
$route['Logout_admin']                        = 'back-end/Login_ctr/admin_logout';
$route['backend']                             = 'back-end/Login_ctr';
$route['back_withdraw']                       = 'back-end/withdraw_ctr';
$route['back_withdraw_update']                = 'back-end/withdraw_ctr/withdraw_status';
$route['back_upload_main_search']             = 'back-end/Store_ctr/upload_main_search';
$route['add_to_upload_main_search']           = 'back-end/Store_ctr/add_to_upload_main_search';
$route['pdf']                                 = 'front-end/pdf';
$route['approved']                            = 'back-end/Approved_ctr';
$route['not-approved']                        = 'back-end/Approved_ctr/not_approved';
$route['Satisfied']                           = 'back-end/Customer_order_ctr';
$route['Not_Satisfied']                       = 'back-end/Customer_order_ctr/not_satisfied';
$route['Bookmark']                            = 'back-end/Customer_order_ctr/Bookmark';
<<<<<<< HEAD
// $route['pay']                                 = 'back-end/Store_ctr/pay';
=======
$route['store_section']                       = 'back-end/Store_ctr/store_section';
$route['check_com']                           = 'back-end/Store_ctr/check_com';
$route['Section']                             = 'back-end/Section_ctr';
$route['upload_team']                             = 'back-end/Customer_order_ctr/upload_team';
// $route['pay']                                 = 'back-end/Store_ctr/pay';
>>>>>>> master
