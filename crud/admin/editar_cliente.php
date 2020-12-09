<?php

    include_once '../../pages/conexao.php';
    $cod = $_POST["id"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $rg = $_POST["rg"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $dtnasc = $_POST["dtnasc"];
    $genero = $_POST["genero"];
    $tamanho = $_POST["tamanho"];
    $corfav = $_POST["corfav"];

    $alterar = "UPDATE tbcliente SET
        nome = '$nome',
        sobrenome = '$sobrenome',
        rg = '$rg',
        cpf = '$cpf',
        email = '$email',
        telefone = '$telefone',
        celular = '$celular',
        dtnasc = '$dtnasc',
        genero = '$genero',
        tamanho = '$tamanho',
        corfav = '$corfav'
        WHERE id = '$cod';
    ";

    $executar = mysqli_query($conn, $alterar);

    if($alterar){
        echo "<script>
                alert('Os dados do cliente foram alterados com sucesso!');
                window.location.href='lista_cliente.php'
            </script>";
    }else{
        echo "<script>
                alert('Falha! Não foi possível editar os dados do cliente');
                window.location.href='lista_cliente.php'
            </script>";
    }

?>