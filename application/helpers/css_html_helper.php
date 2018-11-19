<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	function alert_red($string)
	{
		if($string != '')
		{
			$alert = '<div class="alert alert-danger" role="alert">'. $string . '</div>';

			return $alert;
		} 
		else
		{
			return null;
		}
	}
	function alert_success($string)
	{
		$alert = '<div class="alert alert-success" role="alert">'. $string . '</div>';

		return $alert;
	}