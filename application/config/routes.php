<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['solucoes/para-voce'] = 'solucoes/para_voce';
$route['solucoes/para-empresa'] = 'solucoes/para_empresa';
$route['teste-de-velocidade'] = 'testevelocidade';
$route['solucoes/link-dedicado'] = 'solucoes/link_dedicado';
$route['planos-detalhes'] = 'planosdetalhes';
$route['assine-agora'] = 'assineagora';
$route['assine-agora/resultado'] = 'assineagora/resultado';
$route['blog/p/(:num)'] = 'blog';
$route['blog/p'] = 'blog';
$route['admin'] = 'admin/login';
$route['politica-de-privacidade'] = 'politicaprivacidade';
$route['termo-de-uso'] = 'termodeuso';
$route['visualiza'] = 'visualiza';