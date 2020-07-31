<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['for_codigo'];

$sql = "select *, date_format(for_data_cadastro,'%d/%m/%Y') as data  
		from tb_fornecedor
		where for_codigo = '$id'";
		
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$dados = mysqli_fetch_array($sql);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Formulário Atualizar Fornecedor </title>
<link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>
<body>

<form name="frm_cliente" action="atualizar_fornecedor.php" method="post">
    <div id="principal">
      <h1> Atualizar Fornecedor </h1>

		<label> Código </label>
		<input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['for_codigo']; ?>">

        <label> Nome </label>
        <input name="txt_nome" type="text" class="input_01" value="<?php echo $dados['for_nome']; ?>">

        <label> Telefone </label>
        <input name="txt_telefone" type="text" class="input_01" value="<?php echo $dados['for_fone']; ?>">

        <label> Celular </label>
        <input name="txt_celular" type="text" class="input_01" value="<?php echo $dados['for_cel']; ?>">
        
        <label> Email </label>
        <input name="txt_email" type="email" class="input_01" value="<?php echo $dados['for_email']; ?>">
            
        <input name="btn_enviar" type="submit" value="Enviar" class="btn">
    </div>
</form>
</body>
</html>
