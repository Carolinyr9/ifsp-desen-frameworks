<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/estilo.css">
    <title>Login</title>
</head>
<body>
    <div class="card">
        <h2>Login</h2>

        <?php
            include_once "controller/controlLogin.php";

            // Verifica se o formulário foi submetido
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $login = $_POST["login"];
                $senha = $_POST["senha"];

                $controleLogin = new ControlLogin($login, $senha);

                // Verifica as credenciais
                $controleLogin->verificarCredenciais();
            }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="login">Usuário</label><br>
            <input type="text" id="login" name="login"><br><br>
            <label for="senha">Senha</label><br>
            <input type="password" id="senha" name="senha"><br><br>
            <input type="submit" value="Enviar" id="btnSubmit">
        </form>
    </div>
</body>
</html>
