<?php
class ControleLogin {
    private $login;
    private $senha;
    private $tentativas = 0;
    private $maxTentativas = 3;

    public function __construct() {
        session_start(); // Inicia a sessão para armazenar os dados de login
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
        // Verifica se o número máximo de tentativas foi alcançado
        if ($_SESSION['tentativas'] >= $this->maxTentativas) {
            header("Location: bloqueado.php"); // Redireciona para a página bloqueado.php
            exit; // Termina a execução do script após o redirecionamento
        }
    
        // Verifica se o login e a senha correspondem aos valores esperados
        if ($this->login === "carolinyGabriel" && $this->senha === "12345") {
            // Se as credenciais estiverem corretas, armazena na sessão que o usuário está logado
            $_SESSION['logged_in'] = true;
            $_SESSION['tentativas'] = 0; // Reseta o contador de tentativas
            return true; 
        } else {
            // Incrementa o contador de tentativas
            $_SESSION['tentativas']++;
            // Verifica se o número máximo de tentativas foi alcançado após a tentativa atual
            if ($_SESSION['tentativas'] >= $this->maxTentativas) {
                header("Location: bloqueado.php"); // Redireciona para a página bloqueado.php
                exit; // Termina a execução do script após o redirecionamento
            }
            // Exibe uma mensagem de erro se as credenciais estiverem incorretas
            echo "<p>Credenciais inválidas. Você tem " . ($this->maxTentativas - $_SESSION['tentativas']) . " tentativa(s) restante(s).</p>";
            return false;
        }
    }    

    public function estaLogado() {
        // Verifica se o usuário está logado consultando a sessão
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }

    public function logout() {
        // Efetua logout do usuário, destruindo a sessão
        $_SESSION = array();
        session_destroy();
    }
}
?>