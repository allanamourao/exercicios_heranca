<?php

class ContaBancaria{
    protected string $titular;
    private int $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function mostrarDados(){
    echo "INFORMAÇÕES DA CONTA<br><br>";
    echo "Titular: " . $this->titular . "<br>";
    echo "Saldo Inicial: R$ " . $this->saldo . "<br>";
    }

    public function depositar($valor){
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor;
            echo "Saldo Atual: " . $this->saldo . "<br>";
        }
    }

    public function sacar($valor){
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo = $this->saldo - $valor;
            echo "Saldo Atual: " . $this->saldo . "<br>";
        }
    }

    public function getSaldo(){
        return $this->saldo;
    }
}
?>