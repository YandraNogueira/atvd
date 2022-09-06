<?php 
$dados = file("dados.txt");
//var_dump($dados); ver info do vetor/array

//echo $dados[7];

$size = count($dados);

for ($i=0; $i < $size ; $i++) { 
	echo $dados[$i]."<br>";
}


 ?>