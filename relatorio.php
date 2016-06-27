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
$v = mysql_query("SELECT * FROM registro WHERE id > 235 ") or die (mysql_error()) ;

$vezes = mysql_num_rows($vezes);
$v = mysql_num_rows($v);

$amarula = 0;
$ice = 0;
$vquente = 0;
$quentao = 0;
$id = 1;

$s = 236;
$um=0;
$dois=0;
$tres=0;
$quatro=0;
$cinco=0;


for ($i=0; $i < $vezes ; $i++) { 
  $pontos = mysql_query("SELECT * FROM bebcas WHERE id = '$id' ") or die (mysql_error()) ;
  $linha = mysql_fetch_array($pontos);
  $amarula += $linha['amarula'];
  $ice+= $linha['ice'];
  $vquente+= $linha['vinhoquente'];
  $quentao+= $linha['quentao'];
  $id++;
}

for ($i=0; $i < $v ; $i++) { 
$b = mysql_query("SELECT * FROM registro WHERE id= '$s'") or die (mysql_error()) ;
  $li = mysql_fetch_array($b);
  $p = $li['pontos'];
    if ($p == 1) {
      $um++;
    }
    else{
      if ($p ==2) {
        $dois++;
      }
      else{
      if ($p ==3) {
        $tres++;
      }
      else{
      if ($p ==4) {
        $quatro++;
      }
      else{
      if ($p ==5) {
        $cinco++;
      }
    }
  }
}
}
$s++;
}

   
$soma =0;
$ide = 78;
$sql = mysql_query("SELECT * FROM usuarios WHERE id > 77 ") or die (mysql_error()) ;

$users = mysql_num_rows($sql);


for ($i=0; $i < $users ; $i++) { 

  $busca = mysql_query("SELECT * FROM usuarios WHERE id= '$ide'") or die (mysql_error()) ;
  $linha = mysql_fetch_array($busca);
  $age = $linha['idade'];
  $soma+=$age;
  $ide++;
 
}

?>  

<br><br><br><br><br><br><br><br><br><br><br><br>
<div id="chart_div" style="width: 700px; margin-left: 160px">
  <script type="text/javascript" >
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
         ['Element', 'Pontos', { role: 'style' }],
         ['Amarula',<?php echo($amarula); ?> , '#3366CC'],            // RGB value
         ['Ice', <?php echo($ice); ?>, '#3366CC'],            // English color name
         ['Quentão',<?php echo($quentao); ?> , '#3366CC'],
         ['Vinho Quente', <?php echo($vquente); ?>, '#3366CC' ], // CSS-style declaration
      ]);

      var options = {
        title: 'Avaliação de Bebidas Caseiras',
        hAxis: {
          title: 'Bebidas Caseiras',
        },
        vAxis: {
          title: 'Pontos (nº de estrelas)'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>
</div>

<br><br>
<div class="col-sm-4">
   <table class="table" style="width: 300px; margin-left:200px">
      <thead>
        <h3 style="margin-left: 180px">Avaliação da Ferramenta</h3>
        <br>
        <tr>
          <th>Estrelas</th>
          <th>Votos</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><?php echo($um); ?></td>
        </tr>
        <tr>
          <td>2</td>
          <td><?php echo($dois); ?></td>
        </tr>
        <tr>
          <td>3</td>
          <td><?php echo($tres); ?></td>
        </tr>
        <tr>
          <td>4</td>
          <td><?php echo($quatro); ?></td>
        </tr>
        <tr>
          <td>5</td>
          <td><?php echo($cinco); ?></td>
        </tr>
      </tbody>
    </table>
</div>


<div class="col-sm-4">
   <table class="table" style="width: 300px; margin-left:200px">
      <thead>
        <h3 style="margin-left: 180px">Perfil dos Usuários</h3>
        <br>
        <tr>
          <th>Quantidade de usuários</th>
          <th>Idade média</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo($users); ?> </td>
          <td><?php echo($soma/$users); ?> </td>
        </tr>
      </tbody>
    </table>



</div>

</body>
</html>


