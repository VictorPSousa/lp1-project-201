<?php
    SESSION_START();
    $login = isset($_POST["login"])?strtolower($_POST["login"]):"";
    $senha = isset($_POST["senha"])?md5($_POST["senha"]):"";
    $tipo = isset($_POST["tipo"])?strtolower($_POST["tipo"]):"";
    include_once 'conexao.php';
 
    $log = mysqli_query($conn, "select *from tblogin where usuario='$login' and senha = '$senha' and tipo = '$tipo'") or die(mysql_error());
    $linha = mysqli_fetch_array($log);

    if($login == "" || $senha == ""){
        echo "<script>
                alert('Campos vazios, acesse com login e senha');
                window.location.href = '../';
            </script>";
    }    
    if($login == $linha["usuario"] && $senha == $linha["senha"] && $tipo == "adm"){
        $_SESSION["usuario"] =  $linha["nome_usuario"];
        $_SESSION["adm"] = TRUE;
        echo "<script>
                alert('Login realizado com sucesso!');
                window.location.href = '../pages/menu.php';
            </script>";
    }
    if($login == $linha["usuario"] && $senha == $linha["senha"] && $tipo== "user"){
        $_SESSION["usuario"] =  $linha["nome_usuario"];
        echo "<script>
                alert('Login realizado com sucesso!');
                window.location.href = '../pages/menuuser.php';
            </script>";
    }else{
        echo "<script>
                alert('Acesso restrito! Efetue o Login.');
                window.location.href = '../';
            </script>";
    }


?>