<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Calculadora PHP</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<!-- Calculadora PHP. Autor: Raoni Cunha
			Calcula o reultado das quatro operacoes fundamentais entre dois numeros fornecidos pelo usuario.-->
		<h2>Resultado</h2><br />
		<?php 
			$operacao = $_POST['operacao'];
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];

			switch ($operacao) {
				case 'soma':
					$total = $num1 + $num2;
					break;
				case 'subtracao':
					$total = $num1 - $num2;
					break;
				case 'multiplicacao':
					$total = $num1 * $num2;
					break;
				case 'divisao':
					$total = $num1 / $num2;
					break;
			}
			echo "Resultado da operacao = " . $total;
	 	?>	
	</body>
</html>
