<?php
    include_once '../factory/conexao.php';
    $cod = $_GET["id"];
    $excluir = "delete from tbproduto where cod='$cod'";
    $executar = mysqli_query($conn,$excluir);
    
    if($executar){
        echo "<script>alert('Produto excluido com sucesso');</script>";
        echo "
            <a href='../model/listarproduto.php'>Voltar</a>";
    } else {
        echo "<script>alert('Dado não encontrado')</script>;";
    }

?>