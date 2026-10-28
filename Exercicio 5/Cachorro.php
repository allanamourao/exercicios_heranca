<?php

require_once "Animal.php";

class Cachorro extends Animal{
    private string $raca;

    public function __construct($nome, $idade, $raca){
        parent::__construct($nome, $idade);
        $this->raca = $raca;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function mostrarRaca(){
        echo "Raça: " . $this->raca . "<br>";
    }

    public function latir(){
        echo "AuAuAuuu <br>";
    }
}

?>