<?php
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar!</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }
}