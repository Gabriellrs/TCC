<?php 

include_once("conexao.php");

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['senha2'];

    if ($confirmarSenha != $senha){
        echo "As senhas não coincidem!";
        mysqli_close($conexao);
    }
    else{
        $sql = "INSERT INTO tbl_cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        mysqli_query($conexao, $sql);
        header('location:login.php');
    }
}

mysqli_close($conexao);

?>