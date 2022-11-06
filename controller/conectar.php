<?php
$host = "localhost";
$db = "loja_db";
$user = "root";
$pass = "";

$mysqli = new mysqli($host,$user,$pass,$db);
if ($mysqli->connect_errno) {
    die("Falha ao conectar no banco");
}
?>