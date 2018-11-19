<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CidadesEstado extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function GetCidades($estado)
	{
		$this->db->where('UF', $estado);
		$query = $this->db->get('cidade');
		
		if($query->num_rows() == 1):
			$row = $query->row();
			return $row->option_value;
		else:
			return NULL;
		endif;
	}
}