<?php

require_once "Livro.php";
require_once "Revista.php";

$livro = new Livro("Memórias Póstumas", 1881, "Machado de Assis");
$livro->mostrarTitulo();
$livro->getAnoPublicacao();
$livro->mostrarLivro();

echo "<br>";

$revista = new Revista("Ciência da Informação", 2011, 1);
$revista->mostrarTitulo();
$revista->getAnoPublicacao();
$revista->mostrarRevista();

?>