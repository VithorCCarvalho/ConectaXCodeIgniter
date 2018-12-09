<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Internet extends CI_Controller
{
	public function index()
	{
		$dados['titulo'] = 'Internet | Oi Total Play';
		$this->load->view('internet', $dados);
	}
}