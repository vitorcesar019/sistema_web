<?PHP

require_once("../conexao/banco.php");

$nome 			= $_REQUEST['txt_nome'];
$nascimento 	= $_REQUEST['txt_nascimento'];
$email 			= $_REQUEST['txt_email'];
$sexo 			= $_REQUEST['sel_sexo'];

$date = str_replace('/', '-', $nascimento); 
$date = date('Y-m-d', strtotime($date));


$sql = "insert into tb_cliente (cli_nome, cli_data_nascimento, cli_email, cli_sexo) 
								values ('$nome', '$date', '$email', '$sexo')";
	
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_cliente.php");

?>

