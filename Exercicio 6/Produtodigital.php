<?php

require_once "Produto.php";

class Produtodigital extends Produto{
    private int $tamanhoArquivo;

    public function __construct($nome, $preco, $tamanhoArquivo){
        parent::__construct($nome, $preco);
        $this->tamanhoArquivo = $tamanhoArquivo;
    }

    public function mostrarTamanho(){
        echo "Tamanho: " . $this->tamanhoArquivo . "<br>";
    }
}
?>