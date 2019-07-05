<!DOCTYPE html>
<html>
<head>
	<title>Leitura</title>
</head>
<body>
	<pre>
		<?php 

			require_once "Livro.php";
			require_once "Pessoa.php";

			$pessoa = new Pessoa ("Pedro", "18", "M");
			$livro = new Livro("PHP basico", "Pedro Guilherme", 400, $pessoa);
			print_r($livro);

		 ?>

	</pre>
</body>
</html>