<?php

	$json = file_get_contents('estados_cidades.json');
	$json = json_decode($json);

	//$json['0']->sigla;

	foreach ($json as $key => $value) {
		var_dump($value['11']);
	}