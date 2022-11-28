<?php
include('./controller/conectar.php');
include('./controller/process.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <title>Cadastre-se</title>
    <link rel="stylesheet" href='../view/tema/style/cadastro.css'>
    <script src="./Cadastre-se/JS/script.js">
    </script>
</head>
<body>
    <header>
    <a href="../index.php">
        <div class='conteiner-logo'>
        
            <img src="../media/images/logo.svg" width="90px" height="90px">
            </a>
        </div>
    <h2>All Instruments</h2>
</header>
    <h2> Faça seu Cadastro :^)</h2>

    <div class="form">
        <form name='formuser' method='POST' action="">
            
            <input type="text" name="nome" id="nome"  placeholder="digite seu nome" maxlength='30'>
            
            <input type="email" name="email" id="mail" placeholder="insira seu email" maxlength='40'> <!--required-->

            <div id='errorPassForce'></div>
            <input type="password" name="pass" id="passF" onkeyup="validPassForce()" placeholder="crie uma senha" maxlength="15"> <!--required-->

            <div id="show">
                <input type="checkbox" id="check" onclick="showPass(this)"><p>Mostrar senha</p>
            </div>

            <div id="congrats"></div>
            <input type="password" name="confirm_pass" id="confPass" onkeyup="verifyPass()" placeholder="confirme sua senha" maxlength="15">  <!--required-->
            
            <input type="submit" id="btn" onclick="verifyPass()" value="Cadastrar">
            <!--
                ***adicionar o required a cada input***
            -->
        </form>
    </div>
</body>
</html>