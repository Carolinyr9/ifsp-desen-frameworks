<?php

class ControleLogin {
    private $login;
    private $senha;
    private $tentativas = 0;
    private $maxTentativas = 3;

    public function __construct() {
        session_start();
        if (!isset($_SESSION['tentativas'])) {
            $_SESSION['tentativas'] = 0;
        }
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function verificarCredenciais() {
        if ($_SESSION['tentativas'] >= $this->maxTentativas) {
            $this->bloquearConta();
            return false;
        }
    
        if ($this->verificarCredenciaisValidas()) {
            $_SESSION['logged_in'] = true;
            $_SESSION['tentativas'] = 0; 
            return true; 
        } else {
            $this->exibirMensagemCredenciaisInvalidas();
            return false;
        }
    }    

    public function estaLogado() {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }

    public function logout() {
        $_SESSION = array();
        session_destroy();
    }

    private function bloquearConta() {
        header("Location: bloqueado.php"); 
        exit; 
    }

    private function verificarCredenciaisValidas() {
        return $this->login === "carolinyGabriel" && $this->senha === "12345";
    }

    private function exibirMensagemCredenciaisInvalidas() {
        $_SESSION['tentativas']++;
        $tentativasRestantes = $this->maxTentativas - $_SESSION['tentativas'];
        echo "<p>Credenciais inválidas. Você tem {$tentativasRestantes} tentativa(s) restante(s).</p>";
    }
}

?>