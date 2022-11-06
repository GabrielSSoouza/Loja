<?php 

include('./controller/conectar.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <link rel="stylesheet" href="./view/tema/style/home.css">
    <title>Menu</title>
</head>
<header>
    <div class="container_logo">
        <div class="logo">
            <a href="home.php">
            <img src="./view/imagens/logo.svg" width="90" height="90">
            </a>
            <h1>AllInstruments</h1>
        </div>
    </div>
    <div class="menu">
        <nav>
            <ul>
                <a href="controller/produtos.php"><P>Produtos</P></a>

                <a href="controller/clientes.php"><p>Clientes</p></a>

                <a href="controller/contato.php"><p>Contato</p></a>

                <a href="controller/sobre.php"><p>Sobre</p></a>

                <img src="" alt=""><a href="controller/conta.php"><p>Perfil</p></a></img> <!-- icone de perfil -->
                <a href="controller/carrinho.php"><p>Carrinho</p></a> 
            </ul>
        </nav>
    </div>
</header>
<body>
    <h1>lista de produtos</h1>
    <form action="" method="GET">
        <input name="busca" placeholder="Pesquisar" type="text">
        <button type="submit">Pesquisar</button>
    </form>
</body>
</html>
