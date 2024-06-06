<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente com PDO</title>
</head>
<body> 
    <!--
    Cria um formulário simples que redireciona para gravarcliente.php
    -->
    <form action="../model/gravarcliente.php" method="POST">
    Nome: <br>
    <input type="text" name="cxnome"/><br/>
    Telefone <br/>
    <input type="text" name="cxtelefone"/><br/>
    E-mail :<br/>
    <input type="text" name="cxemail"/><br/>
    <button>Gravar</button>
    </form>    
</body>
</html>