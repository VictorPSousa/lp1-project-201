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
    <title>Universe Shoes! - Editar Funcionários</title>
</head>
    
<body>
    <form action="editar_func.php" method="POST">
        <div id="cadastro">
            <h2>Editar Funcionários</h2><br/>
        </div> 
        <?php  

        $cod = $_GET["id"];

        $consulta = "SELECT *FROM tbfuncionario WHERE id_func = '$cod'";
        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);

        while ($linha = mysqli_fetch_array($executar)) {
        ?>
        <div id="form">
            <h3>Dados pessoais do funcionário ID <?= $linha['id_func'] ?></h3>
            <div class="input"><input type="hidden" name="id_func" value="<?= $linha['id_func'] ?>" ></div>
           
            <fieldset class="linha">
                <div class="input">
                    Nome<input type="text" id="nome_func" name="nome_func" placeholder="Nome" value="<?= $linha['nome_func'] ?>">
                </div>
                <div class="input">
                    Sobrenome<input type="text" id="sobrenome_func" name="sobrenome_func" placeholder="Sobrenome" value="<?= $linha['sobrenome_func'] ?>">
                </div>
            </fieldset>
            
            <fieldset class="linha">
                <div class="input">
                    Data de nascimento<input type="date" id="dtnasc_func" name="dtnasc_func" placeholder="Data de nascimento" value="<?= $linha['dtnasc_func'] ?>">
                </div>
                <div class="input">
                    CPF<input type="text" id="cpf_func" name="cpf_func" placeholder="CPF" maxlength="20"  value="<?= $linha['cpf_func'] ?>">
                </div>
            </fieldset>
           
            <fieldset class="linha">
                <div class="input">
                    E-mail<input type="email" id="email_func" name="email_func" style="width:32rem" placeholder="E-mail" value="<?= $linha['email_func'] ?>">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    Telefone<input type="text" id="tel_func" name="tel_func" placeholder="Telefone" value="<?= $linha['tel_func'] ?>">
                </div>
                <div class="input">
                    Celular<input type="text" id="cel_func" name="cel_func" placeholder="Celular" value="<?= $linha['cel_func'] ?>">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    CEP<input type="text" id="cep" name="cep" placeholder="CEP" value="<?= $linha['cep'] ?>">
                </div>
                <div class="input">
                    Rua<input type="text" id="rua" name="rua" placeholder="Rua" value="<?= $linha['rua'] ?>">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    Bairro<input type="text" id="bairro" name="bairro" placeholder="Bairro" value="<?= $linha['bairro'] ?>">
                </div>
                <div class="input">
                    Número<input type="text" id="numero" name="numero" style="width:4em" placeholder="N°" value="<?= $linha['numero'] ?>">
                </div>
                <div class="input">
                   Complemento <input type="text" id="complemento" name="complemento" style="width:9em" placeholder="Complemento" value="<?= $linha['complemento'] ?>">
                </div>
            </fieldset>


            <fieldset class="linha">
                <div class="input">
                   Genero<input type="text" id="genero_func" name="genero_func" maxlength="1" placeholder="Gênero (F/M)" value="<?= $linha['genero_func'] ?>">
                </div>
                <div class="input">
                   Data de contratação <input type="date" id="dtcontratacao" name="dtcontratacao" value="<?= $linha['dtcontratacao'] ?>">
                </div>
            </fieldset>

            <button class="cadastrar" type="submit" name="button">Editar</button>
        </div>
    </form>    
    <a class="cadastrar cadastra-link" href="lista_func.php">Voltar a lista</a>
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