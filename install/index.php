<?php 
	require "functions.php";

	$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	if($_POST):

		$c = ConnectDatabase($_POST['host'], $_POST['dbname'], $_POST['user'], $_POST['pass']);

		if($c['status']):
			// Cria o arquivo 'database.inc.php';
			$databaseinc =
			'<?php
				$host = \'' . $_POST['host'] . '\';
				$dbname = \'' . $_POST['dbname'] . '\';
				$user = \'' . $_POST['user'] . '\';
				$pass = \''. $_POST['pass'] . '\';
			';

			file_put_contents('database.inc.php', $databaseinc);

			// Cria o arquivo config.inc.php
			$configinc = 
			'<?php
				$urlbase = \'' . $_POST['url'] . '\';
			';

			file_put_contents('config.inc.php', $configinc);
		endif;
	endif;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Instalar - Primeiro passo</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="col-sm-4"></div>
	<div class="col-sm-4 container">
		<h1>Configuração do banco de dados</h1>
		<p><?php echo @$c['message']; ?></p>
		<hr>
		<form method="post" action="">
			<?php if(!@$c['connection'] AND @$c['connection'] != true): ?>
			<input type="text" class="form-control" name="host" placeholder="Digite o nome do host" value="<?php echo @$_POST['host'] ?>">
			<input type="text" class="form-control" name="dbname" placeholder="Digite o nome do banco de dados" value="<?php echo @$_POST['dbname'] ?>">
			<input type="text" class="form-control" name="user" placeholder="Digite o nome de Usuário do banco de dados" value="<?php echo @$_POST['user'] ?>">
			<input type="text" class="form-control" name="pass" placeholder="Digite a senha do banco de dados" value="">
			<input type="text" class="form-control" name="url" placeholder="Digite a url do site" value="<?php echo substr($url, 0, -9) ?>">
			<input type="submit" class="btn btn-success" value="Testar">
		</form>

		<?php else: echo '<a href="install.php" class="btn btn-success">Instalar</a>'; endif;?>
	</div>
</body>
</html>