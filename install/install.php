<?php

	if(file_exists('config.inc.php') && file_exists('database.inc.php'))
	{
		require "database.inc.php";

		$c = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
		$sql = file_get_contents( "sql/install.sql");
		
		$c->query($sql);

		header("Location: success.php");
	}
	else {
		echo '<h1>Realize a instalação</h1>';
	}
