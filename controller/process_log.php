<?php
include 'conectar.php';
if(isset($_POST['email']) || isset($_POST[''])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail!";
    } else if(strlen($_POST['pass']) == 0) {
        echo "preencha sua senha";
    } else {

      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['pass']);

      $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND pass = '$senha'";
      $conn = new mysqli("localhost", "fmmkayoa_allinstruments", "allinstruments", "fmmkayoa_allinstruments");
      $conn-> query($sql_code);
      $conn->close();
      
      $sql_query = $mysqli->query($sql_code) or die("falha na execução do código SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1) {
        
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: ./controller/conta.php");

      } else {
        echo "Falha ao logar! E-mail ou senha incorretos!";
      }
        
    }
}
?>