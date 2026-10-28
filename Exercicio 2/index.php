<?php

require_once "Carro.php";
require_once "Moto.php";

$carro = new Carro("Chevrolet", 2011, 4);
$carro->apresentarVeiculo();
$carro->exibirInformacoes();
$carro->mostrarCarro();

echo "<br>";

$moto = new Moto("Honda", 2026, 150);
$moto->apresentarVeiculo();
$moto->exibirInformacoes();
$moto->mostrarMoto();

?>