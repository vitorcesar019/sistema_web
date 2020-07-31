<?PHP

require_once("../conexao/banco.php");

$cliente 	  = $_REQUEST['sel_cliente'];
$tipo = $_REQUEST['sel_tipo'];

$sql = "INSERT INTO tb_venda (cli_codigo, ven_tipo_pagamento) 
								  VALUES ('$cliente', '$tipo')";
	
mysqli_query($con, $sql) or die ("Erro na sql!") ;

$sql2 = "SELECT * FROM tb_venda ORDER BY ven_codigo DESC";
$sql2 = mysqli_query($con, $sql2) or die ("Erro na sql2!");
$dados = mysqli_fetch_array($sql2);

$venda = $dados['ven_codigo'];

header("Location: form_venda.php?venda=$venda");

?>

