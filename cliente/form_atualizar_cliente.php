<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['cli_codigo'];

$sql = "select *, date_format(cli_data_nascimento,'%d/%m/%Y') as data  
		from tb_cliente 
		where cli_codigo = '$id'";
		
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

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

<form name="frm_cliente" action="atualizar_cliente.php" method="post">
    <div id="principal">
      <h1> Atualizar Clientes </h1>

		<label> Código </label>
		<input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['cli_codigo']; ?>">

        <label> Nome </label>
        <input name="txt_nome" type="text" class="input_01" value="<?php echo $dados['cli_nome']; ?>">
        
        <label> Data Nascimento </label>
        <input name="txt_nascimento" type="text" class="input_01" value="<?php echo $dados['data']; ?>">
        
        <label> Email </label>
        <input name="txt_email" type="email" class="input_01" value="<?php echo $dados['cli_email']; ?>">
        
        <label> Sexo </label>
        <select name="sel_sexo" class="select_01">
          <option value="M" <?PHP if ($dados['cli_sexo'] == "M") { echo "selected"; } ?> > Masculino </option>
          <option value="F" <?PHP if ($dados['cli_sexo'] == "F") { echo "selected"; } ?> > Feminino </option>
        </select>
            
        <input name="btn_enviar" type="submit" value="Enviar" class="btn">
    </div>
</form>
</body>
</html>
