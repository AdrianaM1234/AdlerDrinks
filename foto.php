<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<script type="text/javascript">
function successfully(){
      setTimeout("window.location='logado.php'",5000);
    }
</script>

<?php
 
// Se o usuário clicou no botão cadastrar efetua as ações
 
  // Recupera os dados dos campos
  $foto = $_FILES["imagem"];
  
  // Se a foto estiver sido selecionada
  if (!empty($foto["name"])) {
    
    // Largura máxima em pixels
    $largura = 150;
    // Altura máxima em pixels
    $altura = 180;
    // Tamanho máximo do arquivo em bytes
    $tamanho = 1000;
 
      // Verifica se o arquivo é uma imagem
      if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
         $error[1] = "Isso não é uma imagem.<br>";
      } 
  
    // Pega as dimensões da imagem
    $dimensoes = getimagesize($foto["tmp_name"]);
  
    // Verifica se a largura da imagem é maior que a largura permitida
    if($dimensoes[0] > $largura) {
      $error[2] = "<br>A largura da imagem não deve ultrapassar ".$largura." pixels<br>";
    }
 
    // Verifica se a altura da imagem é maior que a altura permitida
    if($dimensoes[1] > $altura) {
      $error[3] = "<br>Altura da imagem não deve ultrapassar ".$altura." pixels<br>";
    }
    
    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if($foto["size"] > $tamanho) {
        $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes<br>";
    }
 
    // Se não houver nenhum erro
    if (count($error) == 0) {
    
      // Pega extensão da imagem
      preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
          // Gera um nome único para a imagem
          $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
          // Caminho de onde ficará a imagem
          $caminho_imagem = "imagens/fotos" . $nome_imagem;
 
      // Faz o upload da imagem para seu respectivo caminho
      
    
      // Insere os dados no banco
      $sql = move_uploaded_file($foto["tmp_name"], $caminho_imagem);
    
      // Se os dados forem inseridos com sucesso
      if ($sql) {
  			print '<script> alert("Sua imagem foi enviada com sucesso!");</script>';
  			echo "<script>successfully()</script>";
}

    }
  
    // Se houver mensagens de erro, exibe-as
    if (count($error) != 0) {
      	echo "Ocorreu algum problema ao enviar a imagem.";
      foreach ($error as $erro) {
        echo $erro;
         echo "<script>successfully()</script>";
      }
    }
  }

?>