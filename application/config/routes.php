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
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
*/

$route['default_controller']   = 'welcome';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;

//CA Certificate ui
$route['ca_certificate']        = 'services/CACertificate/show';
$route['ca_certificate/create'] = 'services/CACertificate/create';
$route['ca_certificate/update'] = 'services/CACertificate/update';

$route['report']        = 'services/report/show';
$route['report/create'] = 'services/report/create';

$route['importExport']        = 'services/ImportExport/show';
$route['importExport/create'] = 'services/ImportExport/create';

//income ui
$route['income']        = 'services/income/show';
$route['income/create'] = 'services/income/create';
$route['income/update'] = 'services/income/update';


$route['balancesheet']        = 'services/balancesheet/show';
$route['balancesheet/create'] = 'services/balancesheet/create';

//eway bill ui
$route['ewayBill']        = 'services/EwayBill/show';
$route['ewayBill/create'] = 'services/EwayBill/create';
$route['ewayBill/update'] = 'services/EwayBill/update';

$route['retailorDistributor']        = 'services/RetailorDistributor/show';
$route['retailorDistributor/create'] = 'services/RetailorDistributor/create';

$route['udyagAadhar']        = 'services/UdyogAadhar/show';
$route['udyagAadhar/create'] = 'services/UdyogAadhar/create';
$route['udyagAadhar/update'] = 'services/UdyogAadhar/update';

$route['retailor']        = 'services/Retailor/show';
$route['retailor/create'] = 'services/Retailor/create';

$route['login']        = 'services/User/login';
$route['forgotpassword']        = 'services/User/forgotpassword';
$route['resetpassword']        = 'services/User/resetpassword';
$route['act']          = 'residential_address/act';
//new service routes
//pf apis
$route['createpf']     = 'PF_controller/add_pf_form';
$route['updatepf']     = 'PF_controller/update_pf_form';
$route['load_pf']      = 'PF_controller/get_all_pf';
$route['updatestatus'] = 'PF_controller/update_status';

//pf ui
$route['pf_withdrawal/create'] = 'services/PfwithdrawlService/create';
$route['pf_withdrawal/show']   = 'services/PfwithdrawlService/show';
$route['pf_withdrawal/update'] = 'services/PfwithdrawlService/update';

//digital sign apis
$route['createdigital']       = 'Digital_controller/add_digital_form';
$route['updatedigital']       = 'Digital_controller/update_digital_form';
$route['load_digital']        = 'Digital_controller/get_all_digital';
$route['digital_status']      = 'Digital_controller/update_status';
//digital sign ui
$route['digital_sign/cerate'] = 'services/DigitalSignService/create';
$route['digital_sign/show']   = 'services/DigitalSignService/show';
$route['digital_sign/update'] = 'services/DigitalSignService/update';

//Get APIS
$route['getroles']     = 'role/getAllRoles';
$route['activities']   = 'get/getactivities';
$route['distributors'] = 'get/getdistributors';
$route['retailors']    = 'get/getretailors';
$route['employees']    = 'get/getemployees';

//demo api
$route['session']         = 'services/demo/sessiondata';
$route['wallet']          = 'services/WalletService/create';
//user creation
$route['createuser']      = 'user/createUser';
$route['getusers']        = 'user/getUsersList';
$route['updateprofile']   = 'User/updateuser';
$route['updatepassword']   = 'User/update_password';
$route['activateuser']    = "User/activateuser";//pass userid
//user ui
$route['user/create']     = 'services/AccessControlService/create';
$route['users/show']      = 'services/AccessControlService/show';
$route['user/update']     = 'services/AccessControlService/update';
$route['changepassword']     = 'services/UserMaster/changepassword';
//wallet apis
$route['loadbalance']     = 'walletController/loadBalance';
$route['loadtransaction'] = 'walletController/load_transactions';
$route['checkbalance']    = 'walletController/checkbalance';
$route['userbalances']    = 'walletController/alluserbalance';
$route['updatewallet']    = 'walletController/update_balance';

//pan services apis
$route['createpan'] = 'pan_controller/add_pan_form';
$route['updatepan'] = 'pan_controller/update_pan_form';
$route['loadpan']   = 'pan_controller/get_all_pan';
$route['panstatus']   = 'pan_controller/update_status';
$route['getpandocs']   = 'pan_controller/getpandocs';
$route['getpanremarkdocs']   = 'pan_controller/get_update_docs';

//pancard ui
$route['pancard']        = 'services/pancard/show';
$route['pancard/create'] = 'services/pancard/create';
$route['pancard/update'] = 'services/pancard/update';


//docs apis
$route['getpfdocs']      = 'PF_controller/getpfdocs'; //pass pf id
$route['getremarksdocs']      = 'PF_controller/get_update_docs'; //pass Service name PF,and rowid of primary like pfid
$route['getdigitaldocs'] = 'Digital_controller/getdigitaldocs'; //pass did

//service charges apis
$route['loadcharges']   = 'Service_charges/getservicecharges';
$route['addcharges']    = 'Service_charges/addServiceCharges';
$route['removecharges'] = 'Service_charges/removeservicecharges';
$route['updatecharges'] = 'Service_charges/updateservicecharges';

