<?php

    SESSION_START();
    if(isset($_SESSION["usuario"])){
        $user = $_SESSION["usuario"];
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <title>Universe Shoes! - Cadastro de Funcionários</title>
</head>
<body>
    <form action="../crud/cadastra.php" method="POST">
        <div id="cadastro">
            <h2>Cadastro</h2><br/>
        </div>

        <div id="form">
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="funcionario" name="funcionario" style="width:33rem" placeholder="Funcionario">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="endereco" name="endereco" placeholder="Endereço">
                </div>
                <div class="input">
                    <input type="text" id="bairro" name="bairro" placeholder="Bairro">
                </div>
            </fieldset>
           
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade">
                </div>
                <div class="input">
                    <input type="text" id="uf" name="uf" style="width: 3em" placeholder="UF">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="nomedamae" name="nomedamae" placeholder="Nome da mãe">
                </div>
                <div class="input">
                    <input type="text" id="nomedopai" name="nomedopai" placeholder="Nome do pai">
                </div>
            </fieldset>
            <br/>
            <button class="cadastrar" type="submit" name="submit">Cadastrar</button>
        </div>
    </form>    

    <form action="../crud/buscar.php" method="POST">
        <div id="cadastro">
            <h2>Busca</h2><br/>
        </div>
        <div id="form">
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="busca" name="busca" style="width:33rem" placeholder="Digite o nome do funcionário" required>
                </div>
            </fieldset><br/>
            <button type="submit" class="cadastrar">Buscar</button>
        </div>
    </form>

    <a class="cadastrar cadastra-link" href="../crud/lista.php">Listar Funcionários</a>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../index.php';
            </script>";
    }
?>