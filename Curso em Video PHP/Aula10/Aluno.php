<?php
    require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matr, $curso;
    
    function __construct($nome, $idade, $sexo) {
        parent::__construct($nome, $idade, $sexo);
    }

    function getMatr() {
        return $this->matr;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatr($matr) {
        $this->matr = $matr;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function cancelarMatr(){
        echo "<p>Matrícula será cancelada.</p>";
        $this->setMatr(null);
    }
    
}
