<?php

class Publicacao{
    protected string $titulo;
    private int $anoPublicacao;

    public function __construct($titulo, $anoPublicacao){
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
    }
    
    public function getAnoPublicacao(){
        return $this->anoPublicacao;
    }

    public function mostrarTitulo(){
        echo "O título é " . $this->titulo . "<br>";
        echo "O ano de publicação é " . $this->anoPublicacao . "<br>";
    }
}

?>