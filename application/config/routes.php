<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

////////FRONT END ROUTES/////////
$route['default_controller'] = "welcome";
$route['participate-for-event'] = "welcome/participate";

$route['login'] = "authorization/login";
$route['register'] = "authorization/register";
$route['logout'] = "authorization/logout";


////////BACK END ROUTES/////////
$route['admin/dashboard'] = "dashboard";
$route['admin/users/all'] = 'dashboard/allUsers';
$route['admin/users/add/new'] = "dashboard/addNewUser";
$route['admin/users/edit/(:any)'] = "dashboard/addNewUser/$1";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */