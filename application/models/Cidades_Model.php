<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidades_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function GetCidades($estado)
	{
		$this->db->where('uf', $estado);
		
		$query = $this->db->get('municipios');
		
		if($query->num_rows() >= 1):
			$arrayCidades = null;

			foreach ($query->result() as $key => $value)
			{
				$arrayCidades[] = $value->cidade_nome;
			}

			return $arrayCidades;

		else:
			
			echo 'Error: a sigla informada no metodo não corresponde a nenhum estado!';

		endif;
	}
}