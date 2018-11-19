<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'css_html', 'functions'));
		$this->load->library('form_validation');
		$this->load->model('option_model', 'option');
	}

	public function index()
	{
		// Extrai a consulta feita pelo Get_option do Option_model
		if($this->option->Get_option('setup_executado') == 1):
			// Setup. Mostra tela para editar dados de setup
			redirect('setup/alterar', 'refresh');
		else:
			// Setup. Mostra tela para instalar dados de setup
			redirect('setup/instalar', 'refresh');
		endif;
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

	public function instalar()
	{
		$this->load->helper('functions');

		$dados['titulo'] = 'Instalação';

		if($this->option->Get_option('setup_executado') == 1):
			redirect('setup/login', 'refresh');
		endif;

		// Regras de validação
		$this->form_validation->set_rules('login', 'login', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('nome', 'nome', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'senha', 'trim|required|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('senha2', 'repetir senha', 'trim|required|min_length[6]|max_length[12]|matches[senha]');

		// Veririca a validação
		if($this->form_validation->run() == FALSE):
			if(validation_errors()):
				Set_msg(alert_red(validation_errors()));
			endif;
		else:
			$dados_form = $this->input->post();
			$this->option->update_option('user_login', $dados_form['login']);
			$this->option->update_option('user_nome', $dados_form['nome']);
			$this->option->update_option('user_email', $dados_form['email']);
			$this->option->update_option('user_pass', password_hash($dados_form['senha'], PASSWORD_DEFAULT));

			$inserido = $this->option->update_option('setup_executado', 1);

			if($inserido)
			{
				Set_msg(alert_success('Instalação feita com sucesso!'));
				redirect('setup/login', 'refresh');
			}

		endif;

		// Carrega a view do Painel ADM
		$this->load->view('admin/setup', $dados);
	}

	public function alterar()
	{
		// Retorna uma mensagem definida pela funcão Set_msg
		Verifica_login();

		// Carrega View
		$dados['titulo'] = 'Configuração do Sistema';

		$dados['login'] = $this->option->Get_option('user_login');
		$dados['email'] = $this->option->Get_option('user_email');
		$dados['nome'] = $this->option->Get_option('user_nome');

		$this->form_validation->set_rules('login', 'login', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'senha', 'trim|min_length[6]|max_length[12]');		

		if(isset($_POST['senha']) AND $_POST['senha'] != '')
		{
			$this->form_validation->set_rules('senha2', 'repetir senha', 'trim|required|min_length[6]|max_length[12]|matches[senha]');
		}

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
			$this->option->update_option('user_login', $dados_form['login']);
			$this->option->update_option('user_email', $dados_form['email']);

			if(isset($dados_form['senha']) && $dados_form['senha2'] != '')
			{
				$this->option->update_option('user_pass', password_hash($dados_form['senha'], PASSWORD_DEFAULT));
			}

			set_msg(alert_success('Dados alterado com sucesso!'));
		}

		$this->load->view('admin/config', $dados);
	}

	public function logout()
	{
		$this->session->unset_userdata('logged');
		$this->session->unset_userdata('user_login');
		$this->session->unset_userdata('user_email');

		set_msg(alert_success('Logout realizado'));
		redirect('login');
		
	}
}
