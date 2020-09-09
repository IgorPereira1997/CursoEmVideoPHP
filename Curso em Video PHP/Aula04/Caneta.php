<?php

class Caneta {
    public $modelo; 
    private $cor;
    private $ponta;
    private $tampada;

    public function Caneta($modelo, $cor, $ponta) {
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setPonta($ponta);
        $this->tampar();
    }
    
    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta) {
        $this->ponta = $ponta;
    }
    
    function getCor() {
        return $this->cor;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }
}
