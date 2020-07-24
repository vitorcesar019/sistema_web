<?PHP
require_once("../conexao/banco.php");

$id 	 = $_REQUEST['txt_codigo'];
$titulo 	 = $_REQUEST['txt_titulo'];
$descricao 	 = $_REQUEST['txt_descricao'];
$autor 		 = $_REQUEST['txt_autor'];
$datanoticia = $_REQUEST['txt_datanoticia'];
$status      = $_REQUEST['sel_status'];

$date = str_replace('/', '-', $datanoticia); 
$date = date('Y-m-d', strtotime($date));

$sql = "update tb_news set 
				new_titulo  		= '$titulo', 
				new_descricao 		= '$descricao', 
				new_autor 			= '$autor',
				new_data_publicacao = '$date',
				new_status 		    = '$status'
			where 
				new_codigo  		= '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_news.php");
