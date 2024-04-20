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
    <h1>Listagem dos clientes</h1>
    <?php 
        include_once '../factory/conexao.php';
        $consultar = "select * from tbcliente";
        $executar = mysqli_query($conn, $consultar);

        while($linha = mysqli_fetch_array($executar)){
    ?> 
    
    <form action="" method="post">
        <label>
            Nome:
            <input type="text" name="cxnome" value="<?php echo $linha["nome"] ?>">           
        </label>
        <label>
            E-mail:
            <input type="text" name="cxemail" value="<?php echo $linha["email"] ?>">
        </label>

        <a href="excluircliente.php?id=<?php echo $linha['cod'];?>">Excluir cliente acima</a>
    </form><br>
    

    <?php } ?>
    
    <div class="botoes">
        <a href="../view/cadastrocliente.php">
            Voltar
        </a>
    </div>
    
</body>
</html>