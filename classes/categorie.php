<?php

class Categoria {

    private $nome;
    private $icona;

    public function __construct($nome, $icona) {
        $this->nome = $nome;
        $this->icona = $icona;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIcona() {
        return $this->icona;
    }


}
