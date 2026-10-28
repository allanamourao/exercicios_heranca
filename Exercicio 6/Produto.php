<?php

class Produto{
    protected string $nome;
    private int $preco;

    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }
    
    public function mostrarProduto(){
        echo "Produto: " . $this->nome . "<br>Preço: " . $this->preco . "<br>";
    }
    
    public function getPreco(){
        return $this->preco;
    }
}

?>