<?php

if (isset($_POST["submit"])) {

    include_once("conexão.php");

// jogando as informações no banco de dados:
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $dataNasc = $_POST["data_nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $endereco = $_POST["endereco"];
    
    $result = mysqli_query($conexao, "INSERT INTO cadastrosTeste (nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$telefone', '$sexo', '$dataNasc', '$cidade', '$estado', '$endereco')");
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e banco de dados</title> 
    <style>
        body {
            background-image: linear-gradient(to right, #dd6b01, #fa1693);
        }
    </style>
</head>
<body>
    <h1>Cadastrado(a) com sucesso!</h1>
</body>
</html>