<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao {

    private $espectador;
    private $filme;

    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porc) {
        $nota = 0;
        if ($porc <= 20) {
            $nota = 3;
        } elseif ($porc <= 50) {
            $nota = 5;
        } elseif ($porc <= 90) {
            $nota = 8;
        } else {
            $nota = 10;
        }
        $this->filme->setAvaliacao($nota);
    }

    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }
}