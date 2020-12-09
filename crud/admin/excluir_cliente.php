<?php

    include_once '../../pages/conexao.php';

    $cod = $_GET["id"];

    $excluir = "DELETE FROM tbcliente WHERE id = '$cod'";
    $executar = mysqli_query($conn, $excluir);

    if($executar){
        echo "<script>
                alert('Cliente excluído com sucesso!');
                window.location.href='lista_cliente.php'
            </script>";
    }else{
        echo "<script>
                alert('Cliente não excluído!');
                window.location.href='lista_cliente.php'
            </script>";
    }

?>