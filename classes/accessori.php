<?php 

require_once __DIR__ . '/Prodotto.php';

Class Accessori extends Prodotto {
    
    private $materiale;
    private $dimensioni;
    
    public function __construct($titolo, $prezzo, $immagine, $tipo, $categoria, $materiale, $dimensioni) {
        parent::__construct($titolo, $prezzo, $immagine, $tipo, $categoria);
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }

    public function getMateriale() {
        return $this->materiale;
    }

    public function getDimensioni() {
        return $this->dimensioni;
    }

}