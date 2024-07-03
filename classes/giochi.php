<?php

require_once __DIR__ . '/Prodotto.php';

Class Giochi extends Prodotto {
    
    private $caratteristiche;
    private $dimensioni;
    
    public function __construct($titolo, $prezzo, $immagine, $tipo, $categoria, $caratteristiche, $dimensioni) {
        parent::__construct($titolo, $prezzo, $immagine, $tipo, $categoria);
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }

}