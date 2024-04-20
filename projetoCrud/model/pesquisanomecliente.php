<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloCadastro.css">
    <title>Exibir clientes</title>
</head>
<body>  
    <?php 
        include_once '../factory/conexao.php';

        $pesqnome = $_POST["cxpesquisacliente"];
        $consultar = "select * from tbcliente where nome = '$pesqnome'";
        $executar = mysqli_query($conn, $consultar);

        $linha = mysqli_fetch_array($executar)
        
    ?>
    <h1>Consulta de cliente por Nome</h1>
    <form action="" method="post">
        <label>
            Nome:
            <input type="text" name="cxnome" value="<?php echo $linha["nome"] ?>">           
        </label>
        <label>
            E-mail:
            <input type="text" name="cxemail" value="<?php echo $linha["email"] ?>">
        </label>
    </form><br>

    <div class="botoes">
        <a href="../view/cadastrocliente.php">
            Voltar
        </a>
    </div>
    
</body>
</html>