<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Formulário de Cadastro de Fornecedor </title>

<link rel="stylesheet" type="text/css" href="../css/formatacao.css">

</head>
<body>
<form name="frm_fornecedor" action="cadastrar_fornecedor.php" method="post">
    <div id="principal">
      <h1> Cadastro de Fornecedores </h1>
        <label> Nome </label>
        <input name="txt_nome" type="text" class="input_01">
        
        <label> Telefone </label>
        <input name="txt_telefone" type="text" class="input_01">

        <label> Celular </label>
        <input name="txt_celular" type="text" class="input_01">
        
        <label> Email </label>
        <input name="txt_email" type="email" class="input_01">
            
        <input name="btn_enviar" type="submit" value="Enviar" class="btn">
    </div>
</form>
</body>
</html>