//service charges ui
$route['servicecharge']   = 'services/ServiceCharges/show';
$route['servicecharge/create']   = 'services/ServiceCharges/create';
$route['servicecharge/update']   = 'services/ServiceCharges/update';

//shop act apis
$route['getshopdocs']      = 'ShopAct/getshopactdocs'; //pass sh id
$route['loadshops']        = 'ShopAct/get_all_shopact';//get all shop acts data pass roleid and userid
$route['createshop']       =    'ShopAct/add_shop_form';
$route['update_shop_status'] = 'ShopAct/update_status';
$route['get_shopact_remarks'] = 'ShopAct/get_update_docs';

//shop act ui
$route['shopAct']        = 'services/ShopAct/show';
$route['shopAct/create'] = 'services/ShopAct/create';
$route['shopAct/update'] = 'services/ShopAct/update';

//udyog apis

$route['createudyog']  = 'UdyogAdhar/add_udyog_form';
$route['loadudyog']  = 'udyog_controller/get_all_udyog';
$route['getudyogdocs'] = 'udyog_controller/get_udyog_docs';
$route['updateudyog_status']= 'udyog_controller/update_status';
$route['get_udyog_remarks'] = 'udyog_controller/get_update_docs';

//income apis 
$route['createincome']  = 'IncomeTax/add_income_form';
$route['loadincome']  = 'IncomeTax/get_all_incomes';
$route['getincomedocs'] = 'IncomeTax/get_income_docs';
$route['update_income_status']= 'IncomeTax/update_status';
$route['get_income_remarks'] = 'IncomeTax/get_update_docs';

//GST ui
$route['gst/create']  = 'services/GstRegistration/create';
$route['gst']  = 'services/GstRegistration/show';
$route['gst/info']  = 'services/GstRegistration/update';

//GST apis
$route['creategst']  = 'GST_controller/add_gst_form';
$route['loadgst']  = 'GST_controller/get_all_gst';
$route['getgstdocs'] = 'GST_controller/getgst_docs';
$route['update_gst_status']= 'GST_controller/update_status';
$route['get_gst_remarks'] = 'GST_controller/get_update_docs';

//GST file UI
$route['loadgstfile'] = 'services/GST_file/show';
$route['creategstfile'] = 'services/GST_file/create';
$route['editgstfile'] = 'services/GST_file/update';

$route['get_gst_return_remarks'] = 'GST_file_controller/get_update_docs';
$route['updategstfile'] = 'GST_file_controller/update_status';
$route['getfilereturns'] = 'GST_file_controller/get_gst_files';
$route['getfilereturns_docs'] = 'GST_file_controller/get_gst_docs';

//GST annual return
$route['loadgstannual'] = 'services/GSTAnnual/show';
$route['editgstannual'] = 'services/GSTAnnual/update';
$route['creategstannual'] = 'services/GSTAnnual/create';

$route['updategstannual'] = 'GST_annual_controller/update_status';
$route['get_gst_annual'] = 'GST_annual_controller/get_gst_annuals';
$route['getannualreturns_docs'] = 'GST_annual_controller/get_gst_docs';

//Certificates API
$route['loadcertificates'] = 'CA_certificate/get_all_certificates';
$route['add_cert'] = 'CA_certificate/add_cert_form';
$route['getcert_docs'] = 'CA_certificate/get_certificate_docs';
$route['update_cert'] = 'CA_certificate/update_status';
$route['remark_docs'] = 'CA_certificate/get_update_docs';

//Company Reg API
$route['loadcompany'] = 'Company_reg/get_all_company';
$route['add_company'] = 'Company_reg/add_company_form';
$route['getcompany_docs'] = 'Company_reg/get_company_docs';
$route['update_company'] = 'Company_reg/update_status';
$route['company_docs'] = 'Company_reg/get_update_docs';

//TaxInvoice API
$route['loadTaxinvoice'] = 'TaxInvoice/get_all_invoice';
$route['add_invoice'] = 'TaxInvoice/add_invoice_form';
$route['update_invoice'] = 'TaxInvoice/update_status';
$route['updated_inv_docs'] = 'TaxInvoice/get_update_docs';


//food license ui
$route['foodlicense'] = 'services/FoodLicense/show';
$route['foodlicense/create'] = 'services/FoodLicense/create';
$route['foodlicense/update'] = 'services/FoodLicense/update';



//tax invoice ui
$route['taxInvoice'] = 'services/TaxInvoice/show';
$route['taxInvoice/create'] = 'services/TaxInvoice/create';
$route['taxInvoice/update'] = 'services/TaxInvoice/update';



//Partnership Deed ui
$route['partnershipDeed'] = 'services/PartnershipDeed/show';
$route['partnershipDeed/create'] = 'services/PartnershipDeed/create';
$route['partnershipDeed/update'] = 'services/PartnershipDeed/update';

//E-way bill apis
$route['loadBills'] = 'Eway_bill/get_all_bills';
$route['add_bill'] = 'Eway_bill/add_bill_form';
$route['update_bill'] = 'Eway_bill/update_status';
$route['updated_bill_docs'] = 'Eway_bill/get_update_docs';