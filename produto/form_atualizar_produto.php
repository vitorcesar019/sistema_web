<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['pro_codigo'];

$sql = "select * from tb_produto where pro_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die("Erro na sql!");
$dados = mysqli_fetch_array($sql);

$sql2 = "select * from tb_fornecedor";
$sql2 = mysqli_query($con, $sql2) or die("Erro na sql 2!");
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Formulário Atualizar Produto </title>
    <link rel="stylesheet" type="text/css" href="../css/formatacao.css">
</head>

<body>

    <form name="frm_atualizar_produto" action="atualizar_produto.php" enctype="multipart/form-data" method="post">
        <div id="principal">
            <h1> Atualizar Produto </h1>

            <label> Código </label>
            <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['pro_codigo']; ?>">

            <label> Descrição </label>
            <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['pro_descricao']; ?>">

            <label> Quantidade </label>
            <input name="txt_qtde" type="text" class="input_01" value="<?php echo $dados['pro_qtde']; ?>">

            <label> Preço </label>
            <input name="txt_preco" type="text" class="input_01" value="<?php echo $dados['pro_preco']; ?>">

            <label> Foto </label>
            <input name="txt_arquivo" type="file" id="txt_arquivo" class="input_01">

            <label> Fornecedor </label>
            <select name="sel_fornecedor" class="select_01">

                <?php while ($dados2 = mysqli_fetch_array($sql2)) { ?>
                    <option value="<?php echo $dados2['for_codigo']; ?>" <?PHP if ($dados2['for_codigo'] == $dados['for_codigo']) {echo "selected";} ?>> 
                    <?php echo $dados2['for_nome']; ?>
                    </option>
                <?php } ?>

            </select>


            <label> Status </label>
            <select name="sel_status" class="select_01">
                <option value="A" <?PHP if ($dados['pro_status'] == "A") {
                                        echo "selected";
                                    } ?>> Ativo </option>
                <option value="I" <?PHP if ($dados['pro_status'] == "I") {
                                        echo "selected";
                                    } ?>> Inativo </option>
            </select>

            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
        </div>
    </form>
</body>

</html>