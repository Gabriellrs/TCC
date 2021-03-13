<?php 
 
    session_start();

$host = "localhost";
$user = "id16319065_root";
$password = "Ma_ma_c0roger";
$database = "id16319065_bda_tc";
$conexao = mysqli_connect($host, $user, $password, $database);

if (!$conexao){
    echo "Falha na conexão com o Banco de Dados!";
}

?> 