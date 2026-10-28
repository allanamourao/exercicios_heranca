<?php

require_once "Gerente.php";
require_once "Desenvolvedor.php";

$gerente = new Gerente("Melissa", 3500, "Diretoria");
$gerente->exibirInformacoes();
$gerente->gerenciarEquipe();

echo "<br>";

$desenvolvedor = new Desenvolvedor("Pietro", 4000, "Python");
$desenvolvedor->exibirInformacoes();
$desenvolvedor->Programar();

?>