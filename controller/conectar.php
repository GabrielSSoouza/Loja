<?php
$host = "localhost";
$db = "fmmkayoa_allinstruments";
$user = "fmmkayoa_allinstruments";
$pass = "allinstruments";

$mysqli = new mysqli($host,$user,$pass,$db);
if ($mysqli->connect_errno) {
    die("Falha ao conectar no banco");
}
?>