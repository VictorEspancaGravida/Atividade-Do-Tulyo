<?php


$dbHost = 'localhost'; 
$dbUsername = 'seu_usuario'; 
$dbPassword = 'sua_senha';  
$dbName = 'nome_do_banco';  


$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}


mysqli_set_charset($conexao, "utf8");

?>