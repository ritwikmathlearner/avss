<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['tests'] = 'tests/index';
$route['users/login'] = 'users/login';
$route['lessons'] = 'lessons/index';
$route['lessons/create'] = 'lessons/create';
$route['lessons/(:any)'] = 'lessons/show/$1';
$route['trainees'] = 'trainees/index';
$route['trainees/create'] = 'trainees/create';
$route['trainees/count'] = 'trainees/count';
$route['owners'] = 'owners/index';
$route['owners/create'] = 'owners/create';
$route['conditions'] = 'conditions/index';
$route['conditions/create'] = 'conditions/create';
$route['animals'] = 'animals/index';
$route['animals/create'] = 'animals/create';
$route['animals/assign'] = 'animals/assign';
$route['animals/count'] = 'animals/count';
$route['default_controller'] = 'animals/index';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
