<?PHP
require_once("../conexao/banco.php");

$venda 	  = $_REQUEST['txt_venda'  ];
$produto  = $_REQUEST['sel_produto'];
$valor 	  = $_REQUEST['txt_valor'  ];
$qtde 	  = $_REQUEST['txt_qtde'   ];
$total 	  = $_REQUEST['txt_total'  ];

$sql = "INSERT INTO tb_itens_venda (ven_codigo, pro_codigo, ite_valor_unit, ite_qtde, ite_total ) 
								  VALUES ('$venda', '$produto', '$valor', '$qtde', '$total')";
	
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: form_venda.php?venda=$venda");
