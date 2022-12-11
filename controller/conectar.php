<?php
$conexao = new PDO("mysql:host=localhost;dbname=fmmkayoa_allinstruments", "fmmkayoa_allinstruments", "allinstruments");
$conexao->exec("SET CHARACTER SET utf8");

try {
    $pdo = $conexao;
} catch (PDOException $e) {
    echo $e->getMessage;
}
?>