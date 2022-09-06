<style type="text/css">
	body{
		background-color: black;
	}
	li{
		color: white;
		font-size: large ;
		text-decoration: none;
		list-style: none;
	}
	h2{
		text-align: center;
		font-size: 30px;
		color: white;
	}
</style>
<?php
echo "<h2> Registrar informações </h2>";

$filhosPessoa = $_GET['filhos'];
$bonusPessoa = $_GET['bonus'];

echo "<li> $filhosPessoa </li> <li> $bonusPessoa </li>";

?>