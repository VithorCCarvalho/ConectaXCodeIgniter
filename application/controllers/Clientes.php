<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Clientes_Model', 'Clientes');
	}
	public function index()
	{
		$dados_tabela['dados_tabela'] = $this->Clientes->GetClientes();
	}
}
