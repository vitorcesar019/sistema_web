<?PHP
require_once("../conexao/banco.php");

$id 	  = $_REQUEST['txt_codigo'];
$nome 	  = $_REQUEST['txt_nome'];
$telefone = $_REQUEST['txt_telefone'];
$celular  = $_REQUEST['txt_celular'];
$email    = $_REQUEST['txt_email'];

//$date = str_replace('/', '-', $nascimento); 
//$date = date('Y-m-d', strtotime($date));

$sql = "update tb_fornecedor set 
					for_nome =  '$nome',  
					for_fone =  '$telefone', 
					for_cel =   '$celular', 
					for_email = '$email' 
				where 
					for_codigo = '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_fornecedor.php");
?>