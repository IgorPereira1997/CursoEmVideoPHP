<?php
    require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    private $setor, $trabalhando;
    
    function __construct($nome, $idade, $sexo) {
        parent::__construct($nome, $idade, $sexo);
    }
    
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }

    function mudarTrabalho($novo){
        if($novo === $this->getSetor()){
            echo "<h2>Erro, você não está mudando de trabalho!</h2>";
        } else {
            $this->setSetor($novo);
        }
    }
}
