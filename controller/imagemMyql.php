<?php

include_once 'conectar.php';

// dados recebidos do formulário
$foto = $_FILES["imagem"];
$nome = $_POST["nome"];

// Expressão regular 
//formato de imagem aceitos 
if (!preg_match("/^image\/(pjpeg|jpeg|JPG|png|gif|bmp)$/", $foto["type"])) { 
    header("location:form-imagem.php?");
} else {
    echo "Erro no formato/tamanho";
    header("location:form-imagem.php?");
}

$inserir = $pdo->prepare("INSERT INTO galeria(foto, nome) VALUES(:foto, :nome)");

if (!empty($foto["name"])) {
    // verifica se é um arquivo de imagem
    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
    // Gera um nome único para a imagem 
    $nome_imagem =  date('Y-m-d-His')."_".$foto["name"];
    
    //Cria uma pasta dentro do projeto 
    $caminho_imagem = "media/" . $nome_imagem;
    move_uploaded_file($foto["tmp_name"], $caminho_imagem);
}
// poderia tratar dados recebidos do formulário, validando se eles foram prenchidos
$inserir->bindValue(":foto", $nome_imagem);
$inserir->bindValue(":nome", $nome);


if ($inserir->execute()) {
    header("location:listar-imagem.php?");
} else {
    header("location:form-imagem.php?");
}
?>

