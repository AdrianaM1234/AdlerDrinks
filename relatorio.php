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
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <script src="  http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/logado.css" rel="stylesheet">
    <script src="../js/jquery-1.12.3.min.js"></script>
    <script src="../js/js.js" type="application/javascript"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../js/validator.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <title>Relatório</title>
</head>
<body style="background-image: url(imagens/bebida2.jpg);">

<?php

$vezes = mysql_query("SELECT * FROM bebcas WHERE id > 0 ") or die (mysql_error()) ;

$vezes = mysql_num_rows($vezes);

$amarula = 0;
$ice = 0;
$vquente = 0;
$quentao = 0;

for ($id=1; $id < $vezes+1 ; $id++) { 
  $pontos = mysql_query("SELECT amarula FROM bebcas WHERE id = '$id' ") or die (mysql_error()) ;
  $amarula += $pontos;

  $pontos = mysql_query("SELECT ice FROM bebcas WHERE id = '$id' ") or die (mysql_error()) ;
  $ice += $pontos;

  $pontos = mysql_query("SELECT vinhoquente FROM bebcas WHERE id = '$id' ") or die (mysql_error()) ;
  $vquente += $pontos;

  $pontos = mysql_query("SELECT quentao FROM bebcas WHERE id = '$id' ") or die (mysql_error()) ;
  $quentao += $pontos;

  $id += $id;
}

   function geraGrafico($largura, $altura, $valores, $referencias, $tipo = "p3"){
           $valores = implode(',', $valores);
           $referencias = implode('|', $referencias);
 
           return "http://chart.apis.google.com/chart?chs=". $largura ."x". $altura . "&amp;chd=t:" . $valores . "&amp;cht=p3&amp;chl=" . $referencias;
     }

     $grafico = geraGrafico(500, 200, array($amarula,$ice,$vquente,$quentao), array("Amarula", "Ice", "Vinho Quente", "Quentão")); 


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

?>  
  <br><br><br><br><br><br><br><br><p><h1>  Relatório</h1><p>
  <p><br><h3>  Pontos por avaliação de Bebidas Caseiras</h3>
    <br><div>
    <img src="<?php echo $grafico ?>" title="Grafico gerado pelo Google Chart" />
     <p><br><h3>  Perfil dos usuários (idade média)</h3>
     <?php echo "   "?><?php echo $result+8?> <?php echo " anos"?>


</div>
</body>
</html>


