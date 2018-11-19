<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('css_html', 'functions'));
		$this->load->model('Option_model', 'Option');

		Verifica_Login('admin/login');
	}

	public function index()
	{
		$dados['titulo'] = 'Dashboard | Home';
		$dados['nome'] = $this->session->userdata('user_nome');
		$dados['email'] = $this->session->userdata('user_email');

		$this->load->view('admin/home', $dados);
	}
}
