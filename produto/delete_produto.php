<?PHP
require_once('../conexao/banco.php');

$id = $_REQUEST['pro_codigo'];

$sql = "select * from tb_produto where pro_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql 1!") ;

$dados = mysqli_fetch_array($sql);

unlink($dados['pro_foto']);

$sql2 = "delete from tb_produto where pro_codigo = '$id'";
mysqli_query($con, $sql2) or die ("Erro na sql 2!") ; 

header("Location: consulta_produto.php");

?>


