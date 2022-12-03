<?php
session_start();


$nome = $_POST['nome'];
$email = $_POST['Email'];
$senha = $_POST['pass'];

$sql = "insert into usuarios (nome, email, senha) values ('$nome', '$email', '$senha')";

$conn = new mysqli("localhost", "fmmkayoa_allinstruments", "allinstruments", "fmmkayoa_allinstruments");

$conn-> query($sql);

$conn->close();

echo 'sucesso';
?>