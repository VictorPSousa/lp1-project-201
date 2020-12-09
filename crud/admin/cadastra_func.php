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
    <title>Universe Shoes! - Cadastro de Funcionários</title>
</head>
<body>
    <form action="insere_func.php" method="POST">
        <div id="cadastro">
            <h2>Funcionários</h2><br/>
        </div>

        <div id="form">
            <h3>Dados pessoais do funcionário</h3>
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="nome_func" name="nome_func" placeholder="Nome">
                </div>
                <div class="input">
                    <input type="text" id="sobrenome_func" name="sobrenome_func" placeholder="Sobrenome">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="genero_func" name="genero_func" maxlength="1" placeholder="Gênero (F/M)">
                </div>
                <div class="input">
                    <input type="text" id="cpf_func" name="cpf_func" maxlength="20" placeholder="CPF">
                </div>
            </fieldset>
           
            <fieldset class="linha">
                <div class="input">
                    <input type="email" id="email_func" name="email_func" style="width:32rem" placeholder="E-mail">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="tel_func" name="tel_func" placeholder="Telefone">
                </div>
                <div class="input">
                    <input type="text" id="cel_func" name="cel_func" placeholder="Celular">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="cep" name="cep" placeholder="CEP">
                </div>
                <div class="input">
                    <input type="text" id="rua" name="rua" placeholder="Rua">
                </div>
            </fieldset>
            
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="bairro" name="bairro" placeholder="Bairro">
                </div>
                <div class="input">
                    <input type="text" id="numero" name="numero" style="width:4em" placeholder="N°">
                </div>
                <div class="input">
                    <input type="text" id="complemento" name="complemento" style="width:9em" placeholder="Complemento">
                </div>
            </fieldset>


            <fieldset class="linha">
                <div class="input">
                Data de nascimento<input type="date" id="dtnasc_func" name="dtnasc_func" placeholder="Data de Nascimento">
                </div>
                <div class="input">
                Data de contratação<input type="date" id="dtcontratacao" name="dtcontratacao" >
                </div>
            </fieldset>

            <button class="cadastrar" type="submit" name="submit">Cadastrar</button>
            <a class="cadastrar cadastra-link" href="lista_func.php">Listar Funcionários</a>
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