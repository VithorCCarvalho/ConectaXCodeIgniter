<?php

	$pastadestino = '../application/config/';

	copy('config.inc.php', $pastadestino . 'config.inc.php');
	copy('database.inc.php', $pastadestino. 'database.inc.php');

?>

<h1>Instalaçao feita com sucesso</h1>
<h2>Arquivos direcionados ao diretório <?php echo $pastadestino; ?></h2>