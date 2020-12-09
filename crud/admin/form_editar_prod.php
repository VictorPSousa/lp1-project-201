<?php
    SESSION_START();
        if($_SESSION["usuario"] && isset($_SESSION["adm"])){
            $user = $_SESSION["usuario"];
            include_once '../../pages/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <title>Universe Shoes! - Editar Produto</title>

</head>
    
<body>
    <form action="editar_produto.php" method="POST">
        <div id="cadastro">
            <h2>Editar Produtos</h2><br/>
        </div>  
            
        <?php 

        $cod = $_GET["id"];
        $consulta = "SELECT *FROM tbproduto WHERE id_prod = '$cod'";
        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);

        while ($linha = mysqli_fetch_array($executar)) {
        ?>

        <div id="form">
            <h3>Alterar dados do produto ID <?= $linha['id_prod'] ?></h3>
            <div class="input"><input type="hidden" name="id_prod" value="<?= $linha['id_prod'] ?>" ></div>
           
            <fieldset class="linha">
                <div class="input">
                    Referência<input type="text" id="referencia" name="referencia" value="<?= $linha['referencia'] ?>">
                </div>
                <div class="input">
                    Quantidade<input type="text" id="quantidade" name="quantidade" value="<?= $linha['quantidade'] ?>">
                </div>
            </fieldset>
            
            <fieldset class="linha">
                <div class="input">
                    Nome do produto<input type="text" id="nome_prod" name="nome_prod" value="<?= $linha['nome_prod'] ?>">
                </div>
                <div class="input">
                    Marca<input type="text" id="marca" name="marca" value="<?= $linha['marca'] ?>">
                </div>
            </fieldset>
           
            <fieldset class="linha">
                <div class="input">
                    Descrição<input type="text" id="descricao" name="descricao" style="width:32rem" value="<?= $linha['descricao'] ?>">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    Ocasião<input type="text" id="ocasiao" name="ocasiao" value="<?= $linha['ocasiao'] ?>">
                </div>
                <div class="input">
                    Gênero(F/M/U)<input type="text" id="genero" name="genero" maxlength="1" value="<?= $linha['genero'] ?>">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    Material<input type="text" id="material" name="material" value="<?= $linha['material'] ?>">
                </div>
                <div class="input">
                    Pisada<input type="text" id="pisada" name="pisada" value="<?= $linha['pisada'] ?>">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    Origem<input type="text" id="origem" name="origem" value="<?= $linha['origem'] ?>">
                </div>
                <div class="input">
                    Garantia<input type="text" id="garantia" name="garantia" value="<?= $linha['garantia'] ?>">
                </div>
            </fieldset>
            <button class="cadastrar" type="submit" name="button">Editar</button>
        </div>
    </form>    
    <a class="cadastrar cadastra-link" href="lista_produto.php">Voltar a lista</a>
    <?php } ?>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../../index.php';
            </script>";
    }
?>