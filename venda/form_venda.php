<?php
require_once('../conexao/banco.php');

$sql = "select * from tb_cliente";
$sql = mysqli_query($con, $sql) or die("Erro na SQL!");

$sql2 = "select * from tb_produto";
$sql2 = mysqli_query($con, $sql2) or die("Erro na SQL2!");

$venda = isset($_REQUEST['venda']) ? $_REQUEST['venda'] : '';

?>

<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title> Formulário de Cadastro de Fornecedor </title>

  <link rel="stylesheet" type="text/css" href="../css/formatacao_venda.css">

</head>

<body>
  <div id="principal">

    <div class="principal_form">
      <?php if ($venda == 0) { ?>

        <form name="frm_venda" action="cadastrar_venda.php" method="post">
          <h1> Cadastro de Venda </h1>

          <label> Cliente </label>
          <select name="sel_cliente" class="select_01">
            <?php while ($dados = mysqli_fetch_array($sql)) { ?>
              <option value="<?php echo $dados['cli_codigo']; ?>"> <?php echo $dados['cli_nome']; ?>
              </option>
            <?php } ?>
          </select>

          <label> Tipo Pagamento </label>
          <select name="sel_tipo" class="select_01">
            <option value="1"> Dinheiro </option>
            <option value="2"> Cartão </option>
          </select>

          <input name="btn_enviar" type="submit" value="Enviar" class="btn">


        </form>

      <?php } else { ?>
        <form name="frm_itens_venda" action="cadastrar_itens_venda.php" method="post">
          <input name="txt_venda" type="hidden" class="input_01" value="<?php echo $venda ?>">

          <label> Produto </label>
          <select name="sel_produto" class="select_01">
            <?php while ($dados2 = mysqli_fetch_array($sql2)) { ?>
              <option value="<?php echo $dados2['pro_codigo']; ?>"> <?php echo $dados2['pro_descricao']; ?>
              </option>
            <?php } ?>
          </select>

          <label> Valor Unitário </label>
          <input name="txt_valor" type="text" class="input_01" placeholder="Entre com o Valor Unitário">

          <label> Quantidade </label>
          <input name="txt_qtde" type="text" class="input_01" placeholder="Entre com a Quantidade">

          <label> Total </label>
          <input name="txt_total" type="text" class="input_01">

          <input name="btn_add" type="submit" value="Add" class="btn">
        </form>
      <?php } ?>
    </div>

    <div class="principal_consulta">
    </div>
  </div>
</body>

</html>