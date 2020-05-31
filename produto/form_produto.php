<?php
require_once('../conexao/banco.php');

$sql = "select * from tb_fornecedor";
$sql = mysqli_query($con, $sql) or die("Erro na SQL!");

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title> Formulário de Cadastro de Produtos </title>

  <link rel="stylesheet" type="text/css" href="../css/formatacao.css">

</head>

<body>
  <form name="frm_produto" action="cadastro_produto.php" enctype="multipart/form-data" method="post">
    <div id="principal">
      <h1> Cadastro de Produtos </h1>

      <label> Descrição </label>
      <input name="txt_descricao" type="text" class="input_01">

      <label> Quantidade </label>
      <input name="txt_qtde" type="text" class="input_01">

      <label> Preço </label>
      <input name="txt_preco" type="text" class="input_01">

      <label> Foto </label>
      <input name="txt_arquivo" type="file" id="txt_arquivo" class="input_01">

      <label> Fornecedor </label>
      <select name="sel_fornecedor" class="select_01">
        <?php while ($dados = mysqli_fetch_array($sql)) { ?>
          <option value="<?php echo $dados['for_codigo']; ?>"> <?php echo $dados['for_nome']; ?>
          </option>
        <?php } ?>
      </select>

      <label> Status </label>
      <select name="sel_status" class="select_01">
        <option value="A"> Ativo </option>
        <option value="I"> Inativo </option>
      </select>

      <input name="btn_enviar" type="submit" value="Enviar" class="btn">
    </div>
  </form>
</body>

</html>