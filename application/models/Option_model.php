<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Option_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Get_option($option_name)
	{
		// Consulta da tabela options do banco de dados
		// SELECT * FROM options WHERE option_name = $option_name LIMIT 1
		$this->db->where('option_name', $option_name);
		$query = $this->db->get('config_options', 1);
		
		if($query->num_rows() == 1):
			$row = $query->row();
			return $row->option_value;
		else:
			return NULL;
		endif;
	}

	public function Update_option($option_name, $option_value)
	{
		$this->db->where('option_name', $option_name);
		$query = $this->db->get('config_options', 1);
		
		if($query->num_rows() == 1):
			// Opção existe, devo atualizar
			
			$this->db->set('option_value', $option_value);
			$this->db->where('option_name', $option_name);
			$this->db->update('config_options');

			return $this->db->affected_rows();
		else:
			// Opção nao existe, devo inserir

			$dados = array('option_name' => $option_name, 'option_value' => $option_value);
			$this->db->insert('config_options', $dados);

			return $this->db->insert_id();
		endif;

	}
}