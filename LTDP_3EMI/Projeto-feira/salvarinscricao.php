<?php
	echo var_dump($_GET) . "GET <br>";
	echo var_dump($_POST) . "POST <br>";
	echo "posicao nome" . $_POST['nome'];
	
	
	/*configurco de enderecmento do bnco de ddos*/
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	
	/*configurco de cesso o bnco de ddos*/
	$nome_banco = "bd_centro_interesse";
	
	$conexao = mysql_connect($servidor, $usurio, $senha);
	
	$banco = mysql_select_db($nome_banco, $conexao);
	
?>