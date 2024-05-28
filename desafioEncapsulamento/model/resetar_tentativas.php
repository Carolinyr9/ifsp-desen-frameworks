<?php
session_start(); // Inicia a sessão para acessar as variáveis de sessão

// Reseta o contador de tentativas
$_SESSION['tentativas'] = 0;

// Redireciona de volta para a página de login
header("Location: ../view/telalogin.php");
exit;
?>