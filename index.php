<?php 

require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Categoria.php';


$categoriaCane = new Categoria('Cane', '<i class="fa-solid fa-dog"></i>');
$categoriaGatto = new Categoria('Gatto' , '<i class="fa-solid fa-cat"></i>');
$categoriaUccelli = new Categoria('Uccelli' , '<i class="fa-solid fa-dove"></i>');
$categoriaPesci = new Categoria('Pesci', '<i class="fa-solid fa-fish"></i>');



?>