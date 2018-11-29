<?php 
	require "functions.php";

	if($_POST):
		$c = ConnectDatabase($_POST['host'], $_POST['dbname'], $_POST['user'], $_POST['pass']);

		if($c['status']):
			$texto =
			'
				$host = \'' . $_POST['host'] . '\';
				$dbname = \'' . $_POST['dbname'] . '\';
				$user = \'' . $_POST['user'] . '\';
				$pass = \''. $_POST['pass'] . '\';
			';

			file_put_contents('config.inc.php', $texto);
			file_put_contents('../application/config/config.inc.php', $texto);

		endif;
	endif;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Instalar - Primeiro passo</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
			<input type="text" class="form-control" name="pass" placeholder="Digite a senha do banco de dados" value="<?php echo @$_POST['pass'] ?>">
			<input type="submit" class="btn btn-success" value="Testar">
		</form>

		<?php else: echo '<a href="step2.php" class="btn btn-success">Instalar</a>'; endif;?>
	</div>
</body>
</html>