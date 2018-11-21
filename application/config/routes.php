<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	$route['default_controller'] = 'Main';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

	//Rotas personlizadas
	$route['internet'] = 'Main/internet';
	$route['tv'] = 'Main/tv';
	$route['contato'] = 'Front/Contato';

	$route['login/logout'] = 'Back/Login/Logout';
	$route['admin'] = 'Back/Admin';
	$route['admin/login'] = 'Back/Login/login';
	$route['setup/alterar'] = 'Back/Setup/alterar';

	$route['consulta'] = 'Front/RegisterCliente';
	$route['consulta/finalizar'] = 'Front/RegisterCliente/Finalizar';