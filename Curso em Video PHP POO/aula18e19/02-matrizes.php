<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<title>Aula 18</title>
</head>
<body>
	<div>
		<pre>
		<?php
			$n = array(array(2,3), array(3,4), array(9, 5));
			$v = array("A", "J", "M", "X", "K");
			print_r($v);
			echo "<br/>";
			var_dump($v);
			echo "<br/>";
			echo count($v);
			array_push($v, 7);// gerenciar ultimos elementos do vetor
			array_pop($v);
			array_unshift($v,7); //colocar elemento no inicio do vetor
			array_shift($v); //retirar elemento do inicio do vetor
			sort($v); // ordernar vetor crescente
			rsort($v); //ordenar vetor decrescente
			asort($v); //ordena vetor crescente levando junto o índice q o mesmo tem
			arsort($v); //ordena vetor decrescente levando junto o índice q o mesmo tem
			ksort($v); // ordenar vetor pelo índice
			krsort($v); //ordenar vetor pelo índice
		?>
		</pre>
	</div>
</body>
</html>