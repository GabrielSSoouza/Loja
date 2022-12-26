<?php
$usuario = 'root';
$senha = '';
$database = 'fmmkayoa_allinstruments';
$host = 'localhost'; 

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar o banco de dados: " . $mysqli->error);
}
?>
<?php
/*$conexao = new PDO("mysql:host=localhost;dbname=fmmkayoa_allinstruments", "fmmkayoa_allinstruments", "allinstruments");
$conexao->exec("SET CHARACTER SET utf8");

try {
    $pdo = $conexao;
} catch (PDOException $e) {
    echo $e->getMessage;
}*/
?>