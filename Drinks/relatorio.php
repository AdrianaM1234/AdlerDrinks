<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<?php

$id = 78;
$sql = mysql_query("SELECT * FROM usuarios WHERE id > 77 ") or die (mysql_error()) ;

$users = mysql_num_rows($sql);

$soma = 0;

for ($i=0; $i < $users ; $i++) { 
	$age = mysql_query("SELECT idade FROM usuarios WHERE id = '$id' ") or die (mysql_error()) ;
	$soma += $age;
	$id += $id;
}


$result = $soma/$users;

echo "RELATÓRIO DRIKS<p>--------------------------------------------- ";

echo "<p><p>Quantidade de usuários cadastrados: ";echo($users);
echo "<p>Média de idade desses usuários:  ";echo($result);

?>