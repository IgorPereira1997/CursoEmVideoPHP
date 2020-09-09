<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<style type="text/css">
		h2{
			font-size: 15pt Arial;
			color: #171559;
			font-weight: bolder;	
		}
	</style>
	<title>Aula 05</title>
</head>
<body>
	<div>
		<?php
			$v1 = $_GET["x"];
			$v2 = $_GET["y"];
			echo "<h2> Valores recebidos: $v1 e $v2 </h2>";
			echo "<br/>O valor absoluto de $v2 é ".abs($v2);
			echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
			echo "<br/>A raiz de $v1 é ".sqrt($v1);
			echo "<br/>O valor de $v2 arredondado é ".round($v2);// ceil floor
			echo "<br/>A parte inteira de $v2 é ".intval($v2);
			echo "<br/>O valor de $v1 em moeda é R$".number_format($v1, 2, ",", ".");

		?>
	</div>
</body>
</html>