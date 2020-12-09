<?php

    include_once '../../pages/conexao.php';

    $cod = $_GET["id"];

    $excluir = "DELETE FROM tbfuncionario WHERE id_func = '$cod'";
    $executar = mysqli_query($conn, $excluir);

    if($executar){
        echo "<script>
                alert('Funcionário excluído com sucesso!');
                window.location.href='lista_func.php'
            </script>";
    }else{
        echo "<script>
                alert('Funcionário não excluído!');
                window.location.href='lista_func.php'
            </script>";
    }

?>