<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<title>Aula 14</title>
</head>
<body>
	<div>
		<?php
			function soma(){
				$p=func_get_args();
				$tot=func_num_args();
				$s=0;
				for($i=0;$i<$tot;$i++)
					$s+=$p[$i];
				return $s;
			}

			$r1 = soma(3,5,2);
			$r2 = soma(3,4,5,6,7,8,90);

			echo "Resultado soma 1: $r1; e resultado soma 2: $r2.";
		?>
	</div>
</body>
</html>