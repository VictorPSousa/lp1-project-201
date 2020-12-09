<?php

    SESSION_START();
        if($_SESSION["usuario"] && isset($_SESSION["adm"])){
            $user = $_SESSION["usuario"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
    <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon">
    <title>Universe Shoes! - Cadastro de Produtos</title>
</head>
<body>
    <form action="insere_produto.php" method="POST">
        <div id="cadastro">
            <h2>Produtos</h2><br/>
        </div>

        <div id="form">
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="referencia" name="referencia" placeholder="Referência">
                </div>
                <div class="input">
                    <input type="text" id="quantidade" name="quantidade" placeholder="Quantidade">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="nome_prod" name="nome_prod" placeholder="Nome do produto">
                </div>
                <div class="input">
                    <input type="text" id="marca" name="marca" placeholder="Marca">
                </div>
            </fieldset>
           
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="ocasiao" name="ocasiao" placeholder="Ocasião">
                </div>
                <div class="input">
                    <input type="text" id="genero" name="genero" maxlength="1" placeholder="Gênero(F/M/U)">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="descricao" name="descricao" style="width:32rem" placeholder="Descrição">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="material" name="material" placeholder="Material">
                </div>
                <div class="input">
                    <input type="text" id="pisada" name="pisada" placeholder="Pisada">
                </div>
            </fieldset>
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="origem" name="origem" placeholder="Origem">
                </div>
                <div class="input">
                    <input type="text" id="garantia" name="garantia" placeholder="Garantia">
                </div>
            </fieldset>

            <button class="cadastrar" type="submit" name="submit">Cadastrar</button>
            <a class="cadastrar cadastra-link" href="lista_produto.php">Listar Produtos</a>
        </div>
    </form>    
    <a class="cadastrar cadastra-link" href="../../pages/menu.php">Voltar ao Menu</a>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../../index.php';
            </script>";
    }
?>