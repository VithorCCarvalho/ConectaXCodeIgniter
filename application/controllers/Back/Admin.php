<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('css_html', 'functions', 'form'));
		$this->load->model('Option_model', 'Option');

		Verifica_Login();
	}

	public function index()
	{
		$dados['titulo'] = 'Dashboard | Home';
		$dados['admin_nome'] = $this->session->userdata('admin_nome');
		$dados['admin_email'] = $this->session->userdata('admin_email');

		// Carrega a tabela dos clientes cadastrados
		$this->load->model('Clientes_Model', 'Clientes');
		$dados['cadastros_recentes'] = $this->Clientes->GetRows('status', 'À consultar');
		$dados['dados_tabela'] = $this->Clientes->GetClientes();

		// Edita os dados oferecidos pela tabela dos clientes
		if($this->input->post())
		{
			$dados_form = $this->input->post();
			$this->Clientes->UpdateCliente($dados_form['id'], $dados_form);

			Set_msg(alert_success('Editado com sucesso!'));
			redirect('admin');
		}
	
		$this->load->view('admin/home', $dados);
	}
}
