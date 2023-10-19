<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "curso_estoque";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

	if ($conexao) {
		echo "";
	} else {
		die("Conexão falhou: " . mysqli_connect_error());
	}
?>
