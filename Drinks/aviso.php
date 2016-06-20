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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="../js/js.js" type="application/javascript"></script>
 <link href="css/style.css" rel="stylesheet">
</head>
<body style="background-image: url(imagens/bebida4.jpg);">
<p></p>
<div id="notification" class="notification">

<div class="win8-notif-body">
<div class="mid">
<h3>Aviso</h3>
<p>Deseja realmente deletar essa conta?</p>
<a href="deletando.php"><button class="win8-notif-button">SIM</button></a>
<a href="logado.php"><button class="win8-notif-button">CANCELAR</button></a>
</div>
</div>
</div>

</body>
</html>
