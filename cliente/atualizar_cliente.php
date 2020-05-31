<?PHP
require_once("../conexao/banco.php");

$id 		= $_REQUEST['txt_codigo'];
$nome 		= $_REQUEST['txt_nome'];
$nascimento = $_REQUEST['txt_nascimento'];
$email 		= $_REQUEST['txt_email'];
$sexo 		= $_REQUEST['sel_sexo'];

$date = str_replace('/', '-', $nascimento); 
$date = date('Y-m-d', strtotime($date));

$sql = "update tb_cliente set 
					cli_nome = '$nome', 
					cli_data_nascimento = '$date', 
					cli_email = '$email',
					cli_sexo = '$sexo'
				where 
					cli_codigo = '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_cliente.php");
?>