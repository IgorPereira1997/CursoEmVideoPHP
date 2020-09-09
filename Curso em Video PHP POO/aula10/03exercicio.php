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
			switch ($estado=isset($_GET["op"])?$_GET["op"]:"XX") {
				case "PR":
				case "RS":
				case "SC":
					echo "Você está na <span class='foco'>Região Sul</span>!";
					break;
				case "SP":
				case "RJ":
				case "MG":
				case "ES":
					echo "Você está na <span class='foco'>Região Sudeste</span>!";
					break;
				case "BA":
				case "PE":
				case "RN":
				case "SE":
				case "PB":
				case "AL":
				case "CE":
				case "PI":
				case "MA":
					echo "Você está na <span class='foco'>Região Nordeste</span>!";
					break;
				case "MT":
				case "DF":
				case "MS":
				case "GO":
					echo "Você está na <span class='foco'>Região Centro-Oeste</span>!";
					break;
				case "PA:":
				case "AM":
				case "RR":
				case "RO":
				case "AC":
				case "TO":
				case "AP":
					echo "Você está na <span class='foco'>Região Norte</span>!";
					break;
			}
		?>
		<br/><br/><a href="javascript:history.go(-1)" class="botao">Volver</a>
	</div>
</body>
</html>