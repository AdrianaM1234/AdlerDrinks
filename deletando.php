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

<?php

	$sql_code = "DELETE FROM usuarios WHERE nome = '$_SESSION[nome]' AND senha = '$_SESSION[senha]'";
	$sql_query = mysql_query($sql_code) or die(mysql_error());

	if($sql_query)
		echo "
		<script>
			alert('A conta foi deletada com sucesso.');
			location.href='index.php?p=inicial'; 
		</script>";
	else
		echo "
	<script> 
		alert('Não foi possível deletar a conta.');
		location.href='index.php?p=inicial'; 
	</script>";

?>