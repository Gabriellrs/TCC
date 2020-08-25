<?php 

include_once("conexao.php");

if(isset($_POST['logar'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
}

mysqli_close($conexao);

?>