<?PHP
require_once("../seguranca.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> .:: Sistema WEB ::. </title>
<!--<link href="../css/menu.css" rel="stylesheet" type="text/css" />-->

<style type="text/css">

body {
	background-color: #FFF;
	margin: 0px;
	width: 100%;
	height: 100vh;
	font-family: Verdana, Geneva, sans-serif;
	color: #6e7882;
	font-size: 14px;
}

#principal {
	width: 100%;
	height: 100%;
}

#menu {
	width: 20%;
	height: 100vh;
	background-color: #6200ee;
	float: left;
}

#conteudo {
	width: 80%;
	height: 100vh;
	float: left;	
	background-color: #F4F4F4;
}

.titulo {
	width: 96%;
	height: 21px;
	float: left;
	border: 0px;
	font-weight: bold;
	color: #FFF;
	background-color: #3700b3;
	padding: 2%;
}

.logo {
	width: 96%;
	height: 30px;
	float: left;
	border: 0px;
  font-weight: bold;
  font-size: 18px;
	color: #FFF;
	background-color: #3700b3;
  padding: 2%;
}

.botao {
	width: 92%;
	height: 20px;
	float: left;
	border: 0px;
  padding: 4%;
}

.botao:hover {
	background-color: #03dac6; 
	color: #FFF;
}

a {
	font-family: Verdana, Geneva, sans-serif;
	color: #fff;
	font-size: 14px;
}

img {
	width: 12px;
	height: 12px;
}
	

</style>


</head>
<body>
<div id="principal">
  <div id="menu">   
  
    <div class="logo"> Sys | 180094 </div>

    <div class="titulo"> :: Login </div>
    
    <a href="../login/form_login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../login/consulta_login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div>
    </a>
    
    <div class="titulo"> :: Cliente </div>
    <a href="../cliente/form_cliente.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../cliente/consulta_cliente.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png">  Consulta </div> 
    </a>
    
    <div class="titulo"> :: Produtos </div>
    <a href="../produto/form_produto.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../produto/consulta_produto.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div> 
    </a>
    
     <a href="../produto/consulta_fotos.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta Fotos </div> 
    </a>

    <div class="titulo"> :: Fornecedor </div>
    <a href="../fornecedor/form_fornecedor.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro  </div> 
    </a>
    
    <a href="../fornecedor/consulta_fornecedor.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div> 
    </a>
    
    <div class="titulo"> :: News </div>
    <a href="../news/form_new.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro </div> 
    </a>
    
    <a href="../news/consulta_new.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> Consulta </div> 
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
