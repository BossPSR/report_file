<?php defined('BASEPATH') or exit('No direct script access allowed');

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
$route['Home']                  = 'front-end/Home_ctr';
$route['check_c_feed']          = 'front-end/Home_ctr/check_c_feed';
$route['change']                = 'front-end/Home_ctr/change';
$route['main']                  = 'front-end/Main_ctr';
$route['mainbuysell']           = 'front-end/Main_ctr/mainbuysell';
$route['update_session']        = 'front-end/Login_ctr/update_session';

$route['loginme']               = 'front-end/Login_ctr/loginMe';
$route['Logout']                = 'front-end/Login_ctr/logout';
$route['forget_password']       = 'front-end/Register_ctr/forget_password';
$route['forget_reset']           = 'front-end/Register_ctr/forget_sendemail';
$route['forget_resetTeam']      = 'front-end/Register_ctr/forget_sendemailTeam';
$route['forget_step1']          = 'front-end/Register_ctr/forgot_passwordProcess';
$route['forget_step2']          = 'front-end/Register_ctr/sendEmail';
$route['forget_step3']          = 'front-end/Register_ctr/reset_passwordProcess';

$route['forget_step3Team']      = 'front-end/Register_ctr/reset_passwordProcessTeam';
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
$route['my-feedback']           = 'front-end/My_feedback_ctr/my_feedback';
$route['my-order-feedback']     = 'front-end/My_feedback_ctr/my_order_feedback';
$route['my-order-feedAuto']     = 'front-end/My_feedback_ctr/order_auto_feedback';
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
$route['buy_uploadGT']          = 'front-end/Buy_ctr/fileUpload_buyGT';
$route['buy_downloadmain']      = 'front-end/Buy_ctr/order_download';
$route['withdraw_cash']         = 'front-end/My_withdraw_ctr/withdraw_cash';

$route['thank_for_buy']         = 'front-end/Buy_ctr/thank_for_buy';
$route['store']                 = 'front-end/Store_ctr';
$route['store_upload']          = 'front-end/Store_ctr/fileUpload_store';
$route['my_deposit_paypal']     = 'front-end/My_deposit_ctr/my_deposit_paypal';

$route['order']                 = 'front-end/Order_ctr';
$route['order_auto']            = 'front-end/Buy_ctr/order_auto';
$route['order_auto_sell']       = 'front-end/Buy_ctr/order_auto_sell';

