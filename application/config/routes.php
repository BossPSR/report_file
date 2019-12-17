<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

$route['loginme']              = 'front-end/Login_ctr/loginMe';
$route['Logout']              = 'front-end/Login_ctr/logout';

$route['my-rewards']         = 'front-end/Rewards_ctr/my_rewards';
$route['my-profile']         = 'front-end/My_user_ctr/my_profile';
$route['my-wallet']          = 'front-end/My_wallet_ctr/my_wallet';
$route['my-deposit']         = 'front-end/My_deposit_ctr/my_deposit';
$route['my-withdraw']        = 'front-end/My_withdraw_ctr/my_withdraw';
$route['my-slip']            = 'front-end/My_slip_ctr/my_slip';
$route['my-rewards']         = 'front-end/Rewards_ctr/my_rewards';
$route['register']           = 'front-end/Register_ctr';
$route['register_success']   = 'front-end/Register_ctr/register_success';
$route['home']               = 'front-end/Home_ctr';
$route['package']            = 'front-end/Package_ctr';
$route['upload']             = 'front-end/Upload_ctr';
$route['upload_search']      = 'front-end/Upload_ctr/My_upload_search';
$route['upload_step2']       = 'front-end/Upload_ctr/My_upload_step2';
$route['search']             = 'front-end/Search_ctr';
$route['unlocks']            = 'front-end/Unlocks_ctr';
$route['after-unlocks']      = 'front-end/After_Unlocks_ctr';
$route['My_Upload']          = 'front-end/Upload_ctr/My_upload';
$route['Bookmarked']         = 'front-end/Bookmarked_ctr';
$route['Recently-Accessed']  = 'front-end/Recently_ctr';
$route['fileUpload']         = 'front-end/Upload_ctr/fileUpload';
$route['fileUploadfull']     = 'front-end/Upload_ctr/fileUploadfull';
$route['paypal_success']     = 'front-end/Paypal_ctr/success';

// /------------------------------------- back-end  ---------------------

$route['backend']             = 'back-end/Home_ctr';








