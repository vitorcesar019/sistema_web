<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title> Formulário de Cadastro </title>

  <link rel="stylesheet" type="text/css" href="../css/formatacao.css">

  <script>
    function campos_obrigatorios() {
      if (document.frm_cliente.txt_nome.value == "") {
        alert("Preenche o nome!");
        document.frm_cliente.txt_nome.focus();
        return false;
      }

      if (document.frm_cliente.txt_nascimento.value == "") {
        alert("Preenche a data de nascimento!");
        document.frm_cliente.txt_nascimento.focus();
        return false;
      }

      if (document.frm_cliente.txt_email.value == "") {
        alert("Preenche um email!");
        document.frm_cliente.txt_email.focus();
        return false;
      }
    }
  </script>

</head>

<body>
  <form name="frm_cliente" action="cadastrar_cliente.php" method="post">
    <div id="principal">
      <h1> Cadastro de Clientes </h1>
      <label> Nome </label>
      <input name="txt_nome" type="text" class="input_01" placeholder="Entre com o Nome">

      <label> Data Nascimento </label>
      <input name="txt_nascimento" type="text" class="input_01" placeholder="Entre com a Data de Nascimento">

      <label> Email </label>
      <input name="txt_email" type="email" class="input_01" placeholder="Entre com Email">

      <label> Sexo </label>
      <select name="sel_sexo" class="select_01">
        <option value="M"> Masculino </option>
        <option value="F"> Feminino </option>
      </select>

      <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return campos_obrigatorios()">
    </div>
  </form>
</body>

</html>