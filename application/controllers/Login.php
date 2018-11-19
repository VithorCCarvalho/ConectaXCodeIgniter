<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'css_html', 'functions'));
		$this->load->library('form_validation');
		$this->load->model('option_model', 'option');
	}

	public function login()
	{
		if($this->option->Get_option('setup_executado') != 1)
		{
			redirect('setup/instalar', 'refresh');
		}

		$dados['titulo'] = 'Login do Sistema';

		$this->form_validation->set_rules('login', 'login', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('senha', 'senha', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			if(validation_errors())
			{
				Set_msg(alert_red(validation_errors()));
			}
		}
		else
		{
			$dados_form = $this->input->post();

			if($this->option->Get_option('user_login') == $dados_form['login'])
			{
				// Usuário existe
				if(password_verify($dados_form['senha'], $this->option->Get_option('user_pass')))
				{
					$this->session->set_userdata('logged', TRUE);
					$this->session->set_userdata('user_login', $dados_form['login']);
					$this->session->set_userdata('user_nome', $this->option->Get_option('user_nome'));
					$this->session->set_userdata('user_email', $this->option->Get_option('user_email'));

					// Faz Redirect para a Home do Admin
					// ---------------------------------
					redirect('admin');
				}
				else
				{
					Set_msg(alert_red('Senha incorreta'));
				}
			}
			else 
			{
				// Usuario nao existe
				Set_msg(alert_red('Usuario não existe'));
			}
		}

		$this->load->view('admin/login', $dados);
	}

	public function logout()
	{
		$this->session->unset_userdata('logged');
		$this->session->unset_userdata('user_login');
		$this->session->unset_userdata('user_email');

		set_msg(alert_success('Logout realizado'));
		redirect('admin/login');
	}
}
