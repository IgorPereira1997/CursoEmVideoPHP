<?php
require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;
    public function alimentar() {
        echo "<h2>Comendo Vegetais</h2>";
    }

    public function emitirSom() {
        echo "<h3>Som de Réptil</h3>";
    }

    public function locomover() {
        echo "<h3>Rastejando</h3>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
