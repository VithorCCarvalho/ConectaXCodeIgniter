<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('set_msg')):
	// Seta uma mensagem via session para ser lida posteriosmente
	function Set_msg($msg = NULL)
	{
		$ci = & get_instance();
		$ci->session->set_userdata('aviso', $msg);
	}
endif;

if(!function_exists('get_msg')):
	// Retorna uma mensagem definida pela função set_msg
	function Get_msg($destroy = TRUE)
	{
		$ci = & get_instance();
		$retorno  = $ci->session->userdata('aviso');
		if($destroy) $ci->session->unset_userdata('aviso');

		return $retorno;
	}
endif;

if(!function_exists('Verifica_login')):
	// Verifica se o usuario esta logado
	function Verifica_login($redirect = 'admin/login')
	{
		$ci = & get_instance();

		if($ci->session->userdata('logged') != TRUE):
			Set_msg(alert_red('Acesso restrito! Faça login para continuar'));
			redirect($redirect, 'refresh');
		endif;
	}
endif;