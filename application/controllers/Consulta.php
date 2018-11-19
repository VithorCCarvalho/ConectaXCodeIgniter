<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('css_html', 'functions', 'form'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$dados['titulo'] = 'Consulta';

		$this->load->view('consulta', $dados);
	}

}
