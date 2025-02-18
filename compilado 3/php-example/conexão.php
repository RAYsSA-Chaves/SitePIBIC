<?php

$hostname = "localhost";
$usuario = "root";     // por padrão, é root
$senha = "";     //não temos senha no MySQL
$bd = "cadastro";

$conexao = new mysqli($hostname, $usuario, $senha, $bd);

?>