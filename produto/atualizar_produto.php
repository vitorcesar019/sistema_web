﻿<?PHP

require_once("../conexao/banco.php");

$id 		= $_REQUEST['txt_codigo'];
$descricao 	= $_REQUEST['txt_descricao'];
$qtde 		= $_REQUEST['txt_qtde'];
$preco 		= $_REQUEST['txt_preco'];
$status 	= $_REQUEST['sel_status'];
$fornecedor = $_REQUEST['sel_fornecedor'];

			$sql = "update tb_produto set 
											 pro_descricao =  '$descricao',
											 pro_qtde 	   =  '$qtde',
											 pro_preco 	   =  '$preco',
											 pro_status    =  '$status'
											 where 
											 pro_codigo     = '$id'";

	mysqli_query($con, $sql) or die("Erro na sql!");
	header("Location: consulta_produto.php"); 

?>
