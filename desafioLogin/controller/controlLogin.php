<?php
class ControlLogin {
    private $login;
    private $senha;
    private $tentativas;

    public function __construct($login, $senha) {
        $this->login = $login;
        $this->senha = $senha;

        session_start();
        if (!isset($_SESSION['tentativas'])) {
            $_SESSION['tentativas'] = 1;
        }

        $this->tentativas = $_SESSION['tentativas'];
    } 

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function verificarCredenciais() {
        include_once "model/login.php";
        $login = new Login($this->tentativas, $this->login, $this->senha);

        //Caso o usuário tenha excedido o limite de tentativas
        if($login->verificarLimiteTentativas()) {
            header("Location: view/bloqueado.php");
            exit();
        }
        //Caso as credenciais estejam corretas
        else if($login->verificarCredenciais()) {
            $_SESSION['logged_in'] = true;
            $_SESSION['tentativas'] = 0;
            header("Location: view/home.php");
            exit();
        }
        //Caso as credenciais estejam incorretas
        else {
            $_SESSION['tentativas']++;
            echo "<p>Credenciais inválidas. Você tem " . ($login->getLimiteTentativas() - $this->tentativas) . " tentativa(s) restante(s).</p>";
        }
    }

    public function isLogado() {
        return $_SESSION['logged_in'] === true;
    }

    public function logout() {
        $_SESSION = array();
        session_destroy();
        header("Location: ../index.php");
    }

}