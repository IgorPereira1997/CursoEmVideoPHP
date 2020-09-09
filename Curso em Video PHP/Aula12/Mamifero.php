<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    public function alimentar() {
        echo "<h2>Mamando</h2>";
    }

    public function emitirSom() {
        echo "<h3>Som de Mamífero</h3>";
    }

    public function locomover() {
        echo "<h3>Correndo</h3>";
    }
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }


}
