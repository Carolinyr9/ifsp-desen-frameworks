<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/estilo.css">
    <title> Encapsulamento </title>
    <?php include_once "../model/controleCaixa.php"; ?>
</head>
<body>
    <div class="card">
        <?php
            $dado = new ControleCaixa;
            $dado->setNome("Carol Teste");
            echo"Nome: ".$dado->getNome();
            echo "<h1> Segunda Parte </h1>";
            $dado->caixas("Mariana ",800,120);
            $dado->caixas("Mario ",780,110);
        ?>
        <form id="resetForm" action="../controller/resetarTentativas.php" method="post">
            <button type="submit">Retornar para a página de login</button>
        </form>
    </div>
</body>
</html>