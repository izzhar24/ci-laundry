<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['change_password'] = 'auth/change_password';
$route['reset_password'] = 'auth/reset_password';
$route['users'] = 'auth/users';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;