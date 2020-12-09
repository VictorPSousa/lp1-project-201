<?php
    if ($_POST['nome'] != ""){
        include_once '../../pages/conexao.php';

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

        $sql = "insert into tbcliente(nome,sobrenome,rg,cpf,email,telefone,celular,dtnasc,genero,tamanho,corfav) 
        values ('$nome','$sobrenome','$rg','$cpf','$email','$telefone','$celular','$dtnasc','$genero','$tamanho','$corfav')";

        $query = mysqli_query($conn,$sql);

        echo  "<script>
                alert('O cliente foi cadastrado!');
                location.href='cadastra_cliente.php'
               </script>";
    }else{
        echo  "<script>
                alert('Erro! Os dados não foram cadastrados.');
                location.href='cadastra_cliente.php'
               </script>";
    }
?>