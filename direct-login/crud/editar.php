<?php

    include_once 'conexao.php';

    $cod = $_POST["cod"];
    $nome = $_POST["nome"];
    $endereco = $_POST["end"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $nome_mae = $_POST["nmmae"];
    $nome_pai = $_POST["nmpai"];

    $alterar = "UPDATE tbfuncionario SET
        funcionario = '$nome',
        endereco = '$endereco',
        bairro = '$bairro',
        cidade = '$cidade',
        uf = '$uf',
        nomedamae = '$nome_mae',
        nomedopai = '$nome_pai'
        WHERE codigo = '$cod';
    ";

    $executar = mysqli_query($conn, $alterar);

    if($alterar){
        echo "<script>
                alert('Dados alterados com sucesso!');
                window.location.href='../'
            </script>";
    }else{
        echo "<script>
                alert('ERRO: Dados não alterados.');
                window.location.href='../'
            </script>";
    }

?>