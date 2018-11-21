<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterCliente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('css_html', 'functions', 'form'));
		$this->load->library(array('form_validation', 'get_ip'));
		$this->load->model(array('Cidades_Model' => 'Cidades', 'Clientes_Model' => 'Clientes'));

	}

	public function index()
	{
		if(!$this->session->userdata('last_user')):
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
				$dados_form = $this->input->post();

				$ip_info = $this->get_ip->get_ip_info($_SERVER['REMOTE_ADDR']);

				$dados_form['ip_code'] = $ip_info['ip'];
				$dados_form['ip_city'] = $ip_info['city'];
				$dados_form['ip_state'] = $ip_info['region_name'];
				$dados_form['status'] = 'À consultar';

				$insert = $this->Clientes->InserirCliente($dados_form);

				if($insert):
					// Esta sessão serve para saber se houve um cadastro previo
					$this->session->set_userdata('last_user', TRUE);
					$this->session->set_userdata('user_nome', $dados_form['user_nome']);
					$this->session->set_userdata('user_id', $insert);

					Set_msg(alert_success('Cadastro realizado! Vamos finalizar a consulta!'));
					redirect('consulta/finalizar');
				else:
					Set_msg(alert_red('Não foi possivel cadastrar'));
				endif;
			}

			$this->load->view('consulta', $dados);
		else:
			// redirecionar
			Set_msg(alert_red('Finalize a consulta'));
			redirect('consulta/finalizar');
		endif;

		
	}

	public function Finalizar()
	{
		if($this->session->userdata('last_user')):
			$dados['titulo'] = 'Finalizar Consulta';
			$dados['cidades'] = $this->Cidades->GetCidades('MG');
			$dados['user_nome'] = $this->session->userdata('user_nome');

			$this->form_validation->set_rules('user_mae', 'nome da mae', 'trim|required');
			$this->form_validation->set_rules('user_cpf', 'CPF', 'trim|required|numeric');

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

				$update = $this->Clientes->AtualizarCliente($this->session->userdata('user_id'), $dados_form);

				if($update)
				{
					// Esta sessão serve para saber se houve cadastro
					$this->session->set_userdata('checked', TRUE);

					// Destroi a função last user para impedir que a pagina seja acessada em um cadastro previo
					$this->session->unset_userdata('last_user');
					$this->session->unset_userdata('user_id');

					redirect('consulta/success');
				}
			}

			$this->load->view('finalizar_consulta', $dados);

		else:
			Set_msg(alert_red('Faça o cadastro primeiro'));
			redirect('consulta');
		endif;
	}

	public function Success()
	{
		$dados['titulo'] = 'Sucesso!';

		if($this->session->userdata('checked') == TRUE):
			//$this->session->unset_userdata('checked');
			//$this->session->unset_userdata('user_nome');
			$this->load->view('success', $dados);
		else:
			redirect('consulta');
		endif;
	}
}
