<?php


include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

   
    $sql = "INSERT INTO usuario (nome, senha, email, telefone, sexo, data_nascimento, cidade, estado, endereco) 
            VALUES ('$nome', '$senha', '$email', '$telefone', '$sexo', '$data_nascimento', '$cidade', '$estado', '$endereco')";


    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
}

$conexao->close();

?>
