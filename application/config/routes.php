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

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['certificate']='services/certificate/show';
$route['certificate/create']='services/certificate/create';

$route['report']='services/report/show';
$route['report/create']='services/report/create';

$route['importExport']='services/ImportExport/show';
$route['importExport/create']='services/ImportExport/create';

$route['income']='services/income/show';
$route['income/create']='services/income/create';

$route['pancard']='services/pancard/show';
$route['pancard/create']='services/pancard/create';

$route['balancesheet']='services/balancesheet/show';
$route['balancesheet/create']='services/balancesheet/create';

$route['ewayBill']='services/EwayBill/show';
$route['ewayBill/create']='services/EwayBill/create';

$route['retailorDistributor']='services/RetailorDistributor/show';
$route['retailorDistributor/create']='services/RetailorDistributor/create';

$route['udyagAadhar']='services/UdyogAadhar/show';
$route['udyagAadhar/create']='services/UdyogAadhar/create';

$route['shopAct']='services/ShopAct/show';
$route['shopAct/create']='services/ShopAct/create';

$route['userMaster']='services/UserMaster/show';
$route['userMaster/create']='services/UserMaster/create';

$route['retailor']='services/Retailor/show';
$route['retailor/create']='services/Retailor/create';

$route['login']='services/User/login';
$route['act'] = 'residential_address/act';
//new service routes
//pf apis
$route['createpf'] = 'pf_controller/add_pf_form';
$route['updatepf'] = 'pf_controller/update_pf_form';
$route['load_pf'] = 'pf_controller/get_all_pf';
//pf ui
$route['pf_withdrawal/create'] = 'services/PfwithdrawlService/create';
$route['pf_withdrawal/show'] = 'services/PfwithdrawlService/show';
$route['pf_withdrawal/update'] = 'services/PfwithdrawlService/update';

//digital sign apis
$route['createdigital'] = 'digital_controller/add_digital_form';
$route['updatedigital'] = 'digital_controller/update_digital_form';
$route['load_digital'] = 'digital_controller/get_all_digital';
//digital sign ui
$route['digital_sign/cerate'] = 'services/DigitalSignService/create';
$route['digital_sign/show'] = 'services/DigitalSignService/show';
$route['digital_sign/update'] = 'services/DigitalSignService/update';

$route['createudyog'] = 'udyog_controller/add_udyog_form';
//Get APIS
$route['getroles'] = 'role/getAllRoles';
$route['activities'] = 'get/getactivities';
$route['distributors'] = 'get/getdistributors';
$route['retailors'] = 'get/getretailors';
$route['employees'] = 'get/getemployees';

//demo api
$route['session'] = 'services/demo/sessiondata';
//user creation
$route['createuser'] = 'user/createUser';
$route['loadbalance'] = 'walletController/loadBalance';
