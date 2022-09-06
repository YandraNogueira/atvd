<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar o formulário na mesma página</title>
</head>
<body>
	<form method="post">
		Nome: <input type="text" name="nome">
		Idade: <input type="number" name="idade">
		<button type="submit" name="sub"> Validar </button>
	</form>
	<?php
	if (isset($_POST['sub'])) {
		//$nome = $_POST['nome'];
		//$idade = $_POST['idade'];

		//extract($_POST);

		//echo $nome." - ".$idade;
		//var_dump($_POST);

		$post['nome'] = "Lulu";
		$post['idade'] = "400";	
		var_dump($post);
	}
	?>
</body>
</html>