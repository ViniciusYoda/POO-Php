<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa {

    private $matricula;
    private $curso;

    public function pagarMensalidade() {
        echo "<p>Pagando mensalidade do aluno {$this->getNome()}</p>";
    }

    public function cancelarMatricula() {
        echo "<p>Matrícula será cancelada</p>";
    }

    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}