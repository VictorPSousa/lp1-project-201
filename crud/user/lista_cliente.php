<?php
    SESSION_START();
        if($_SESSION["usuario"]){
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
    <title>Universe Shoes! - Listar Clientes</title>
</head>
<body>
        <div id="cadastro">
            <h2>Lista de Clientes</h2><br/>
        </div>
        
        <?php
            $consulta = "SELECT * FROM tbcliente";
            $executar = mysqli_query($conn, $consulta);
            while($linha = mysqli_fetch_array($executar)){

            echo'<div id="container">';
                 echo'<div id="card">';
                 echo '<h3 style="color: #d50000;">Dados do cliente ID '.$linha['id'].'</h3>';
                 echo '<br/><b>Nome: </b>'.$linha['nome'].' '.$linha['sobrenome'].'<br/>';   
                 echo '<br/><b>RG: </b>'.$linha['rg'].' <b>CPF: </b>'.$linha['cpf'].'<br/>';
                 echo '<br/><b>E-mail: </b>'.$linha['email'].'<br/>';   
                 echo '<br/><b>Telefone: </b>'.$linha['telefone'].'<br/>';
                 echo '<br/><b>Celular: </b>'.$linha['celular'].'<br/>';   
                 echo '<br/><b>Data de Nascimento: </b>'.date('d/m/Y', strtotime($linha['dtnasc'])).'<br/>';   
                 echo '<br/><b>Gênero (F/M): </b>'. $linha['genero'].'<br/>'; 
                 echo '<h3>Preferências de calçados: </h3>';
                 echo '<b>Tamanho do calçado: </b>'. $linha['tamanho'].'<br/>';   
                 echo '<br/><b>Cor favorita: </b>'.$linha['corfav'].'<br/>';   
                 echo '<div class="centro"><br/>';
                 echo '</div><br/><hr/></div>';
            echo '</div>';
            }
        ?>
        <a href="cadastra_cliente.php" class="cadastrar cadastra-link">Voltar</a>

</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../../index.php';
            </script>";
    }
?>