<?php

    include_once '../../pages/conexao.php';

    $cod = $_GET["id"];

    $excluir = "DELETE FROM tbproduto WHERE id_prod = '$cod'";
    $executar = mysqli_query($conn, $excluir);

    if($executar){
        echo "<script>
                alert('Produto excluído com sucesso!');
                window.location.href='lista_produto.php'
            </script>";
    }else{
        echo "<script>
                alert('Produto não excluído!');
                window.location.href='lista_produto.php'
            </script>";
    }

?>