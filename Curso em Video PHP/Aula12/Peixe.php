<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    public function alimentar() {
        echo "<h2>Comendo sunbstâncias</h2>";
    }

    public function emitirSom() {
        echo "<h3>Peixe não faz som</h3>";
    }

    public function locomover() {
        echo "<h3>Nadando!</h3>";
    }
    
    function  soltarBolha(){
        echo "<h3>Soltou uma bolha</h3>";
    }
            
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

}
