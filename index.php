<?php 

require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/categorie.php';
require_once __DIR__ . '/classes/cibo.php';
require_once __DIR__ . '/classes/giochi.php';
require_once __DIR__ . '/classes/accessori.php';


$categoriaCane = new Categoria('Cane', '<i class="fa-solid fa-dog"></i>');
$categoriaGatto = new Categoria('Gatto' , '<i class="fa-solid fa-cat"></i>');
$categoriaUccelli = new Categoria('Uccelli' , '<i class="fa-solid fa-dove"></i>');
$categoriaPesci = new Categoria('Pesci', '<i class="fa-solid fa-fish"></i>');

$ciboCaneUno = new Cibo (
    'Royal Canin Medium Adult',
    43.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg', 'Cibo', $categoriaCane, '545g', 'Prosciutto, Riso'

);

// echo var_dump($ciboCaneUno);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
    <h1>Boolshop</h1>
</header>


<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Prodotti</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $ciboCaneUno->getImmagine(); ?>" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $ciboCaneUno->getTitolo(); ?></h5>

                        <p class="card-text"><?php echo $ciboCaneUno->getCategoria()->getNome() . $ciboCaneUno->getCategoria()->getIcona(); ?></p>
                        <p class="card-text"><?php ; ?></p>
                        
                    <p class="card-text">Prezzo: <?php echo $ciboCaneUno->getPrezzo(); ?></p>
                    <p class="card-text">Peso Netto: <?php echo $ciboCaneUno->getPesoNetto(); ?></p>
                    <p class="card-text">Ingredienti: <?php echo $ciboCaneUno->getIngredienti(); ?></p>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>