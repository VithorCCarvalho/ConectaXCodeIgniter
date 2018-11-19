<?php

		include 'controller/CadastroConsulta.php';

		$insert = new CadastroConsulta();

		

		if (!empty($_POST))
		{
			$dados = $insert->setDados($_POST['nome'], $_POST['telefone'], $_POST['bairro'], $_POST['bairro'], $_POST['rua'], $_POST['cidade']);

			$insert->insert();

		}

?><?php
	$title = 'Consulta';

	include "head-in.php";

	$plano = @$_GET['plano'];

	if($plano == 'oiplaybasico'):
		$plano = 'Oi Total Play Básico';
	elseif($plano == 'oiplayintermediario'):
		$plano = 'Oi Total Play Intermediario';
	elseif($plano == 'oiplaytop'):
		$plano = 'Oi Total Play Top';
	elseif($plano == 'oiresidencialbasico'):
		$plano = 'Oi Residencial Basico';
	elseif($plano == 'oiresidencialintermediario'):
		$plano = 'Oi Residencial Intermediario';
	elseif($plano == 'oiresidencialtop'):
		$plano = 'Oi Residencial Top';
	elseif($plano == 'oiconectadolight'):
		$plano = 'Oi Conectado Light';
	endif;

	$nome = @$_GET['nome'];
	$telefone = @$_GET['whatsapp'];
	$cidade = @$_GET['cidade'];

?>
<body>
	<link rel="stylesheet" type="text/css" href="css/produto.css">

	<div class="contentconsulta">
		<div class="boxleftconsulta">
			<div class="boxleftformulario">
				<h2><?php echo $_POST['nome']?></h2>
				<h3>Logo entraremos em contato</h3>
			</div>
		</div>
		

		<div class="boxrightconsulta">
			<div class="box">
				<h2><?php echo $plano; ?></h2>
				<ul class="list-group">
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Internet 15MB</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Coleção OI</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Telefone Fixo</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> OI WIFI Fora de Casa</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Roteador Grátis</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>



	