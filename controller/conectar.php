<?php

$user = 'root';
$senha = '';
$database = 'loja_db';
$host = 'localhost'; 

$mysqli = new mysqli($host, $user, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar o banco de dados: " . $mysqli->error);
}
?>