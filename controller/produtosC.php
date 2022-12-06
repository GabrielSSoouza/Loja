<?php
session_start();


if(!empty($_SESSION['mensagem'])) {
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produt</title>
</head>
<body>
    <form action="listar.php" method="get" accept-charset="utf-8">
            Nome produto<input type="text" name="nome"><br>
            Preço produto<input type="text" name="preco"><br>
            Descrição produto<input type="text" name="descricao"><br>
            Categoria<input type="text" name="categoria"><br>
            <input type="submit" name="enviar">
    </form>
</body>
</html>
    

