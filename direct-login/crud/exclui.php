<?php

    include_once 'conexao.php';

    $cod = $_GET["id"];

    $excluir = "DELETE FROM `tbfuncionario` WHERE `codigo` = '$cod'";
    $executar = mysqli_query($conn, $excluir);

    if($executar){
        echo "<script>
                alert('Funcionário excluído com sucesso!');
                window.location.href='../'
            </script>";
    }else{
        echo "<script>
                alert('ERRO: Funcionário não excluído.');
                window.location.href='../'
            </script>";
    }

?>