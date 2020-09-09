<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<title>Aula 10</title>
</head>
<body>
	<div>
		<?php
		 switch ($op=isset($_GET["op"])?$_GET["op"]:NULL) {
		 	case "Segunda-Feira":
		 	case "Terça-Feira":
		 	case "Quarta-Feira":
		 	case "Quinta-Feira":
		 	case "Sexta-Feira":
		 		echo "O dia é <span class='foco'>$op</span> e <span class='foco'>tem escola</span>.";
		 		break;
		 	case "Sábado":
		 	case "Domingo":
		 		echo "O dia é <span class='foco'>$op</span> e <span class='foco'>não tem escola</span>.";
		 		break;
		 }
		?>
		<br/><br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>