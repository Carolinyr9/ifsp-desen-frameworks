<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloCadastro.css">
    <title>Exibir Produtos</title>
</head>
<body> 
    <h1>Listagem dos Produtos</h1>
    <?php 
        include_once '../factory/conexao.php';
        $consultar = "select * from tbproduto";
        $executar = mysqli_query($conn, $consultar);

        while($linha = mysqli_fetch_array($executar)){        
    ?>
    
    <form action="" method="post">
        <label>
            Produto:
            <input type="text" name="cxproduto" value="<?php echo $linha["produto"] ?>">           
        </label>
        <label>
            Data de validade:
            <input type="date" name="cxdatavalidade" value="<?php echo $linha["datavalidade"] ?>">
        </label>
        <label>
            Quantidade:
            <input type="number" name="cxquantidade" value="<?php echo $linha["qtde"] ?>">
        </label>
        <label>
            Valor:
            <input type="text" name="cxvalor" value="<?php echo $linha["valor"] ?>">
        </label>
        <a href="excluirproduto.php?id=<?php echo $linha['cod'];?>">Excluir produto acima</a>
    </form><br>
    

    <?php } ?>
    <div class="botoes">
        <a href="../view/cadastroproduto.php">
            Voltar
        </a>
    </div>

</body>
</html>