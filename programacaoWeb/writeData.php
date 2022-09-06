<?php 
extract($_POST); // Transforma automaticamente campos name em variáveis

echo $aluno."<br>";
echo $nota;

$dado = $aluno."\r\n".$nota."\r\n";

$refFile = fopen("dados.txt", "a+");

fwrite($refFile,$dado);

fclose($refFile);

echo"<a href='formWriteFile.php'> <br> Cadastrar Novamente <a/>";
?>