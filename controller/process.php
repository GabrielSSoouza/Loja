<?php
session_start();


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['pass'];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$conn = new mysqli('localhost', 'fmmkayoa_allinstruments', 'allinstruments', 'fmmkayoa_allinstruments');
$conn-> query($sql);

$conn->close();

echo 'cadastrado com sucesso!';
?>