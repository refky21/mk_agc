<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['music/(:any)'] = 'Search/index/$1';
$route['detail/(:any)'] = 'Detail/index/$1';
$route['download'] = 'Download/index/$1';
$route['search'] = 'Search/cari';
$route['sitemap.xml'] = 'Sitemap/index';



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
