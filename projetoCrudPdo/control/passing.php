<?php 
    // A classe Passing herda os atributos de DadoGeral e passa a ser responsável por recolher e alterar as informações dos atributos
    require_once "dadogeral.php"; // Se o arquivo não puder ser encontrado ou incluído, o PHP emitirá um erro fatal (E_COMPILE_ERROR), e o script será interrompido.
    class Passing extends DadoGeral{
        public function setNome($nm){
            $this->nome=$nm;
        }

        public function setTelefone($tl){
            $this->telefone=$tl;
        }

        public function setEmail($em){
            $this->email=$em;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getTelefone(){
            return $this->telefone;
        }
    }
?>