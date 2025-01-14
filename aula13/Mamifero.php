<?php
require_once 'Animal13.php';

class Mamifero extends Animal13 {
    
    protected $corPelo;

    public function emitirSom() {
        echo "<p>Som de mamífero</p>";
    }

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}