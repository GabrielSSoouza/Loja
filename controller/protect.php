<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
die("Acesse a sua conta para poder entrar na página.<p><a href=\"login.php\">Entrar</a></p><p><a href=\"../index.php\">Inicio</a></p>");
}

?>