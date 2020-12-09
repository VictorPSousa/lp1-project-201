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
    <div id="cadastro">
        <h2>Menu de Funcionários</h2><br/>
    </div>
    <div id="form">
        <fieldset class="linha">
            <p>Bem-vinda(o)!  <?= $user ?></p>
        </fieldset>
        <fieldset class="linha">
            <div class="input half">
                <a href="cadastra.php" class="cadastrar cadastra-link">Cadastro </a>
            </div>
            <div class="input half">
                <a href="logout.php" class="cadastrar cadastra-link">Sair</a>
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