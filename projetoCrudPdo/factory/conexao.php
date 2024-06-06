<?php
    // Responsável por gerenciar a conexão com um banco de dados MySQL.
    class Caminho{
        public static $usuario = "root";
        public static $senha = "root";
        public static $connect = null;

        private static function Conectar(){
            try {
                /*  Self é usado para acessar variáveis e métodos estáticos dentro da própria classe. É necessário porque, ao contrário dos membros não estáticos que são acessados por meio da palavra-chave $this, membros estáticos pertencem à classe e não a uma instância específica.
                    Problemas que poderiam ser causados ao não usar self:
                    -  PHP geraria um erro de indefinição de variável;
                    - As variáveis $usuario e $senha não são globais ou locais dentro do método, então elas não existem nesse contexto sem self::;
                    - Não usar self comprometeria a clareza e a estrutura do código, tornando-o confuso e mais difícil de manter.
                */
                self::$connect = new PDO('mysql:
                host=localhost;
                dbname=bdcadastro;',
                self::$usuario,self::$senha);
            } catch (Exception $ex) {
                echo 'Mensagem: ' .$ex->getMessage(); // Captura erros 
                die; // Termina a execução do script.
            }
            return self::$connect; // Retorna a conexão estabelecida.
        }
        
        public function getConn(){
            return self::Conectar();
        }
    }
?>