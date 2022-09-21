<?php

include('dataBase/conexao.php');

$nome = $_POST['$nome'];
$email = $_POST['$email'];
$senha = $_POST['$senha'];

if (isset($_POST['desativado'])) {
	$ativo = 'N';
}else{
	$ativo = 'S';
}

$sql = "INSERT INTO acesso_usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if($conn->query($sql) == TRUE){
	echo"<script language='javascript' type='text/javascript'>
          alert('Cliente cadastrado com sucesso!');window.location.
          href='../index.php'</script>";
}else{
	echo "Erro: ". $sql . " - ".$conn->error;
}

?>