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
<script type="text/javascript">
function successfully(){
			setTimeout("window.location='logado.php'");
		}
</script>

<?php
  $num=5;

  $sql = mysql_query("INSERT INTO registro (pontos) VALUES ('$num')");

  if ($sql) {
	echo "<script>successfully()</script>";
  }
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

      
      <title>Drinks</title>   
    
  </head>
       
      <body style="background-image: url(imagens/bebida2.jpg);">


        <nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                 <div id="rsociais">
                <a href="https://www.facebook.com/Drinks-270784336645065" target="_blank"><img id="face" src="Imagens/face.png"></a>                           
                <a href="https://twitter.com/_Drinks_?lang=pt-br" target="_blank"><img id="twitter" src="Imagens/twitter.png"></a>  
                </div>    
                </div>
                
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="logado.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>    Início</a>
                        </li>
                        <li><a href="conf.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>    Configurações</a>
                        </li>
                        <li><a href="favoritos.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>    Favoritos</a>
                        </li>
                        <li><a href="mensagem.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>    Contato</a>
                        </li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>    Sair</a>
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->
             </div><!-- /.container -->
        </nav><!-- /.navbar -->

      <div class="col-sm-6">
      <div class="menu">
      <ul class="nav navbar-nav">
        <li class="dropdown open">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-glass"></span>      RECEITAS</a>
          <ul class="dropdown-menu">
            <li><a href="bCaseiras.php"><span class="glyphicon glyphicon-glass"></span>    Bebidas Caseiras </a></li>
            <li class="divider"></li>
            <li class="dropdown open"><a href="#"> <span class="glyphicon glyphicon-glass"></span>    Drinks</a>
                <ul class="dropdown-menu">
                <li><a href="alcool.php"><span class="glyphicon glyphicon-glass"></span>    Alcóolicos </a></li>
                <li class="divider"></li>
                <li><a href="nAlcool.php"><span class="glyphicon glyphicon-glass"></span>    Não Alcóolicos </a>
                </li>
                </ul>
                </li>
                     
          </ul>
        </li>
      </ul>
      </div>

      <form class="stars">
            Avalie nossa ferramenta:
        <div >
            <a name="1" href="estrela1.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
            <a name="2" href="estrela2.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
            <a name="3" href="estrela3.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
            <a name="4" href="estrela4.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
            <a name="5" href="estrela5.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
        </div>
         
      </form>
</div>
  </body>
  </html>
