<?php
    SESSION_START();
        if($_SESSION["usuario"] && isset($_SESSION["adm"])){
            $user = $_SESSION["usuario"];
            include_once '../../pages/conexao.php' 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <title>Universe Shoes! - Editar Cliente</title>
</head>
    
<body>
    <form action="editar_cliente.php" method="POST">
        <div id="cadastro">
            <h2>Editar cliente</h2><br/>
        </div>  
        <?php 

        $cod = $_GET["id"];
        $consulta = "SELECT *FROM tbcliente WHERE id = '$cod'";
        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);

        while ($linha = mysqli_fetch_array($executar)) {
        ?>
        <div id="form">
            <h3>Dados pessoais do cliente ID <?= $linha['id'] ?></h3>
            <div class="input"><input type="hidden" name="id" value="<?= $linha['id'] ?>" ></div>
           
            <fieldset class="linha">
                <div class="input">
                    Nome<input type="text" id="nome" name="nome" placeholder="Nome" value="<?= $linha['nome'] ?>" >
                </div>
                <div class="input">
                    Sobrenome<input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" value="<?= $linha['sobrenome'] ?>" >
                </div>
            </fieldset>
            
            <fieldset class="linha">
                <div class="input">
                    RG<input type="text" id="rg" name="rg" placeholder="RG" maxlength="20" value="<?= $linha['rg'] ?>" >
                </div>
                <div class="input">
                    CPF<input type="text" id="cpf" name="cpf" placeholder="CPF" maxlength="20"  value="<?= $linha['cpf'] ?>" >
                </div>
            </fieldset>
           
            <fieldset class="linha">
                <div class="input">
                    E-mail<input type="email" id="email" name="email" style="width:32rem" placeholder="E-mail" value="<?= $linha['email'] ?>" >
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    Telefone<input type="text" id="telefone" name="telefone" placeholder="Telefone" value="<?= $linha['telefone'] ?>" >
                </div>
                <div class="input">
                    Celular<input type="text" id="celular" name="celular" placeholder="Celular" value="<?= $linha['celular'] ?>" >
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    Data de nascimento<input type="date" id="dtnasc" name="dtnasc" placeholder="Data de Nascimento" value="<?= $linha['dtnasc'] ?>" >
                </div>
                <div class="input">
                    Gênero<input type="text" id="genero" name="genero" maxlength="1" placeholder="Gênero(F/M)" value="<?= $linha['genero'] ?>" >
                </div>
            </fieldset>
            <h3>Preferências de calçado</h3>
            <fieldset class="linha">
                <div class="input">
                    N° do calçado<input type="text" id="tamanho" name="tamanho" placeholder="N° do calçado" value="<?= $linha['tamanho'] ?>" >
                </div>
                <div class="input">
                    Cor favorita<input type="text" id="corfav" name="corfav" placeholder="Cor favorita" value="<?= $linha['corfav'] ?>" >
                </div>
            </fieldset>      
            <button class="cadastrar" type="submit" name="button">Editar</button>
        </div>
    </form>    
    <a class="cadastrar cadastra-link" href="lista_cliente.php">Voltar a lista</a>
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