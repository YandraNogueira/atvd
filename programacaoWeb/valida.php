<?php 
	$nome = $_POST['funcionario'];
	$salario = $_POST['salario'];
	$filhos = $_POST['filhos'];

	$cursos = "";

	if (isset($_POST['eletro'])) {
		$cursos.= "Eletricista! <br>";
	}if (isset($_POST['cano'])) {
		$cursos.= "Encanador! <br>";
	}if (isset($_POST['frentista'])) {
		$cursos.= "Frentista! <br>";
	}if (isset($_POST['info'])) {
		$cursos.= "Informática!";
	}


	//if (empty($_POST['F'])) {
	//	echo "Campo não marcado!";
	//}
	//if (empty($_POST['M'])) {
	//	echo "Campo não marcado!";
	//}


    echo "<li> Funcionário: $nome </li> <li> Salário: $salario </li> <li> Filhos: $filhos </li> <li> Cursos: <br> $cursos </li>";
 ?>