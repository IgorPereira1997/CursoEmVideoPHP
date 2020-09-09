<?php
    require_once 'Aluno.php';
class Professor extends Aluno{
    private $especialidade, $salario;
    
    function __construct($nome, $idade, $sexo) {
        parent::__construct($nome, $idade, $sexo);
    }
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function receberAum($valor){
        if($valor<0){
            echo "<h2>Erro! Você está diminuindo salário!!!</h2>";
        } else {
            $this->setSalario($this->getSalario()+$valor);
        }
    }
    
}
