<?php

	function ConnectDatabase($host, $dbname, $user, $pass)
	{
		try
		{
			$retorno['connection'] = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);

			if($retorno['connection'])
			{
				$retorno['status'] = true;
				$retorno['message'] = 'Conexão realizada com sucesso';

				return $retorno;
			}
		}
		catch(PDOException $e)
		{
			$retorno['message'] = $e->GetMessage();
			$retorno['status'] = false;

			return $retorno;
		}
	}
	