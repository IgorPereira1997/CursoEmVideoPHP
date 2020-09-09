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
			$n = array(3, 4, 5, 2);
			$n[]=7;
			print_r($n);
			$c = range(5, 20, 2);
			print_r($c);
			foreach ($c as $v) {
				echo "$v ";
			}
			$v = array(1 => "A", 3 => "B", 6 => "C", 8 => "D");
			unset($v9);
			$cad = array("nome" => "Ana", "idade" => 23, "peso" => 78.5);
			$cad["fuma"]=true;
			foreach ($cad as $campo => $valor) {
				echo "<br/>O valor de $campo é $valor";
			}
		?>
		</pre>
	</div>
</body>
</html>