<?php
include ('./controller/process_log.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
   <form action="./controller/process_log.php" method="POST">
    <p>
        <label>Email</label>
        <input type="text" name="email">
    </p>
    <p>
        <label>Senha</label>
        <input type="password" name="pass">
    </p>
    <p>
        <button type="submit">Entrar</button>
    </p>
   </form> 

   <p>
        <a href="./controller/cadastro.php">Cadastre-se</a>
   </p>


</body>
</html>