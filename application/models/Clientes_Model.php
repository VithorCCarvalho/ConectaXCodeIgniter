<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_Model extends CI_Model
{
	protected $tabela_clientes = 'register_clientes';

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set("America/Sao_Paulo");
	}

	public function InserirCliente($dados)
	{
		$dados['data'] = date('Y-m-d H:i:m');

		$this->db->insert($this->tabela_clientes, $dados);

		return $this->db->insert_id();
	}
	public function AtualizarCliente($id, $dados)
	{
		$this->db->where('id', $id);
		$query = $this->db->get($this->tabela_clientes, 1);
		
		if($query->num_rows() == 1):
			// Existe, devo atualizar
			
			$this->db->set('user_mae', $dados['user_mae']);
			$this->db->set('user_cpf', $dados['user_cpf']);
			$this->db->where('id', $id);
			$this->db->update($this->tabela_clientes);

			$update = $this->db->affected_rows();

			return $update;
		endif;
	}
	
	public function UpdateCliente($id, $dados)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('register_clientes', 1);
		
		if($query->num_rows() == 1):
			foreach ($dados as $key => $value)
			{
				$this->db->set($key, $value);
			}
			
			$this->db->where('id', $id);
			$this->db->update('register_clientes');

			return $this->db->affected_rows();
		endif;
	}

	public function GetClientes()
	{	
		$dados_tabela = $this->db->order_by('data', 'DESC');
		$dados_tabela = $this->db->get($this->tabela_clientes);
		$dados_tabela = $dados_tabela->result();

		return $dados_tabela;
	}

	public function GetRows($id = null, $valor = null)
	{
		if($id && $valor):
			$this->db->where($id, $valor);
			$query = $this->db->get('register_clientes');

			return $query->num_rows();
		else:
			$query = $this->db->get('register_clientes');

			return $query->db->num_rows();
		endif;
	}
}