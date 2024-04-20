<?php
    include_once '../factory/conexao.php';
    $cod = $_GET["id"];
    $excluir = "delete from tbcliente where cod='$cod'";
    $executar = mysqli_query($conn,$excluir);
    
    if($executar){
        echo "<script>
            alert('Cliente excluido com sucesso');
            </script>";
        echo "
            <a href='../model/listarcliente.php'>Voltar</a>";
    } else {
        echo "<script>alert('Dado não encontrado')</script>;";
    }

?>