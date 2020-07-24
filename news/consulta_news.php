<?PHP

require_once("../conexao/banco.php");

$busca = isset($_REQUEST['txt_consultar']) ? $_REQUEST['txt_consultar'] : '';


$sql = "select *, date_format(new_data_publicacao,'%d/%m/%Y') as data  
		from tb_news 
		where new_titulo like '%".$busca."%' ";
		
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Consulta de Notícias </title>
<link rel="stylesheet" type="text/css" href="../css/consulta.css">

	<script type="text/javascript">
    
        function excluir_registro( ) {
            if( !confirm('Deseja realmente excluir este registro?') 
        ){
            if( window.event)
                window.event.returnValue=false;
            else
                e.preventDefault();
         }
        }
    
    </script>

</head>

<body>



<div id="principal">

<form name="frm_consulta" action="consulta_news.php" method="post">
  <input name="txt_consultar" type="text" placeholder="Buscar">
  <input name="btn_consultar" type="submit" value="Buscar" >
</form>

  <div class="linha"> 
    <div class="coluna_01"> <strong> ID </strong></div>
    <div class="coluna_03"> <strong> Título </strong></div>
    <div class="coluna_03"> <strong> Descrição </strong></div>
    <div class="coluna_02"> <strong> Autor </strong> </div>
    <div class="coluna_01"> <strong> Data </strong> </div>
    <div class="coluna_01"> <strong> Status </strong> </div>
  </div>

<?php while ($dados = mysqli_fetch_array($sql)) { ?>
  <div class="linha"> 
    <div class="coluna_01"> <?php echo $dados['new_codigo']; ?> </div>
    <div class="coluna_03"> <?php echo $dados['new_titulo']; ?> </div>
    <div class="coluna_03"> <?php echo $dados['new_descricao']; ?> </div>
    <div class="coluna_02"> <?php echo $dados['new_autor']; ?> </div>
    <div class="coluna_01"> <?php echo $dados['data']; ?> </div>
    <div class="coluna_01"> <?php echo $dados['new_status']; ?> </div>

    <div class="coluna_01">
      <a href="delete_news.php?new_codigo=<?php echo $dados['new_codigo']; ?>" onclick="excluir_registro(event);"> 
        <img src="../img/excluir.png"> 
      </a>
    </div>
    
    <div class="coluna_01">
      <a href="form_atualizar_news.php?new_codigo=<?php echo $dados['new_codigo']; ?>"> 
        <img src="../img/edit.png"> 
      </a>
    </div>
</div>

<?php } ?>

</body>
</html>
