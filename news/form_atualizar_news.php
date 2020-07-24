<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['new_codigo'];

$sql = "select *, date_format(new_data_publicacao,'%d/%m/%Y') as data  
		from  tb_news 
		where new_codigo = '$id'";

$sql = mysqli_query($con, $sql) or die("Erro na sql!");

$dados = mysqli_fetch_array($sql);

?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title> Formulário Atualizar </title>
  <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>

<body>

  <form name="frm_news" action="atualizar_news.php" method="post">
    <div id="principal">
      <h1> Atualizar Notícias </h1>

      <label> Código </label>
      <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['new_codigo']; ?>">

      <label> Título </label>
      <input name="txt_titulo" type="text" class="input_01" value="<?php echo $dados['new_titulo']; ?>">

      <label> Descrição </label>
      <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['new_descricao']; ?>">

      <label> Autor </label>
      <input name="txt_autor" type="text" class="input_01" value="<?php echo $dados['new_autor']; ?>">

      <label> Data da Notícia </label>
      <input name="txt_datanoticia" type="date" class="input_01" value="<?php echo $dados['data']; ?>">

      <label> Status </label>
      <select name="sel_status" class="select_01">
        <option value="A" <?PHP if ($dados['new_status'] == "A") {
                            echo "selected";
                          } ?>> Ativa </option>
        <option value="I" <?PHP if ($dados['new_status'] == "I") {
                            echo "selected";
                          } ?>> Inativa </option>
      </select>

      <input name="btn_enviar" type="submit" value="Enviar" class="btn">
    </div>
  </form>
</body>

</html>