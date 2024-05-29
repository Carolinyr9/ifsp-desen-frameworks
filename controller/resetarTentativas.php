<?php
    session_start(); 

    $_SESSION['tentativas'] = 0;

    header("Location: ../index.php");
    exit;
?>