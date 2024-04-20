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
    <h1>Cadastro de Clientes</h1>
    <form action="../model/inserircliente.php" method="post">
        <label>
            Nome:
            <input type="text" name="cxnome">           
        </label>
        <label>
            E-mail:
            <input type="text" name="cxemail">
        </label>
        <input type="submit" value="Gravar">
    </form>

    <h1>Pesquisa por Nome</h1>
    <form action="../model/pesquisanomecliente.php" method="post">
        <label>
            Digite o nome completo:
            <input type="text" name="cxpesquisacliente">
            <input type="submit" value="Pesquisar">
        </label>
    </form>
   
    
    <div class="botoes">
        <a href="../model/listarcliente.php">
            Listar clientes
        </a>
        <a href="../index.php">
            Voltar
        </a>
    </div>

</body>
</html>