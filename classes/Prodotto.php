<?php

Class Prodotto {


    private $titolo;
    private $prezzo;
    private $immagine;
    private $tipo;
    private $categoria; 

    public function __construct($titolo, $prezzo, $immagine, $tipo, $categoria) {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->tipo = $tipo;
        $this->categoria = $categoria;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getCategoria() {
        return $this->categoria;
    }
}