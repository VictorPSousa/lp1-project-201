<?php

    SESSION_START();
    if(isset($_SESSION["usuario"])){
        $user = $_SESSION["usuario"];
        include_once 'conexao.php';
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <title>Universe Shoes! - Listar Funcionários</title>
</head>
<body>
    <div id="listar">
        <div id="cadastro">
            <h2>Funcionários</h2><br/>
        </div>
        
        <?php
            $consulta = "SELECT * FROM tbfuncionario";
            $executar = mysqli_query($conn, $consulta);
            while($linha = mysqli_fetch_array($executar)){
        ?>

        <div id="form">
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="cod" name="cod" value="<?= $linha['codigo'] ?>" style="width:33rem" placeholder="Código" readonly>
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="nome" name="nome" value="<?= $linha['funcionario'] ?>" style="width:33rem" placeholder="Nome" readonly>
                </div>
            </fieldset>
                    
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="end" name="end" value="<?= $linha['endereco'] ?>" style="width:33rem" placeholder="Endereço" readonly>
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="bairro" name="bairro" value="<?= $linha['bairro'] ?>" style="width:33rem" placeholder="Bairro" readonly>
                </div>
            </fieldset>
                    
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="cidade" name="cidade" value="<?= $linha['cidade'] ?>" style="width:33rem" placeholder="Cidade" readonly>
                </div>
            </fieldset>
                    
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="uf" name="uf" value="<?= $linha['uf'] ?>" style="width:33rem" placeholder="UF" readonly>
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="nmmae" name="nmmae" value="<?= $linha['nomedamae'] ?>" style="width:33rem" placeholder="Nome da Mãe" readonly>
                </div>
            </fieldset>
                    
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="nmpai" name="nmpai" value="<?= $linha['nomedopai'] ?>" style="width:33rem" placeholder="Nome do Pai" readonly>
                </div>
            </fieldset><hr/>
        </div>

        <?php
            }
        ?>
        <a href="../pages/menu.php" class="cadastrar cadastra-link">Voltar</a>
    </div>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../index.php';
            </script>";
    }
?>