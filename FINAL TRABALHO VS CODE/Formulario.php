<?php

include_once('config.php');

if(isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha']; 
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

   
    $query = "INSERT INTO usuario (nome, senha, email, telefone, sexo, data_nascimento, cidade, estado, endereco) 
              VALUES ('$nome', '$senha', '$email', '$telefone', '$sexo', '$data_nascimento', '$cidade', '$estado', '$endereco')";

    if(mysqli_query($conexao, $query)) {
        echo "<p>Dados cadastrados com sucesso!</p>";
    } else {
        echo "<p>Erro ao cadastrar os dados: " . mysqli_error($conexao) . "</p>";
    }
}


    echo "Conexão Efetuada Com Sucesso";
}

if(isset($_POST['submit']))
{
   // print_r('nome: ' .$_POST['nome']);
   // print_r('<br>');
   // print_r('email: ' .$_POST['email']);
   // print_r('<br>');
   // print_r('telefone: ' .$_POST['telefone']);
   // print_r('<br>');
   // print_r('sexo: ' .$_POST['sexo']);
   // print_r('<br>');
   // print_r('data_nascimento: ' .$_POST['data_nascimento']);
   // print_r('<br>');
   // print_r('cidade: ' .$_POST['cidade']);
   // print_r('<br>');
   // print_r('estado: ' .$_POST['estado']);
   // print_r('<br>');
   // print_r('endereco: ' .$_POST['endereco']);

    include_once('config.php')

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco)
    VALUES ('$nome' ,'$email' ,'$telefone' ,'$sexo' ,'$data_nascimento' ,'$cidade' ,'$estado' ,'$endereco')");

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | GN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear linear-gradient(to right, rgb(10, 113, 231), rgb(17, 54, 71));
            background-color: dodgerblue;
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.4);
            padding: 15px;
            border-radius: 17px;
            width: 25%;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 3px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 9px;
        }

        .inputbox {
            position: relative;
        }

        .inputuser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 20px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelinput {
            position: absolute;
            top: 0px;
            left: 5px;
            pointer-events: none;
            transition: 0px;
        }

        .inputuser:focus~.labelInput,
        .inputuser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento {
            border: none;
            padding: 10px;
            border-radius: 11px;
            outline: none;
            font-size: 17px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(20, 147, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 17px;
            cursor: pointer;
            border-radius: 11px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(57, 20, 220), rgb(27, 17, 71));
        }
    </style>
</head>

<body>
    <a href="home.php"> Voltar </a>
    <div class="box">
        <form action="Formulario.php" method= "POST">
        <fieldset>
            <legend> Formulario do Cliente </legend>
            <div class="inputbox">
                <input type="text" name="nome" id="nome" class="inputuser" required>
                <label for="nome" class="labelinput"> Nome Completo </label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="password" name="senha" id="senha" class="inputuser" required>
                <label for="senha" class="labelinput"> Senha </label>
                <br><br>
            <div class="inputbox">
                <input type="text" name="email" id="email" class="inputuser" required>
                <label for="email" class="labelinput"> Email </label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="tel" name="telefone" id="telefone" class="inputuser" required>
                <label for="telefone" class="labelinput"> Telefone </label>
            </div>
            <br><br>
            <p>Sexo</p>
            <input type="radio" id="feminino" name="sexo" value="feminino" required>
            <label for="feminino"> Feminino </label>
            <br>
            <input type="radio" id="masculino" name="sexo" value="masculino" required>
            <label for="masculino"> Masculino </label>
            <br>
            <input type="radio" id="outro" name="sexo" value="outro" required>
            <label for="outro"> Outro </label>
            <br><br>
            <div class="inputbox">
                <label for="data_nascimento"> Ano De Nascimento: </b> </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputuser" required>
                    <label for="cidade" class="labelinput"> Cidade </label>
                    <br><br>
                    <div class="inputbox">
                        <input type="text" name="estado" id="estado" class="inputuser" required>
                        <label for="estado" class="labelinput"> Estado </label>
                        <br><br>
                        <div class="inputbox">
                            <input type="text" name="endereco" id="endereco" class="inputuser" required>
                            <label for="endereco" class="labelinput"> Endereço </label>
                            <br><br>
                        </div>
                        <input type="submit" name="submit" id="submit">
                        <br>
                    </div>
        </fieldset>
    </div>
</body>

</html>


    
