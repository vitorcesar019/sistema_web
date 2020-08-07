<?PHP
require_once('../conexao/banco.php');

$id = $_REQUEST['ven_codigo'];

$sql0 = "delete from tb_itens_venda where ven_codigo = '$id'";

mysqli_query($con, $sql0) or die ("Erro na sql0!");


$sql = "delete from tb_venda where ven_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_venda.php");
