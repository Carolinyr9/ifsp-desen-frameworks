<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/estilo.css">
    <title>Login</title>
</head>
<body>
    <div class="card">
        <?php
            // Inclui o arquivo do controle de login
            include_once "../control/controlelogin.php";

            // Inicializa o objeto ControleLogin
            $controleLogin = new ControleLogin();

            // Verifica se o formulário foi submetido
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtém os valores do formulário
                $login = $_POST["login"];
                $senha = $_POST["senha"];

                // Configura os valores no objeto ControleLogin
                $controleLogin->setLogin($login);
                $controleLogin->setSenha($senha);

                // Verifica as credenciais
                if ($controleLogin->verificarCredenciais()) {
                    // Redireciona para a página de sucesso se as credenciais estiverem corretas
                    header("Location: caixageral.php");
                    exit();
                } else {
                    // Exibe uma mensagem de erro se as credenciais estiverem incorretas
                    echo "<p>Credenciais inválidas. Por favor, tente novamente.</p>";
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
