<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Formulário de Cadastro </title>

<link rel="stylesheet" type="text/css" href="../css/formatacao.css">

</head>
<body>
<form name="frm_cliente" action="cadastrar_cliente.php" method="post">
    <div id="principal">
      <h1> Cadastro de Clientes </h1>
        <label> Nome </label>
        <input name="txt_nome" type="text" class="input_01">
        
        <label> Data Nascimento </label>
        <input name="txt_nascimento" type="text" class="input_01">
        
        <label> Email </label>
        <input name="txt_email" type="email" class="input_01">
        
        <label> Sexo </label>
        <select name="sel_sexo" class="select_01">
          <option value="M"> Masculino </option>
          <option value="F"> Feminino </option>
        </select>
            
        <input name="btn_enviar" type="submit" value="Enviar" class="btn">
    </div>
</form>
</body>
</html>


