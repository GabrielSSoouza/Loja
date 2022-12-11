<?php
session_start();


if(isset($_GET['enviar'])) {
    if(!empty($_GET['nome']) || !empty($_GET['preco']) || !empty($_GET['descricao']) || !empty($_GET['categoria'])) {
        $nome=$_GET['nome'];
        $preco=$_GET['preco'];
        $descricao=$_GET['descricao'];
      	$categoria=$_GET['categoria'];

      	$sql = "insert into produtos (nome, preco, descricao, categoria) values ('$nome', '$preco', '$descricao', '$categoria')";
        $conn = new mysqli("localhost", "fmmkayoa_allinstruments", "allinstruments", "fmmkayoa_allinstruments");	
     	$enviar=mysqli_query($conn, $sql);
		
        if($enviar) {
            $_SESSION['mensagem']="Produto Cadastrado";
            header("location:produtosC.php");
            exit;
        }else{
            $_SESSION['mensagem']="Erro ao cadastrar o produto";
            header("location:produtosC.php");
            exit;
        }
    }
}

?>
