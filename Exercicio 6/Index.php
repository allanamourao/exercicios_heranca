<?php

require_once "Produtofisico.php";
require_once "Produtodigital.php";

$produtofisico = new Produtofisico("Notebook", 5000, 1);
$produtofisico->mostrarProduto();
$produtofisico->mostrarPeso();

echo "<br>";

$produtodigital = new Produtodigital("Software", 2000, 1);
$produtodigital->mostrarProduto();
$produtodigital->mostrarTamanho();

?>