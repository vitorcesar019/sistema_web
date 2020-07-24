<?PHP
require_once("../conexao/banco.php");
require_once("../seguranca.php"); //busca user e senha ativos

$sql = "select * from tb_produto";

$sql = mysqli_query($con, $sql) or die("Erro na sql!");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"">
    <title>Document</title>

    <link href="css/lightbox.css" rel="stylesheet"/>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>

    <style>
        body {
            background-color: #F4F4F4;
        }

        #principal {
            width: 690px;
            height: auto;
            margin: auto;/* de acordo com a qtde de fotos ele aumenta a altura */
        }

        .caixa_fotos {
            width: 200px;
            height: auto;
            margin: 10px;
            float: left;
            /* uma na frente da outra, se nao tiver espaço ele desce para proxima linha */
        }

        .btn_excluir {
            width: 20px;
            height: 20px;
            margin: 5px;
            /* distancia de uma botao ao outro */
            margin-left: 140px;
            float: left;
        }

        .btn_editar {
            width: 20px;
            height: 20px;
            margin: 5px;
            float: left;
        }

        .fotos {
            width: 190px;
            height: 190px;
            float: left;
            border-width: 5px;
            border-color: white;
            border-style: solid;
        }

        .fotos:hover {
            border-color: gold;
        }

        .legenda {
            width: 190px;
            height: 10px;
            margin: 5px;
            float: left;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 14px;
            color: black;
        }
    </style>    
</head>

<body>
    <div id="principal">
        <?php while ($dados = mysqli_fetch_array($sql)) { ?>
            <div class="caixa_fotos">

                <?php if ($usuario == 'adm') { ?>

                    <div class="btn_excluir">
                        <a href="delete_produto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>">
                            <img src="../img/excluir.png">
                        </a>
                    </div>

                    <div class="btn_editar">
                        <a href="form_atualizar_produto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>">
                            <img src="../img/edit.png">
                        </a>
                    </div>
                <?php } ?>

                <a href="<?php echo $dados['pro_foto']; ?>" data-lightbox="produtos" data-title="<?php echo $dados['pro_descricao']; ?>">
                <img src="<?php echo $dados['pro_foto']; ?>" class="fotos">
                </a>

                <div class="legenda">
                    <?php echo $dados['pro_descricao']; ?>
                </div>

            </div>
        <?php } ?>
    </div>
</body>


</html>