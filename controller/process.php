<?php
session_start();
require_once("conectar.php");

$usuario = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['pass'];

/*
$sql_cad = mysqli_query($mysqli, "INSERT INTO tbl_usuarios (nome, email, senha) VALUES ('$usuario', '$email', '$senha')");

if($sql_cad){
    echo "<script>
        alert('Cadastrado com sucesso!'); 
           window.location.href='cadastro.php';
       </script>";
}
else {
    echo "<script>
            alert('Falha ao cadastrar!'); 
            window.location.href='cadastro.php';
        </script>";
}*/
?>