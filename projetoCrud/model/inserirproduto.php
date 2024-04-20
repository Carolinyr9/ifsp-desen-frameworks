<?php
    if($_POST['cxproduto']!=""){
        include_once '../factory/conexao.php';
        $produto = $_POST['cxproduto'];
        $datavalidade = $_POST['cxdatavalidade'];
        $quantidade = $_POST['cxquantidade'];
        $valor = $_POST['cxvalor'];
        $sql = "INSERT INTO tbproduto (produto, datavalidade, qtde, valor) values ('$produto', '$datavalidade', '$quantidade', '$valor')";
        $query = mysqli_query($conn, $sql);
        echo "<script>alert('Dados cadastrados com sucesso');</script>";
    }else{
        echo "<script>alert('Dados não cadastrado');</script>";
    }
?>