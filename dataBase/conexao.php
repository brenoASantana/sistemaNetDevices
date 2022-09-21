<?php
//Conexao com o banco de dados
public function(conexao){
$servename = "localhost"; //local do servidor
$username = "root"; //login de usuario do SQL
$password = "";
$database = "projeto90pts"; //nome do banco de dados

//Criando a conexao (objeto $connection recebe new mysqli(parametros))

$connection = new mysqli($servename, $username, $password, $database);

//Verificando a conexao
if ($connection->connect_error){0
	die("Falha ao conectar: ". $connection->connect_error);
	}
	echo "Conectado ao banco com sucesso!";
}

?>