<?php
require_once 'Pessoa.php';

class Professor extends Pessoa {

    private $especialidade;
    private $salario;

    public function receberAumento($aumento) {
        $this->salario += $aumento;
    }

    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
}