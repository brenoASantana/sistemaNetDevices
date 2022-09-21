<?php
//Conexao com o banco de dados
$servename = "localhost"; //local do servidor
$username = "root"; //login de usuario do SQL
$password = "";
$database = "netdevices_database"; //nome do banco de dados

//Criando a conexao (objeto $connection recebe new mysqli(parametros))

$connection = new mysqli($servename, $username, $password, $database);

//Verificando a conexao
if ($connection->connect_error){
	die("Falha ao conectar: ". $connection->connect_error);
	}
	echo "Conectado ao banco com sucesso!";
}

?>