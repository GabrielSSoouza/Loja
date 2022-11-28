<?php
include('./controller/conectar.php');

if(isset($_POST['email']) || isset($_POST[''])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail!";
    } else if(strlen($_POST['pass']) == 0) {
        echo "preencha sua senha";
    } else {

      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['pass']);

      $sql_code = "SELECT * FROM tbl_usuarios WHERE email = '$email' AND senha = '$pass'";
      $sql_query = $mysqli->query($sql_code) or die("falha na execução do código SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1) {
        
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: ../index.php");

      } else {
        echo "Falha ao logar! E-mail ou senha incorretos!";
      }
        
    }
}
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
   <form action="" method="POST">
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
        <a href="cadastro.php">Cadastre-se</a>
   </p>


</body>
</html>