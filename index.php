<!DOCTYPE html>
<html>
    <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/style.css" rel="stylesheet">
    <script src="../js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../js/validator.js"></script>
      
      <title>Drinks</title>   
    
  </head>
       
      <body style="background-image: url(imagens/bebida1.jpg);">
      
        <div class="containerp">
    <div class="row">
        <div class="col-sm-5 ">
            <div class="pr-wrap">
                <div class="login">
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">Login</p>
                <form class="login" action="logando.php" method="post">
                <input type="text" name="login" placeholder="Usuário" />
                <input type="password" name="senha" placeholder="Senha" />
                <input type="submit" value="Login" class="btn btn-success btn-sm" />
               </form>
            </div>
        </div>
      
        <div class="col-sm-4 ">
            <div class="wrap">
                <p class="form-title">Cadastrar-se</p>
                <form class="cadastrar" action="cadastrando.php" method="post">
                <input type="text" name="nome" placeholder="Usuário" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="senha" placeholder="Senha" />
                <input type="age" name="idade" placeholder="Idade" />
                <input type="submit" value="Cadastrar" class="btn btn-success btn-sm" />
                </form>
                
            </div>
        </div>
    </div>
    </div>
    </body>
</html>