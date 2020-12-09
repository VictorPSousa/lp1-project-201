<?php
    if ($_POST['nome_func'] != ""){
        include_once '../../pages/conexao.php';

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

        $sql = "insert into tbfuncionario(nome_func,sobrenome_func,dtnasc_func,cpf_func,email_func,tel_func,cel_func,cep,rua,bairro,numero,complemento,genero_func,dtcontratacao)
        values ('$nome_func','$sobrenome_func','$dtnasc_func','$cpf_func','$email_func','$tel_func','$cel_func','$cep','$rua','$bairro','$numero', '$complemento', '$genero_func','$dtcontratacao')";

        $query = mysqli_query($conn,$sql);

        echo  "<script>
                alert('O funcionário foi cadastrado!');
                location.href='cadastra_func.php'
               </script>";
    }else{
        echo  "<script>
                alert('Erro! Os dados não foram cadastrados.');
                location.href='cadastra_func.php'
               </script>";
    }
?>