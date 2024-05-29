<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/estilo.css">
    <title>Faça seu login!</title>
</head>
<body>
    <div class="card">
        <?php
            include_once "model/controleLogin.php";

            $controleLogin = new ControleLogin();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $login = $_POST["login"];
                $senha = $_POST["senha"];

                $controleLogin->setLogin($login);
                $controleLogin->setSenha($senha);

                if ($controleLogin->verificarCredenciais()) {
                    header("Location: home.php");
                    exit();
                }
            }
        ?>

        <h2>Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="login">Login:</label><br>
            <input type="text" id="login" name="login"><br><br>
            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha"><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
