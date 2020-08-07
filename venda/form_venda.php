<?php
require_once('../conexao/banco.php');

$venda = isset($_REQUEST['venda']) ? $_REQUEST['venda'] : '';

$sql = "select * from tb_cliente";
$sql = mysqli_query($con, $sql) or die("Erro na SQL!");

$sql2 = "select * from tb_produto";
$sql2 = mysqli_query($con, $sql2) or die("Erro na SQL2!");


$sql3 =
  "select * 
from tb_itens_venda    as i
inner join tb_produto as p
on (i.pro_codigo = p.pro_codigo)
where i.ven_codigo = '" . $venda . "' ";
$sql3 = mysqli_query($con, $sql3) or die("Erro na SQL3!");

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

        <form name="frm_venda" action="cadastrar_venda.php" method="post">
          <h1> Cadastro de Venda </h1>
          <label> Cliente </label>
          <select name="sel_cliente" class="select_01" disabled>
            <?php while ($dados = mysqli_fetch_array($sql)) { ?>
              <option value="<?php echo $dados['cli_codigo']; ?>"> <?php echo $dados['cli_nome']; ?>
              </option>
            <?php } ?>
          </select>
          <label> Tipo Pagamento </label>
          <select name="sel_tipo" class="select_01" disabled>
            <option value="1"> Dinheiro </option>
            <option value="2"> Cartão </option>
          </select>
        </form>

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
    </div>

    <div class="principal_consulta">
      <div class="linha">
        <div class="coluna_01"> <strong> ID </strong></div>
        <div class="coluna_03"> <strong> Produto </strong></div>
        <div class="coluna_02"> <strong> Valor </strong></div>
        <div class="coluna_01"> <strong> Qtde </strong></div>
        <div class="coluna_02"> <strong> Total </strong></div>
      </div>

      <?php while ($dados3 = mysqli_fetch_array($sql3)) { ?>
        <div class="linha">
          <div class="coluna_01"> <?php echo $dados3['pro_codigo']; ?> </div>
          <div class="coluna_03"> <?php echo $dados3['pro_descricao'];   ?> </div>
          <div class="coluna_02"> <?php echo $dados3['ite_valor_unit'];   ?> </div>
          <div class="coluna_01"> <?php echo $dados3['ite_qtde'];    ?> </div>
          <div class="coluna_02"> <?php echo $dados3['ite_total'];  ?> </div>

          <div class="coluna_01">
            <a href="delete_itens_venda.php?ite_codigo=<?php echo $dados3['ite_codigo']; ?>&&ven_codigo=<?php echo $dados3['ven_codigo']; ?>" onclick="excluir_registro(event);">
              <img src="../img/excluir.png">
            </a>
          </div>
        </div>
      <?php } ?>
    </div>

  <?php } ?>

  </div>
</body>

</html>