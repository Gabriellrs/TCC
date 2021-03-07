<?php 
 
    session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "bda_tc";
$conexao = mysqli_connect($host, $user, $password, $database);

if (!$conexao){
    echo "Falha na conexão com o Banco de Dados!";
}

?> 