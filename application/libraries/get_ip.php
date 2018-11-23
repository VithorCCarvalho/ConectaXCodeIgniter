<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_ip
{
	private $ip;

	public function get_ip_info($ip = '')
	{	
		if($ip == '')
		{
			$this->ip = $_SERVER['REMOTE_ADDR'];
		}
		
		$this->ip = $ip;
		
		$access_key = '891568b2aa3d63cd7830ee80825bec3d';

		// Initialize CURL:
		$ch = curl_init('http://api.ipstack.com/'.$this->ip.'?access_key='.$access_key.'');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Store the data:
		$json = curl_exec($ch);
		curl_close($ch);

		// Decode JSON response:
		$info = $api_result = json_decode($json, true);

		return $info;
	}
}