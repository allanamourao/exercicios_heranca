<?php

require_once "Produto.php";

class Produtofisico extends Produto{
    private int $peso;

    public function __construct($nome, $preco, $peso){
        parent::__construct($nome, $preco);
        $this->peso = $peso;
    }

    public function mostrarPeso(){
        echo "Peso: " . $this->peso . "<br>";
    }
}

?>