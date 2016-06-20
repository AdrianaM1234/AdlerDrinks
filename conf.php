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
$busca_user = mysql_query("SELECT id, nome, email, idade, senha FROM usuarios WHERE nome = '$_SESSION[nome]'");
if(mysql_num_rows($busca_user) >= 1){
	$dado = mysql_fetch_array($busca_user);

}
?>
<!DOCTYPE html>
<html>
    <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/logado.css" rel="stylesheet">
     <script src="../js/js.js" type="application/javascript"></script>
    <script src="../js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../js/validator.js"></script>
      
      <title>Drinks</title>   
    
  </head>
       
      <body style="background-image: url(imagens/bebida4.jpg);">
      

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


        <div class="containerp">
    <div class="row">
        <div class="col-sm-5">
            <div class="pr-wrap">
                <div class="login">
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">Alterar Conta</p>
                <form class="configurar" action="alterando.php" method="post">
                <input type="text" name="nome" value="<?php print $dado['nome'] ?>" />
                <input type="email" name="email" value="<?php print $dado['email'] ?>" />
                <input type="password" name="senha" value="<?php print $dado['senha'] ?>" />
                <input type="age" name="idade" value="<?php print $dado['idade'] ?>" />
                <input type="submit" value="Salvar Alterações" class="btn btn-success btn-sm" />
                <input type="hidden" name="id" value="<?php print $dado['id'] ?>"/>
                </form>
                <p class="form-title"></p>
                <form class="configurar" action="aviso.php" method="post">
                	<input type="submit" value="Deletar Conta" class="btn btn-success btn-sm" />

                </form>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>