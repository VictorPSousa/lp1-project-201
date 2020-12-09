<?php

    include_once '../../pages/conexao.php';
    $cod = $_POST["id_func"];
    $nome_func = $_POST["nome_func"];
    $sobrenome_func = $_POST["sobrenome_func"];
    $dtnasc_func = $_POST["dtnasc_func"];
    $cpf_func = $_POST["cpf_func"];
    $email_func = $_POST["email_func"];
    $tel_func = $_POST["tel_func"];
    $cel_func = $_POST["cel_func"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $genero_func = $_POST["genero_func"];
    $dtcontratacao = $_POST["dtcontratacao"];

    $alterar = "UPDATE tbfuncionario SET
        nome_func = '$nome_func',
        sobrenome_func = '$sobrenome_func',
        dtnasc_func = '$dtnasc_func',
        cpf_func = '$cpf_func',
        email_func = '$email_func',
        tel_func = '$tel_func',
        cel_func = '$cel_func',
        cep = '$cep',
        rua = '$rua',
        bairro = '$bairro',
        numero = '$numero',
        complemento = '$complemento',
        genero_func = '$genero_func',
        dtcontratacao = '$dtcontratacao'
        WHERE id_func = '$cod';
    ";

    $executar = mysqli_query($conn, $alterar);

    if($alterar){
        echo "<script>
                alert('Os dados do funcionário foram alterados com sucesso!');
                window.location.href='lista_func.php'
            </script>";
    }else{
        echo "<script>
                alert('Falha! Não foi possível editar os dados do funcionário');
                window.location.href='lista_func.php'
            </script>";
    }

?>