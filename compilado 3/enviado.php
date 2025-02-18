<?php

if (isset($_POST["submit"])) {

    include_once("conexão.php");
    
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $conhecimento = $_POST["s-n"];
    $util = $_POST["y-n"];
    $nota = $_POST["fb"];
    $comentario = $_POST["opinião"];
    
    $result = mysqli_query($conexao, "INSERT INTO feedbacks (nome, idade, sexo, conhecimento, util, nota, comentario) VALUES ('$nome', '$idade', '$sexo', '$conhecimento', '$util', '$nota', '$comentario')");
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Desenvolvimento Web</title>
<link rel="stylesheet" href="style4.css">
<style>
    /* ESTILIZAÇÃO GERAL */
    * {
        margin: 0;
            padding: 0;
            font-family: sans-serif;
            color: white;
        }
        body{
            background: #1a192c;
        }
        a {
            text-decoration: none;
        }
        h2 {
            font-size: 35px;
            letter-spacing: 2px;
            padding: 80px 0 50px 0;
        }
        p {
            font-size: 30px;
            margin-bottom: 20px;
            color: #545369;
        }
        div {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50%;
        text-align: center;
        }

        /* ESTILIZAÇÃO DA CAPA */
        #header {
            width: 100%;
            background-color: #232238;
            margin-bottom: 50px;
        }
        #menu {
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1% 10%;
        }
        #menuText {
            font-size: 30px;
            font-weight: bold;
            letter-spacing: 2px;
            padding: 0 0 0 0;
        }
        #list {
            display: flex;
            list-style: none;
        }
        #list a {
            display: block;
            padding: 10px;
            margin-left: 50px;
        }
        a:hover,
        a#active {
            background: white;
            color: #232238;
            border-radius: 20px;
        }
    </style>
</head>
<body>
<!--------------- CAPA --------------->
    <section id="header">
        <header id="menu">
            <h2 id="menuText">Menu</h2>
            <nav>
                <ul id="list">
                    <li><a href="index.html">Intro</a></li>
                    <li><a href="front.html">Front End</a></li>
                    <li><a href="back.html">Back End</a></li>
                    <li><a href="feedback.html" id="active">Feedback</a></li>
                </ul>
            </nav>
        </header>
    </section>
<!--------------- MENSAGEM --------------->
    <div>
        <h2>Feedback Enviado com Sucesso!</h2>
        <p>Sua opinião é muito importante para nós, de verdade, OBRIGADA!</p>
    </div>
</body>
</html>