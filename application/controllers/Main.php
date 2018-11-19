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

	public function contato()
	{
		$dados['titulo'] = 'Contato | ConectaX';

		$this->load->helper('form');
		$this->load->library(array('form_validation', 'email'));
		$this->load->helper('css_html');

		// Regras de validação (function helper(form_helper))
		$this->form_validation->set_rules('nome', 'nome', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('assunto', 'assunto', 'trim');
		$this->form_validation->set_rules('mensagem', 'mensagem', 'trim|required');

		// Execução do email e validação através da library(form_validation e email)
		if($this->form_validation->run() == FALSE):
			$dados['form_error'] = alert_red(validation_errors());
		else:
			$dados_form = $this->input->post();
			$this->email->from($dados_form['email'], $dados_form['nome']);
			$this->email->to('j.vithor13@gmail.com');
			$this->email->subject($dados_form['assunto']);
			$this->email->message($dados_form['mensagem']);

			if($this->email->send()):
				$dados['form_error'] = alert_success('Sua mensagem foi enviada com sucesso!');
			else:
				$dados['form_error'] = alert_red('Erro ao enviar email, tente novemente em alguns minutos');
			endif;

		endif;

		$this->load->view('contato', $dados);
	}
}
