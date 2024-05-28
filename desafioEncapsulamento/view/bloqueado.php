<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/estilo.css">
    <title>Bloqueado</title>
</head>
<body>
    <div class="card">
        <h1>Você está bloqueado!</h1>
        <p>Você foi bloqueado por tentar fazer login incorretamente 3 vezes.</p>
        <script>
            alert("Você foi bloqueado por tentar fazer login incorretamente 3 vezes.");
        </script>
        <form id="resetForm" action="../model/resetar_tentativas.php"   method="post">
            <button type="submit">Retornar para a página de login</button>
        </form>
    </div>
</body>
</html>