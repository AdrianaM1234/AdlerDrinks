<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php
  session_start();
  if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])){
      header("Location: index.php");
      exit;
  }
 
?>
<!DOCTYPE html>

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Drinks</title>
<script type="text/javascript">
    function altsuccessfully(){
      setTimeout("window.location='logado.php'", 1000);
    }
     function alterror(){
      setTimeout("window.location='conf.php'", 1000);
    }
</script>
</head>
<body style="background-image: url(imagens/bebida4.jpg);">
 
<?php
	session_destroy();
?>

<?php

$new_login = $_POST['nome'];
$new_email = $_POST['email'];
$new_senha = $_POST['senha'];
$new_idade = $_POST['idade'];
$id = $_POST['id'];

$altera = mysql_query("UPDATE usuarios SET nome = '$new_login', email = '$new_email', idade = '$new_idade', senha = '$new_senha' WHERE id = $id");

if(mysql_affected_rows() > 0){
	print '<script> alert("Conta alterada com sucesso!");</script>';
  session_start();
  $_SESSION['nome'] = $new_login;
  $_SESSION['senha'] = $new_senha;
  echo "<script>altsuccessfully()</script>";
}
else{
	print '<script> alert("Erro ao alterar conta");</script>';
  echo "<script>alterror()</script>";
}
?>   
				
    </body>
</html>