$route['payment_email']         = 'front-end/Store_ctr/payment_email';
$route['payment_email_success'] = 'front-end/Store_ctr/payment_email_success';
$route['userNotify']            = 'front-end/My_user_ctr/userNotify';
$route['read_userNotify']       = 'front-end/My_user_ctr/read_userNotify';
$route['read_teamNotify']       = 'front-end/My_user_ctr/read_teamNotify';
$route['My-stock-Item']         = 'front-end/My_stock_ctr/my_stock_item';
$route['My-stock']              = 'front-end/My_stock_ctr/my_stock';
$route['order_isconfirm']       = 'front-end/My_stock_ctr/order_isconfirm';
$route['My-task']               = 'front-end/My_stock_ctr/my_task';
$route['My-task-withdraw']      = 'front-end/My_stock_ctr/my_task_withdraw';
$route['My-stock-item-add']     = 'front-end/My_stock_ctr/my_stock_item_add';
$route['My-delivery']           = 'front-end/Delivery_ctr';
$route['delivery_file']           = 'front-end/Delivery_ctr/delivery_file';
$route['My-profile_team']       = 'front-end/My_team_ctr/my_profile_team';
$route['My-profile-team-update']       = 'front-end/My_team_ctr/my_profile_team_update';
$route['My-profile-update']     = 'front-end/My_user_ctr/profile_user_update';
$route['My-profile_team_edit']  = 'front-end/My_team_ctr/profile_team_edit';
$route['order_approverd']       = 'front-end/Order_ctr/order_approved';
$route['order_not_approved']       = 'front-end/Order_ctr/order_not_approved';
$route['Not_approved']          = 'front-end/My_feedback_ctr/order_auto_feedback_notApp';
$route['oder-morefile-upload']  = 'front-end/Order_ctr/order_uploadmorefile';
$route['show-pdf']              = 'front-end/My_stock_ctr/show_pdf';
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
$route['store_section']                       = 'back-end/Store_ctr/store_section';
$route['check_com']                           = 'back-end/Store_ctr/check_com';
$route['Section']                             = 'back-end/Section_ctr';
$route['upload_team']                         = 'back-end/Customer_order_ctr/upload_team';
$route['Stock']                               = 'back-end/Stock_ctr';
$route['orverall']                            = 'back-end/Customer_order_ctr/orverall';
$route['my_stock_admin']                      = 'back-end/Stock_ctr/my_stock_admin';
$route['Add_my_stock_admin']                  = 'back-end/Stock_ctr/add_my_stock_admin';
$route['fileUpload_buy_admin']                = 'back-end/Stock_ctr/fileUpload_buy_admin';
$route['ready_refresh']                       = 'back-end/Customer_order_ctr/ready_refresh';
$route['Add_bookmake']                        = 'back-end/Book_ctr';
$route['fileUpload_store_book']               = 'back-end/Book_ctr/fileUpload_store_book';
$route['Complete']                            = 'back-end/Complete_ctr';
$route['add_to_upload_main_search_not_approved']    = 'back-end/Approved_ctr/add_to_upload_main_search_not_approved';
$route['sendEmail_delivery']                 = 'back-end/Complete_ctr/sendEmail_delivery';
$route['book_complete_add_com']                 = 'back-end/Complete_ctr/book_complete_add_com';
$route['Add_feedback']                       = 'back-end/Complete_ctr/add_feedback';
$route['fileUpload_feedback']                 = 'back-end/Complete_ctr/fileUpload_feedback';
$route['back_poster']                        = 'back-end/Poster_ctr';
$route['Poster_add']                        = 'back-end/Poster_ctr/poster_add';
$route['Poster_add_com']                     = 'back-end/Poster_ctr/poster_add_com';
$route['delete_poster']                     = 'back-end/Poster_ctr/delete_poster';
$route['poster_Edit']                     = 'back-end/Poster_ctr/poster_edit';
$route['Poster_Edit_com']                     = 'back-end/Poster_ctr/poster_edit_com';
$route['back_vdo']                          = 'back-end/Vdo_ctr';
$route['vdo_add_com']                          = 'back-end/Vdo_ctr/vdo_add_com';
$route['vdo_edit_com']                          = 'back-end/Vdo_ctr/vdo_edit_com';
$route['delete_vdo']                          = 'back-end/Vdo_ctr/delete_vdo';
$route['Bookmark_notpay']                          = 'back-end/Book_ctr/bookmark_notpay';
$route['Delivery']                          = 'back-end/delivery_ctr';
$route['upload_delivery']                          = 'back-end/delivery_ctr/upload_delivery';
$route['sendEmail_delivery_pay']               = 'back-end/Book_ctr/sendEmail_delivery_pay';
$route['sendEmail_delivery_complete']               = 'back-end/Complete_ctr/sendEmail_delivery_complete';
$route['Feedback']                           = 'back-end/Feedback_ctr';
$route['Feedback_team']                           = 'back-end/Feedback_ctr/feedback_team';
$route['Status_Feedback']                           = 'back-end/Feedback_ctr/status_Feedback';
$route['More_File']                           = 'back-end/More_file_ctr';
$route['More_File_team']                           = 'back-end/More_file_ctr/more_file_team';
$route['T3_online']                           = 'back-end/Team_ctr/T3';
$route['status_team_t3']                           = 'back-end/Team_ctr/status_team_t3';
$route['fileUpload_team_email']                       = 'back-end/Team_ctr/fileUpload_team_email';
$route['bookmark_notpay_edit']                       = 'back-end/Book_ctr/bookmark_notpay_edit';
$route['NotificationBan']                       = 'back-end/Team_ctr/NotificationBan';
$route['feedback_ajax']                     = 'back-end/Complete_ctr/order_auto_feedback';
$route['upload_team_book']                       = 'back-end/Book_ctr/upload_team_book';
$route['order_auto_feedback_team']                       = 'back-end/Feedback_ctr/order_auto_feedback_team';
$route['fileUpload_feedback_team']                       = 'back-end/Feedback_ctr/fileUpload_feedback_team';
$route['Deduct_Money']                          = 'back-end/Feedback_ctr/Deduct_Money';
$route['realtime_data']                          = 'back-end/Home_ctr/realtime_data';
$route['withdraw_realtime']                          = 'back-end/Withdraw_ctr/withdraw_realtime';
$route['withdraw_realtime_data']                          = 'back-end/Withdraw_ctr/withdraw_realtime_data';
$route['withdraw_status_team']                          = 'back-end/Withdraw_ctr/withdraw_status_team';
$route['realtime_data1']                          = 'back-end/Home_ctr/realtime_data1';
$route['realtime_data2']                          = 'back-end/Home_ctr/realtime_data2';
$route['realtime_data3']                          = 'back-end/Home_ctr/realtime_data3';
$route['check_dm']                                 = 'back-end/Store_ctr/check_dm';
$route['status_more_file_team']                       = 'back-end/More_file_ctr/status_more_file_team';
$route['Position']                                = 'back-end/Position_ctr';
$route['position_Add']                                = 'back-end/Position_ctr/position_Add';
$route['position_edit']                                = 'back-end/Position_ctr/position_edit';
$route['delete_Position']                                = 'back-end/Position_ctr/delete_position';

// $route['pay']                                 = 'back-end/Store_ctr/pay';
