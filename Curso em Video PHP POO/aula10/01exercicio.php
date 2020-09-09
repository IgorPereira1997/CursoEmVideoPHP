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
			$num=isset($_GET["num"])?(int)$_GET["num"]:0;
			switch ($op=isset($_GET["op"])?$_GET["op"]:NULL) {
				case "dobrar":
					$res = $num * 2;
					echo "O dobro de <span class='foco'>$num</span> é <span class='foco'>$res</span>."; 
					break;
				case "cubo":
					$res = pow($num, 3);
					echo "O cubo de <span class='foco'>$num</span> é <span class='foco'>".number_format($res, 2)."</span>.";
					break;
				case "raiz quadrada":
					$res = sqrt($num);
					echo "A raiz quadrada de <span class='foco'>$num</span> é <span class='foco'>".number_format($res, 2)."</span>.";
					break;
				default:
					echo "$op<br/>";
					echo "Nenhuma opção foi marcada.";
					break;
			}
		?>
		<br/><br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>