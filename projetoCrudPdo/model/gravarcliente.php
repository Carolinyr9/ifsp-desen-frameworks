<?php
    
    // Se o arquivo não puder ser encontrado ou incluído, o PHP emitirá um aviso (E_WARNING), mas o script continuará a execução.
    include_once "../control/passing.php";
    include_once "../factory/conexao.php";

    $dados = new Passing;

    // Seta os dados recebidos via formulário nas variaveis da classe DadoGeral através de Passing
    $dados->setNome($_POST["cxnome"]);
    $dados->setEmail($_POST["cxemail"]);
    $dados->setTelefone($_POST["cxtelefone"]);

    // Recupera os dados e os atribui às variáveis criadas localmente nesse arquivo
    $nome = $dados->getNome();
    $email = $dados->getEmail();
    $telefone = $dados->getTelefone();


    if ($dados->getNome() != "") { // Se o nome não estiver vazio
        $conn = new Caminho; // Classe responsável pela conexão com o bd
        $query = "insert into tbcliente(nome,telefone,email)
        values
        (:nome,:telefone,:email)"; // A consulta usa placeholders (:nome, :telefone, :email) que serão substituídos pelos valores reais.
        $cadastrar = $conn->getConn()->prepare($query);

        // bindParam é usado para vincular variáveis aos placeholders na consulta preparada. PDO::PARAM_STR indica que os valores são do tipo string.
        $cadastrar->bindParam(':nome',$nome,PDO::PARAM_STR);
        $cadastrar->bindParam(':email',$email,PDO::PARAM_STR);
        $cadastrar->bindParam(':telefone',$telefone,PDO::PARAM_STR);
        $cadastrar->execute(); // Envia a consulta para o banco de dados com os valores vinculados e tenta inserir o novo registro na tabela tbcliente.

        if ($cadastrar->rowCount()) { // rowCount() retorna o número de linhas afetadas pela última instrução SQL. Se for maior que zero, a mensagem "Dados cadastrado com sucesso!" é exibida. 
                echo "Dados cadastrado com sucesso!";  
        } else {
            echo "Dados não cadastrado";
        }
    } else {
        "Campos em branco";
    }
?>