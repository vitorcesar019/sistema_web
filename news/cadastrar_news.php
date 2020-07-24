<?PHP

require_once("../conexao/banco.php");

$titulo 	 = $_REQUEST['txt_titulo'];
$descricao 	 = $_REQUEST['txt_descricao'];
$autor 		 = $_REQUEST['txt_autor'];
$datanoticia = $_REQUEST['txt_datanoticia'];
$status      = $_REQUEST['sel_status'];

$date = str_replace('/', '-', $datanoticia); 
$date = date('Y-m-d', strtotime($date));


$sql = "insert into tb_news (new_titulo, new_descricao, new_autor, new_data_publicacao, new_status) 
								values ('$titulo', '$descricao', '$autor', '$date', 'status')";
	
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_news.php");

?>

