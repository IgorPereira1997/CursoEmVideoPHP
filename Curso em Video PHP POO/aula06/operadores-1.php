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
	<title>Aula 06 ex1</title>
</head>
<body>
	<div>
	<?php
		$preco = $_GET["p"];
		echo "O preço do produto é R$ $preco";
		$preco *=1.1;
		echo "<br/>O preço do produto atualizado com acréscimo de 10%<br/>é R$".number_format($preco, 2, ",", "."); 
	?>
	</div>
</body>
</html>