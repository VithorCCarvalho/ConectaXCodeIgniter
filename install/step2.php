<?php 
	require "config.inc.php";

	$c = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
	$sql = file_get_contents( "conectax.sql");
	
	$c->query($sql);

	header("Location: step3.php");