<?php
class Login {
    private $login;
    private $senha;
    private $tentativas;
    private $limiteTentativas;

    public function __construct($tentativas, $login, $senha) {
        $this->login = $login;
        $this->senha = $senha;
        $this->tentativas = $tentativas;
        $this->limiteTentativas = 3;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getLimiteTentativas() {
        return $this->limiteTentativas;
    }

    public function verificarLimiteTentativas() {
        if ($this->tentativas >= $this->limiteTentativas) {
            return true;
        }
        return false;
    }

    public function verificarCredenciais() {
        return $this->login === "carolinyGabriel" && $this->senha === "12345";
    }    

    
}