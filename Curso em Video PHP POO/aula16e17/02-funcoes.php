<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<title>Aula 16</title>
</head>
<body>
	<div>
		<?php
			$v[0]=4;
			$v[1]=8;
			$v[2]=3;
			//print_r($v);
			$v2 = array(3 , 4, 5, 5, 6, 1, 2);
			print("<br/>");
			//print_r($v2);
			//var_dump($v2);
			//var_export($v2);
			//$t = "Temos aqui um texto gigante criado pelo PHP e vai mostrar o funconamento da função wordwrap";
			//$r = wordwrap($t,5, "<br/>\n", true);
			//echo $r;
			//$novo = trim();//elimina espaços do começo e do fim de uma string armazenada; variaçoes: ltrim() tira da esquerda e rtrim() tira da direita
			$t = "Curso em Vídeo";
			$vetor = explode(" ", $t); // quebra uma frase em uma string de palavras onde cada uma é um índice
			print_r($vetor);
			print_r(str_word_count($t, 1)); // contará a quantidade de palavras da frase
			str_split();//separar cada letra da frase em um índice do vetor destino
			//implode() ou join() contrário de explode
			//chr() mostra que caractere é representado pelo índice informado na função
			//ord() contrário de chr()
			//strtolower(); converte as letras maiúsculas em minúsculas
			//strtoupper(); contrário da strtolower()
			//ucfirst() colocar a primeira letra de uma string como maiúscula
			//ucwords() colocar a primeira letra de cada palavra de uma string em maiusculo
			//strrev() inverter a string mandada
			//strpos() retorna a posição de uma parte de uma string em relação à uma string principal
			//stripos() o mesmo que a strpos() mas não é sensitive case
			//substr_count() contar as repetições de uma parte mandada com parâmetro dentro de uma string maior
			//substr() Pega um pedaço determinado de uma string após informado um intervalo
			//str_pad() fazer com que uma determinada string caiba em um intervalo pré-determinado
			//str_repeat() usada pra fazer a repetição de uma determinada string
			//str_replace() trocar uma determinada parte de uma string, por outro string, numa string destino
			//str_ireplace() mesmo q str_replace() mas não sendo sensitive case

		?>
	</div>
</body>
</html>