<?php

    SESSION_START();
        if($_SESSION["usuario"]){
            $user = $_SESSION["usuario"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
    <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon">
    <title>Universe Shoes! - Cadastro de Clientes</title>
</head>
<body>
    <form action="insere_cliente.php" method="POST">
        <div id="cadastro">
            <h2>Clientes</h2><br/>
        </div>

        <div id="form">
            <h3>Dados pessoais do cliente</h3>
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="input">
                    <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="rg" name="rg" maxlength="20" placeholder="RG">
                </div>
                <div class="input">
                    <input type="text" id="cpf" name="cpf" maxlength="20" placeholder="CPF">
                </div>
            </fieldset>
           
            <fieldset class="linha">
                <div class="input">
                    <input type="email" id="email" name="email" style="width:32rem" placeholder="E-mail">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="telefone" name="telefone" placeholder="Telefone">
                </div>
                <div class="input">
                    <input type="text" id="celular" name="celular" placeholder="Celular">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    Data de nascimento<input type="date" id="dtnasc" name="dtnasc">
                </div>
                <div class="input">
                    Gênero<input type="text" id="genero" name="genero" maxlength="1" placeholder="(F/M)">
                </div>
            </fieldset>
            <h3>Preferências de calçado</h3>
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="tamanho" name="tamanho" placeholder="N° do calçado">
                </div>
                <div class="input">
                    <input type="text" id="corfav" name="corfav" placeholder="Cor favorita">
                </div>
            </fieldset>

            <button class="cadastrar" type="submit" name="submit">Cadastrar</button>
            <a class="cadastrar cadastra-link" href="lista_cliente.php">Listar Clientes</a>
        </div>
    </form>    
    <a class="cadastrar cadastra-link" href="../../pages/menuuser.php">Voltar ao Menu</a>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../../index.php';
            </script>";
    }
?>