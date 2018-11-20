<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

	public function index()
	{
		$dados['titulo'] = 'Home';
		$this->load->model('Cidades_Model', 'Cidades');

		$dados['cidades'] = $this->Cidades->GetCidades('MG');

		$this->load->view('home', $dados);
	}

	public function internet()
	{
		$dados['titulo'] = 'Internet | Oi Total Play';
		$this->load->view('internet', $dados);
	}

	public function tv()
	{
		$dados['titulo'] = 'Internet | Oi Total Play';
		$this->load->view('tv', $dados);
	}
}
