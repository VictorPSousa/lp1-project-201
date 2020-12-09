<?php
    if ($_POST['referencia'] != ""){
        include_once '../../pages/conexao.php';

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

        $sql = "insert into tbproduto(referencia,quantidade,nome_prod,marca,ocasiao,descricao,genero,material,pisada,origem,garantia)
        values ('$referencia','$quantidade','$nome_prod','$marca','$ocasiao','$descricao','$genero','$material','$pisada','$origem','$garantia')";

        $query = mysqli_query($conn,$sql);

        echo  "<script>
                alert('O produto foi cadastrado!');
                location.href='cadastra_produto.php'
               </script>";
    }else{
        echo  "<script>
                alert('Erro! Os dados não foram cadastrados.');
                location.href='cadastra_produto.php'
               </script>";
    }
?>