<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('css_html', 'functions', 'form'));
		$this->load->library('form_validation');
		$this->load->model(array('Cidades_Model' => 'Cidades', 'RegisterClientes_Model' => 'Register'));
	}

	public function index()
	{
		$dados['titulo'] = 'Consulta';
		$dados['cidades'] = $this->Cidades->GetCidades('MG');

		$this->form_validation->set_rules('user_nome', 'nome', 'trim|required');
		$this->form_validation->set_rules('user_telefone', 'telefone', 'trim|required|numeric');
		$this->form_validation->set_rules('user_bairro', 'bairro', 'trim|required');
		$this->form_validation->set_rules('user_rua', 'rua', 'trim|required');
		$this->form_validation->set_rules('user_numero', 'numero', 'trim|required');
		$this->form_validation->set_rules('user_nascimento', 'nascimento', 'trim|required');
		$this->form_validation->set_rules('user_cidade', 'cidade', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			if(validation_errors())
			{
				Set_msg(alert_red(validation_errors()));
			}
		}
		else
		{
			echo 'ok';
		}

		$this->load->view('consulta', $dados);
	}

}
