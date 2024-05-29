<?php
    class ControleCaixa{
        private $operadores;
        private $entrada;
        private $saida;

    public function __construct(){ 
        echo "Mercadinho Zé das Couves <br>";
        echo "Data: ".date('d/m/Y')."<br>";
        $this->teste(); 
    }
    public function teste(){
        echo "<h1> IF - Guarulhos </h1>";
    }
    public function setNome($nm){
        $this->operadores = $nm;
    }
    public function getNome(){
        return $this->operadores; 
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