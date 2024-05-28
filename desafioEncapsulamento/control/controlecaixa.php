<?php
    class ControleCaixa{
        private $operadores;
        private $entrada;
        private $saida;
    //método automático
    public function __construct(){ 
        echo "Mercadinho Zé das Couves <br>";
        echo "Data: ".date('d/m/Y')."<br>";
        $this->teste(); //quando não há instanciamento, é necessário utilizar o this, ou seja, quando quero usar/chamar algo dentro da própria função. se eu utilizar em outro arquivo do mesmo projeto, como em caixageral.php, por exemplo, não será necessário utilizar o this, mas apenas a variável de instanciamento (que nesse projeto é $dados, que está no arquivo caixageral.php)
    }
    public function teste(){
        echo "<h1> IF - Guarulhos </h1>";
    }
    public function setNome($nm){ //método que guarda a informação em operadores, mas a partir de uma variável ($nm), para proteger $operadores.
        $this->operadores = $nm;
    }
    public function getNome(){
        return $this->operadores; //aqui é feito o set e em seguida o get, mas uma boa prática é fazer todos os sets e depois os gets
    }

    public function setEntrada($ent){ 
        $this->entrada = $ent;
    }

    public function setSaida($sai){ 
        $this->saida = $sai;
    }

    public function getEntrada(){
        return $this->entrada;
    }
    
    public function getSaida(){
        return $this->saida;
    }
    
    public function caixas($no, $ent, $sai){
        $this->setNome($no);
        $this->setEntrada($ent);
        $this->setSaida($sai);
        $total = $this->getEntrada() - $this->getSaida();
        echo "<br> Operador: ".$this->getNome()."<br> Total: ".$total."<br><br>";
    }
    }
?>