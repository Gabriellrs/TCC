<?php 
include_once("conexao.php");

// session_start();

if(isset($_POST['logar'])):
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $sql =  mysqli_query($conexao,"SELECT * FROM tbl_cadastro WHERE `email` = '$email' AND `senha` = '$senha' ");
        if(mysqli_num_rows($sql) > 0){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;  
            header('location:inicio.php');
        exit;
    }
    else{
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        header('location:erro.php');
    exit;
    }
endif;
mysqli_close($conexao);
?>