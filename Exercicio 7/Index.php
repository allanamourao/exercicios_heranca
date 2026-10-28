<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

$contaCorrente = new ContaCorrente("Allana Mourão", 1000, 1505635);
$contaCorrente->mostrarDados();
$contaCorrente->depositar(500);
$contaCorrente->sacar(200);
$contaCorrente->mostrarCartao();

echo "<br>";

$contaPoupanca = new ContaPoupanca("Juliana Gomes", 2000, "Juntar para comprar uma casa.");
$contaPoupanca->mostrarDados();
$contaPoupanca->mostrarObjetivo();

?>