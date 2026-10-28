<?php

require_once "Cachorro.php";
require_once "Gato.php";

$cachorro = new Cachorro("Théo", 3, "Vira-lata");
$cachorro->mostrarNome();
$cachorro->mostrarIdade();
$cachorro->mostrarRaca();
$cachorro->latir();

echo "<br>";

$gato = new Gato("McQueen", 1, "Laranja");
$gato->mostrarNome();
$gato->mostrarIdade();
$gato->mostrarCor();
$gato->Miar();

?>