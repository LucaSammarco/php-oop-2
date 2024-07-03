<?php

require_once __DIR__ . '/Prodotto.php';


Class Cibo extends Prodotto {

    private $pesoNetto;
    private $ingredienti;

    public function __construct($titolo, $prezzo, $immagine, $tipo, $categoria, $pesoNetto, $ingredienti) {
        parent::__construct($titolo, $prezzo, $immagine, $tipo, $categoria);
        $this->pesoNetto = $pesoNetto;
        $this->ingredienti = $ingredienti;
    }

    public function getPesoNetto() {
        return $this->pesoNetto;
    }

    public function getIngredienti() {
        return $this->ingredienti;
    }

}