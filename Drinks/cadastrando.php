<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<!DOCTYPE html>

<html>
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Drinks</title>
<script type="text/javascript">
		function cadsuccessfully(){
			setTimeout("window.location='logado.php'", 1000);
		}
</script>
</head>
<body style="background-image: url(imagens/bebida1.jpg);">

<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$idade=$_POST['idade'];

$sql = mysql_query("INSERT INTO usuarios (nome, email, senha, idade) VALUES ('$nome', '$email', '$senha','$idade')");

if ($sql) {
  print '<script> alert("Você foi cadastrado com sucesso!");</script>';
  session_start();
  $_SESSION['nome'] = $_POST['nome'];
  $_SESSION['senha'] = $_POST['senha'];
  echo "<script>cadsuccessfully()</script>";
}

?>      
    </body>
</html>





    
        


