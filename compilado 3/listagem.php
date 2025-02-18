<?php

include("conexão.php");

$consulta = "SELECT * FROM feedbacks";

$result = $conexao -> query($consulta);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem de Feedbacks</title>
    <style>
        body {
            background-color: #1a192c;
            font-family: sans-serif;
            color: white;
        }
        h1 {
            text-align: center;
        }
        #tabela {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
        th {
            background: rgb(228, 227, 227);
            color: black;
        }
        tr {
            background-color: #232238;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Listagem</h1>
    <br>
    <table id="tabela" align="center">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Conhecimento Prévio?</th>
                <th>Conteúdo Útil?</th>
                <th>Nota</th>
                <th>Comentário</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    while ($user_data = $result-> fetch_array( )) {
                ?>
            <tr>
                <td><?php echo $user_data ["id"]; ?></td>
                <td><?php echo $user_data ["nome"]; ?></td>
                <td><?php echo $user_data ["idade"]; ?></td>
                <td><?php echo $user_data ["sexo"]; ?></td>
                <td><?php echo $user_data ["conhecimento"]; ?></td>
                <td><?php echo $user_data ["util"]; ?></td>
                <td><?php echo $user_data ["nota"]; ?></td>
                <td><?php echo $user_data ["comentario"]; ?></td>
            </tr>
            <?php 
                    } 
            ?>
        </tbody>
    </table>
</body>
</html>