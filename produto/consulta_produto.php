<?PHP

require_once("../conexao/banco.php");

$busca = isset($_REQUEST['txt_consultar']) ? $_REQUEST['txt_consultar'] : '';

$sql = "select *, f.for_nome as fornecedor 
from  tb_produto as p 
inner join tb_fornecedor as f
on (p.for_codigo = f.for_codigo)
where pro_descricao like '%".$busca."%'";

$sql = mysqli_query($con, $sql) or die("Erro na sql!");

?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title> Consulta de Produtos </title>
  <link rel="stylesheet" type="text/css" href="../css/consulta.css">

  <script type="text/javascript">
    function excluir_registro() {
      if (!confirm('Deseja realmente excluir este registro?')) {
        if (window.event)
          window.event.returnValue = false;
        else
          e.preventDefault();
      }
    }
  </script>

</head>

<body>

  <div id="principal">

    <form name="frm_consulta" action="consulta_produto.php" method="post">
      <input name="txt_consultar" type="text" placeholder="Buscar">
      <input name="btn_consultar" type="submit" value="Buscar">
    </form>

    <div class="linha">
      <div class="coluna_01"> <strong> ID </strong></div>
      <div class="coluna_02"> <strong> Descrição </strong></div>
      <div class="coluna_01"> <strong> Qtde. </strong></div>
      <div class="coluna_01"> <strong> Preço </strong></div>
      <div class="coluna_03"> <strong> Foto </strong></div>
      <div class="coluna_01"> <strong> Status </strong></div>
      <div class="coluna_03"> <strong> Fornecedor </strong></div>
    </div>

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>
      <div class="linha">
        <div class="coluna_01"> <?php echo $dados['pro_codigo'];     ?> </div>
        <div class="coluna_02"> <?php echo $dados['pro_descricao'];  ?> </div>
        <div class="coluna_01"> <?php echo $dados['pro_qtde'];       ?> </div>
        <div class="coluna_01"> <?php echo $dados['pro_preco'];      ?> </div>
        <div class="coluna_03"> <?php echo $dados['pro_foto'];       ?> </div>
        <div class="coluna_01"> <?php echo $dados['pro_status'];     ?> </div>
        <div class="coluna_03"> <?php echo $dados['fornecedor'];     ?> </div>

        <div class="coluna_01">
          <a href="form_atualizar_produto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>">
            <img src="../img/edit.png">
          </a>
        </div>
        <div class="coluna_01">
          <a href="delete_produto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>" onclick="excluir_registro(event);">
            <img src="../img/excluir.png">
          </a>
        </div>
        
      </div>

    <?php } ?>

</body>

</html>