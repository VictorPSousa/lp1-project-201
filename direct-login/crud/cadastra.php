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
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <?php
        if($_POST['funcionario'] != ""){
            $funcionario = $_POST['funcionario'];
            $endereco = $_POST['endereco'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
            $nomedamae = $_POST['nomedamae'];
            $nomedopai = $_POST['nomedopai'];

            $sql = "INSERT INTO tbfuncionario(funcionario, endereco, bairro, cidade, uf, nomedamae, nomedopai) VALUES ('$funcionario','$endereco','$bairro','$cidade','$uf','$nomedamae','$nomedopai')";

            $query = mysqli_query($conn, $sql);
            
            echo "<script>
                    alert('Dados cadastrados com sucesso!');
                    window.location.href='../menu.php'
                </script>";
        }else{
            echo "<script>
                    alert('ERRO: Não foi possível cadastrar!');
                    window.location.href='../menu.php'
                </script>";
        }
    ?>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../index.php';
            </script>";
    }
?>