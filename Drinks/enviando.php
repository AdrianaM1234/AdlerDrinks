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
    function msgsuccessfully(){
      setTimeout("window.location='mensagem.php'", 1000);
    }
</script>
</head>
<body style="background-image: url(imagens/bebida3.jpg);">

<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$texto=$_POST['mensagem'];

$sql = mysql_query("INSERT INTO mensagens (mensagem, nome, email) VALUES ('$texto', '$nome', '$email')");

if ($sql) {
  print '<script> alert("Sua mensagem foi enviada com sucesso!");</script>';
  echo "<script>msgsuccessfully()</script>";
}

?>      
    </body>
</html>
