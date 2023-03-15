<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP test</title>
	</head>
	<body>
		<h1>Exemplo PHP</h1>
		<?php
			$nome = "Gabriel Felipe";
			echo "Meu nome é $nome";
			
			date_default_timezone_set("America/Sao_Paulo");
			
			echo " Hoje é dia " . date("d/m/y");
			echo " e a hora é " .date("G:i:s");
		?>
		<p>Vamos nos livrar da maldição</p>
	</body>
</html>
