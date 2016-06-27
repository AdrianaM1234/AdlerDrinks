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
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/logado.css" rel="stylesheet">
    <script src="../js/jquery-1.12.3.min.js"></script>
    <script src="../js/js.js" type="application/javascript"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../js/validator.js"></script>
      
      <title>Drinks</title>   
    
  </head>
       
      <body style="background-image:url(imagens/pagACFKiwi.jpg);">

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
                <a href="https://www.facebook.com/Drinks-270784336645065"><img id="face" src="Imagens/face.png"></a>                           
                <a href="https://twitter.com/_Drinks_?lang=pt-br"><img id="twitter" src="Imagens/twitter.png"></a>  
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
<div id="beb">
<div class="container" id="msg">
  <div class="row">
      <div class="col-sm-6 ">
        <div class="well well-sm">
          <form class="form-horizontal" action="kiwenvi.php" method="post">
          <fieldset>
            <legend class="text-center">Deixe seu comentário:</legend>
    
            <!-- Message body -->
            <div class="form-group">
             <div class="col-md-9">
                <textarea class="form-control" id="message" name="mensagem" placeholder="Comente aqui..." rows="5"></textarea>
              </div>
            </div>
                 <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right" >
                <input type="submit" class="btn btn-success btn-sm" value="Enviar"/>  
              </div>
            </div>
          
      <form class="stars">
            Avalie essa receita:
        <div >
            <a name="1" href="k1.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
            <a name="2" href="k2.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
            <a name="3" href="k3.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
            <a name="4" href="k4.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
            <a name="5" href="k5.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
        </div>         
      </form>
    </fieldset>
  </form>
  </div>
 </div>
</div>
</div>
</div>
     
        <div class="col-sm-6" style="margin-left: 250px"> Adicione fotos a Galeria deste drink:  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                    <form  method="post" action="foto.php" enctype="multipart/form-data" >
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Arquivo</span>
                        
                        <input type="file" class="btn btn-success btn-sm" accept="image/png, image/jpeg, image/gif" name="imagem"/>
                        <br>
                        <input type="submit" name="enviar" class="btn btn-success btn-sm" value="Enviar"/> 

                    </div></form>
                </span>
                  <br/>
                  <br/>            
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
 

</body>
</html>