<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<title>Aula 09</title>
	<style type="text/css">
		label{
			color: blue;
		}
	</style>
</head>
<body>
	<div>
		<?php
				$nota1 = isset($_GET["nota1"])?(float)$_GET["nota1"]:0;
				$nota2 = isset($_GET["nota2"])?(float)$_GET["nota2"]:0;
				$nota1 = (float)$_GET["nota1"];
				$nota2 = (float)$_GET["nota2"];
				$media= ($nota1 + $nota2)/2;
				echo "A média entre <span class='foco'>".number_format($nota1,2)."</span> e <span class='foco'>".number_format($nota2, 2)."</span> é: <span class='foco'>".number_format($media, 2)."</span>.";
				if($media>=7)
					echo "<br/>Situação do aluno: <span class='foco'>APROVADO!</span>";
				else if($media>=5)
					echo "<br/>Situação do aluno: <span class='foco'>RECUPERAÇÃO!</span>";
				else
					echo "<br/>Situação do aluno: <span class='foco'>REPROVADO!</span>";
		?>
		<br/><br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>