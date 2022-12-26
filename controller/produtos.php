<?php
include ("conectar.php");
session_id();
?>
<!DOCTYPE html>
<html>

<head>
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
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="../index.php">
        <span>All Instruments</span>
      </a>
    </div>
    <!-- end header section -->
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="produtos.php">Produtos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="metas.php">Metas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contato.php">Contate-nos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->

  <!-- fruit section -->

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>Produtos</h2>
      </div>
    </div>
    <div class="container-fluid">

      
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fmmkayoa_allinstruments";
    
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
    $sql = "SELECT * FROM `produtos`;";
    $result = $conn->query($sql);
    
      
      
      
$conn->close();
    
?><?php
      if ($result->num_rows > 0) {
  // output data of each row
  echo '<div class="fruit_container">';
    while($row = $result->fetch_assoc()) {
    echo "<div class='box'>
            <img src='".$row["imagem"]."' >
            <div class='link_box'>
                <h5>" . $row["nome"]. "</h5>
                <h5>Preco " . $row["preco"]. "</h5>
                <a href='?adicionar=<?php echo " . $row['id_produto'] . "?>'>Adicionar ao carrinho</a>
            </div>
          </div>";
  }
  echo '</div>';
} else {
  echo "0 results";
}
      ?>
      <?php
      ?>
      
     

  <!-- end fruit section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>All Instruments</h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="../media/images/location.png" alt="">
              <span>Sede da empresa</span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="../media/images/call.png" alt="">
              <span>Call : XX XX XXXX-XXXX</span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="../media/images/mail.png" alt="">
              <span>allinstruments12@gmail.com</span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="../media/images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="../media/images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="../media/images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="../media/images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; <span id="displayYear"></span> Todos os direitos reservados
    </p>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="../view/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../view/js/bootstrap.js"></script>
  <script type="text/javascript" src="../view/js/custom.js"></script>

</body>

</html>
