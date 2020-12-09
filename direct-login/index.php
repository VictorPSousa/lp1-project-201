<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Universe Shoes! - Sua Loja Virtual de Sapatos</title>
</head>
<body>
    <form action="crud/validar.php" method="POST">
        <div id="cadastro">
            <img src="assets/img/logo_transparente.png" alt=""><br/>
        </div>
        <div id="form">
            <fieldset class="linha titulo">
                <h1>Login</h1>
            </fieldset>
            <fieldset class="linha">
                <div class="input">
                    <input type="text"id="login" name="login" style="width:33rem" placeholder="Usuário" required>
                </div>
            </fieldset>
            <fieldset class="linha">
                <div class="input">
                    <input type="password" name="senha" id="senha" style="width:33rem" placeholder="Senha" required>
                </div>
            </fieldset>
        <input type="submit" class="cadastrar" name="submit" value="Entrar" />
    </form>
</body>
</html>