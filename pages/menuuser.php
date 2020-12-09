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
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" />
    <title>Universe Shoes! - Menu</title>
</head>
<body>
    <div id="menu">
        <h2>Menu de Funcionários</h2><br/>
    </div>
    <div id="form">
        <fieldset class="linha">
            <p>Bem-vinda(o)!  <?= $user ?></p>
        </fieldset>
            <br>
            <fieldset class="linha">
            <div class="input half">
                <a href="../crud/user/cadastra_cliente.php" class="cadastrar cadastra-link">Cadastrar Cliente</a>
            </div>
            <div class="input half">
                <a href="../crud/user/lista_cliente.php" class="cadastrar cadastra-link">Listar Cliente</a>
            </div>
            <div class="input half">
                <a href="../crud/user/lista_produto.php" class="cadastrar cadastra-link">Listar produtos</a>
            </div>
            <div class="input half">
                <a href="../pages/logout.php"  class="cadastrar cadastra-link">Sair</a>
            </div>
        </fieldset>
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