<?php

    include_once '../../pages/conexao.php';
    $cod = $_POST["id_prod"];
    $referencia = $_POST["referencia"];
    $quantidade = $_POST["quantidade"];
    $nome_prod = $_POST["nome_prod"];
    $marca = $_POST["marca"];
    $ocasiao = $_POST["ocasiao"];
    $descricao = $_POST["descricao"];
    $genero = $_POST["genero"];
    $material = $_POST["material"];
    $pisada = $_POST["pisada"];
    $origem = $_POST["origem"];
    $garantia = $_POST["garantia"];

    $alterar = "UPDATE tbproduto SET
        referencia = '$referencia',
        quantidade = '$quantidade',
        nome_prod = '$nome_prod',
        marca = '$marca',
        ocasiao = '$ocasiao',
        descricao = '$descricao',
        genero = '$genero',
        material = '$material',
        pisada = '$pisada',
        origem = '$origem',
        garantia = '$garantia'
        WHERE id_prod = '$cod';
    ";

    $executar = mysqli_query($conn, $alterar);

    if($alterar){
        echo "<script>
                alert('Dados de produto alterados com sucesso!');
                window.location.href='lista_produto.php'
            </script>";
    }else{
        echo "<script>
                alert('Falha! Não foi possível editar os dados do produto');
                window.location.href='lista_produto.php'
            </script>";
    }

?>