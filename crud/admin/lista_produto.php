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
    <title>Universe Shoes! - Listar Produtos</title>
</head>
<body>
        <div id="cadastro">
            <h2>Lista de Produtos</h2><br/>
        </div>
        
        <?php
            $consulta = "SELECT * FROM tbproduto";
            $executar = mysqli_query($conn, $consulta);
            while($linha = mysqli_fetch_array($executar)){

            echo'<div id="container">';
                 echo'<div id="card">';
                 echo '<h3 style="color: #d50000;"> Produto ID '.$linha['id_prod'].'</h3>';
                 echo '<b>Referência: </b>'.$linha['referencia'].'<br/>';
                 echo '<br/><b>Quantidade disponível em estoque: </b>'.$linha['quantidade'].'<br/>';   
                 echo '<br/><b>Nome do produto: </b>'.$linha['nome_prod'].'<b> Marca: </b>'.$linha['marca'].'<br/>';  
                 echo '<br/><b>Descrição: </b>'. $linha['descricao'].'<br/>'; 
                 echo '<br/><b>Gênero(F/M): </b>'.$linha['genero'].'<b> Material: </b>'. $linha['material'].'<br/>'; 
                 echo '<br/><b>Ocasião: </b>'.$linha['ocasiao'].'<b> Pisada: </b>'. $linha['pisada'].'<b> Origem: </b>'. $linha['origem'].'<br/>'; 
                 echo '<br/><b>Garantia: </b>'. $linha['garantia'].'<br/>'; 
                 echo '<div class="centro"><br/>';
                 echo '<a href="form_editar_prod.php?id='.$linha['id_prod'].'"><button class="button">Editar</button></a>';
                 echo '<a href="excluir_produto.php?id='.$linha['id_prod'].'"><button class="button">Excluir</button></a>';
                 echo '</div><br/><hr/></div>';
            echo '</div>';
            }
        ?>
        <a href="cadastra_produto.php" class="cadastrar cadastra-link">Voltar</a>

</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../../index.php';
            </script>";
    }
?>