<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<title>Aula 15</title>
</head>
<body>
	<div>
		<?php
			include "funcoes.php";
			// require "funcoes.php";
			# usando o _once dps de cada uma desses, ele faz com que o cois seja requerido só uma vez
			echo "<h1>Testando novas funcoes </h1>";
			ola();
			mostra_valor(4);
			echo "<h2>Finalizando o Programa...</h2>";
		?>
	</div>
</body>
</html>