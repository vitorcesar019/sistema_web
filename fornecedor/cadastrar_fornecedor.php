<?PHP

require_once("../conexao/banco.php");

$nome 	  = $_REQUEST['txt_nome'];
$telefone = $_REQUEST['txt_telefone'];
$celular  = $_REQUEST['txt_celular'];
$email    = $_REQUEST['txt_email'];

//$date = str_replace('/', '-', $nascimento); 
//$date = date('Y-m-d', strtotime($date));

$sql = "insert into tb_fornecedor (for_nome, for_fone, for_cel, for_email) 
								  values ('$nome', '$telefone', '$celular', '$email')";
	
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_fornecedor.php");

?>

