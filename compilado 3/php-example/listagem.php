<?php

include("conexão.php");

$consulta = "SELECT * FROM cadastrosTeste";

$result = $conexao -> query($consulta);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem do Banco da Dados</title>
    <style>
        body {
            background: linear-gradient(to right, #dd6b01, #fa1693);
        }
        #título {
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
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
        }
    </style>
</head>
<body>
    <h1 id="título">Listagem do Data Base cadastro - Tabela cadastrosteste</h1>
    <br>
    <table id="tabela" align="center">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Data de Nascimento</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Endereço</th>
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
                <td><?php echo $user_data ["email"]; ?></td>
                <td><?php echo $user_data ["telefone"]; ?></td>
                <td><?php echo $user_data ["sexo"]; ?></td>
                <td><?php echo date("d/m/Y", strtotime ($user_data ["data_nasc"])); ?></td>
                <td><?php echo $user_data ["cidade"]; ?></td>
                <td><?php echo $user_data ["estado"]; ?></td>
                <td><?php echo $user_data ["endereco"]; ?></td>
            </tr>
            <?php 
                    } 
            ?>
        </tbody>
    </table>
</body>
</html>