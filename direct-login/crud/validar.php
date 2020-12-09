<?php

    include_once('conexao.php');

    SESSION_START();
    $login = isset($_POST["login"]) ? strtolower($_POST["login"]) : ""; 
    $senha = isset($_POST["senha"]) ? md5($_POST["senha"]) : "";

    $log = mysqli_query($conn, "SELECT * FROM `tblogin` WHERE `usuario` = '$login' AND `senha` = '$senha'") or die(mysqli_error(""));
    
    $linha = mysqli_fetch_array($log);
    $id = $linha['id_login'];
    
    $perfil = mysqli_query($conn, "SELECT `tipo` FROM `tblogin` WHERE `id_login` = '$id'") or die(mysqli_error(""));
    $tipo = mysqli_fetch_array($perfil);
    
    if($login == "" || $senha == ""){
        echo "<script>
                alert('Acesso restrito! Efetue o Login.');
                window.location.href = '../';
            </script>";
    }
    
    if($login != $linha["usuario"] && $senha != $linha["senha"]){
        echo "<script>
                alert('Acesso restrito! Efetue o Login.');
                window.location.href = '../';
            </script>";
    }
    
    if($login == $linha["usuario"] && $senha == $linha["senha"] && $tipo['tipo'] == "adm"){
        $_SESSION["usuario"] =  $linha["nome_usuario"];
        $_SESSION["adm"] = TRUE;
        echo "<script>
                alert('Login realizado com sucesso!');
                window.location.href = '../pages/menu.php';
            </script>";
    }
    if($login == $linha["usuario"] && $senha == $linha["senha"] && $tipo['tipo'] == "user"){
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