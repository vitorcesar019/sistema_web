<?PHP
require_once('../conexao/banco.php');

$venda = $_REQUEST['ven_codigo'];
$id    = $_REQUEST['ite_codigo'];

$sql = "delete from tb_itens_venda where ite_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: form_venda.php?venda=$venda");

?>


