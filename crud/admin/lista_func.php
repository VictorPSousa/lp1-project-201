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
    <title>Universe Shoes! - Listar Funcionários</title>
</head>
<body>
        <div id="cadastro">
            <h2>Lista de Funcionários</h2><br/>
        </div>
        
        <?php
            $consulta = "SELECT * FROM tbfuncionario";
            $executar = mysqli_query($conn, $consulta);
            while($linha = mysqli_fetch_array($executar)){

            echo'<div id="container">';
                echo'<div id="card">';
                 echo '<h3 style="color: #d50000;">Dados do funcionário ID '.$linha['id_func'].'</h3>';
                 echo '<b>Nome: </b>'.$linha['nome_func'].' '.$linha['sobrenome_func'].'<br/>';   
                 echo '<br/><b>Data de nascimento: </b>'.date('d/m/Y', strtotime($linha['dtnasc_func'])).'<br/>';   
                 echo '<br/><b>CPF: </b>'.$linha['cpf_func'].'<br/>';
                 echo '<br/><b>E-mail: </b>'.$linha['email_func'].'<br/>';   
                 echo '<br/><b>Telefone: </b>'.$linha['tel_func'].'<br/>';
                 echo '<br/><b> Celular: </b>'.$linha['cel_func'].'<br/>'; 
                 echo '<br/><b>CEP: </b>'.$linha['cep'].' - <b>Rua: </b>'.$linha['rua'].'<br/>'; 
                 echo '<br/><b>Bairro: </b>'.$linha['bairro'].'<b> - Complemento: </b>'.$linha['complemento'].'<br/>'; 
                 echo '<br/><b>Gênero (F/M): </b>'. $linha['genero_func'].'<br/>'; 
                 echo '<br/><b>Data de contratação: </b>'.date('d/m/Y', strtotime($linha['dtcontratacao'])).'<br/>';   
                 echo '<div class="centro"><br/>';
                 echo '<a href="form_editar_func.php?id='.$linha['id_func'].'"><button class="button">Editar</button></a>';
                 echo '<a href="excluir_func.php?id='.$linha['id_func'].'"><button class="button">Excluir</button></a>';
                 echo '</div><br/><hr/></div>';
            echo '</div>';
            }
        ?>
        <a href="cadastra_func.php" class="cadastrar cadastra-link">Voltar</a>

</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../../index.php';
            </script>";
    }
?>