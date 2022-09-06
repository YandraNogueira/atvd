<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Inicial</title>
</head>
<body>
<?php  

$salario = 1225.7;
$idade = 17;
$nome = "Martha";
?>
<h2>Informações organizadas abaixo</h2>
<table border=1>
<tr> <th>Funcionário</th> <th>Idade</th> <th>Remuneração</th> </tr>
<tr><td><?php echo $nome ?></td> 
	<td><?php echo $idade ?></td> 
	<td><?php echo $salario ?></td> 
</tr>
</table>

<hr>
<!-- Sintaxe curta -->
<table border=1>
<tr> <th>Funcionário</th> <th>Idade</th> <th>Remuneração</th> </tr>
<tr><td><?= $nome ?></td> 
	<td><?= $idade ?></td> 
	<td><?= $salario ?></td> 
</tr>
</table>

</body>
</html>