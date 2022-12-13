<?
include('protect.php');
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Produtos</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../view/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../view/css/responsive.css" rel="stylesheet" />
    <title>Carrinho</title>
</head>
<body>

<h2>Carrinho</h2>

    <div class="box" id="carrino-container">
        <div </div> class="produto">
            <img src="<?php echo $row['imagem']?>">
            <a href="?acicionar=<?php echo $row['id_produto']?>">adicionar ao carrinho</a>
       
    </div>
    
    <p>
        <a href="../index.php">Inicio</a>
    </p>

    <p>
        <a href="controller/logout.php">Sair</a>
    </p>
</body>
</html>