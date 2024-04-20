<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloCadastro.css">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="../model/inserirproduto.php" method="post" style="display: flex; flex-direction: column;">
        <label>
            Produto:
            <input type="text" name="cxproduto">           
        </label>
        <label>
            Data de validade:
            <input type="date" name="cxdatavalidade">
        </label>
        <label>
            Quantidade:
            <input type="number" name="cxquantidade">
        </label>
        <label>
            Valor:
            <input type="text" name="cxvalor">
        </label>
        <input type="submit" value="Gravar">
    </form><br>
    
    <h1>Pesquisa por Nome</h1>
    <form action="../model/pesquisanomeprod.php" method="post">
        <label>
            Digite o nome do produto:
            <input type="text" name="cxpesquisaproduto">
            <input type="submit" value="Pesquisar">
        </label>
    </form>
    
    <div class="botoes">
        <a href="../model/listarproduto.php">
            Listar Produtos
        </a>
        <a href="../index.php">
            Voltar
        </a>
    </div>

</body>
</html>