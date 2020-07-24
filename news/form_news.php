<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Formulário de Cadastro </title>

<link rel="stylesheet" type="text/css" href="../css/formatacao.css">

</head>
<body>
<form name="frm_news" action="cadastrar_news.php" method="post">
    <div id="principal">
      <h1> Cadastro de Notícias </h1>
        <label> Título </label>
        <input name="txt_titulo" type="text" class="input_01" placeholder="Entre com o Título">

        <label> Descrição </label>
        <input name="txt_descricao" type="text" class="input_01" placeholder="Entre com a Descrição">

        <label> Autor </label>
        <input name="txt_autor" type="text" class="input_01" placeholder="Entre com o Autor">
        
        <label> Data da Notícia </label>
        <input name="txt_datanoticia" type="date" class="input_01" placeholder="Entre com a Data da Notícia">
        
        <label> Status </label>
        <select name="sel_status" class="select_01">
          <option value="A"> Ativa </option>
          <option value="I"> Inativa </option>
        </select>
            
        <input name="btn_enviar" type="submit" value="Enviar" class="btn">
    </div>
</form>
</body>
</html>


