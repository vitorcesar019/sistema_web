<?PHP
require_once("../seguranca.php");
?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Sistema Web | 180094</title>
  <link href="../css/menu.css" rel="stylesheet" type="text/css" />
  <link href="../css/menu-principal.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="principal">
    <div id="menu">
      
    <a href="../index.php" target="conteudo"> 
      <div class="logo"> Sys | 180094 </div>
    </a>

      <div class="titulo"> :: Login </div>

      <a href="../login/form_login.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro </div>
      </a>

      <a href="../login/consulta_login.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
      </a>

      <div class="titulo"> :: Cliente </div>
      <a href="../cliente/form_cliente.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro </div>
      </a>

      <a href="../cliente/consulta_cliente.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
      </a>

      <div class="titulo"> :: Produtos </div>
      <a href="../produto/form_produto.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro </div>
      </a>

      <a href="../produto/consulta_produto.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
      </a>

      <a href="../produto/fotos_produtos.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_consulta.png"> Consulta Fotos </div>
      </a>

      <div class="titulo"> :: Fornecedor </div>
      <a href="../fornecedor/form_fornecedor.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro </div>
      </a>

      <a href="../fornecedor/consulta_fornecedor.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
      </a>

      <div class="titulo"> :: News </div>
      <a href="../news/form_news.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro </div>
      </a>
      <a href="../news/consulta_news.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
      </a>

      <div class="titulo"> :: Vendas </div>
      <a href="../venda/form_venda.php" target="conteudo">
        <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Vendas </div>
      </a>



      <div class="titulo"> :: Sair </div>
      <a href="../logout.php">
        <div class="botao"> <img src="../img/icon_cadastro.png"> Logout </div>
      </a>

    </div>

    <div id="conteudo">
      <iframe name="conteudo" src="" height="100%" width="100%" frameborder="0" scrolling="auto"> </iframe>
    </div>

  </div>
</body>

</html>