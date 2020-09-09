<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<title>Aula 09</title>
</head>
<body>
	<div>
		<?php
		if (!$_GET["ano"]) {
			echo "Ano não informado";
		}else{
			$ano = $_GET["ano"];
			$idade = date("Y")-$ano;
			echo "Você nasceu em $ano e tem $idade anos!<br/>";
			if($idade<16)
				echo "Você não pode votar nem dirigir!";
			else if($idade<18)
				echo "Você pode votar, mas não pode dirigir!";
			else if($idade<70)
				echo "Você deve votar e pode dirigir!";
			else
				echo "Voce pode votar e pode dirigir!";
		}
		?>
		<a href="01exercicio.html"><br/>Voltar</a>
	</div>
</body>
</html>