<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    public function alimentar() {
        echo "<h3>Comendo frutas</h3>";
    }

    public function emitirSom() {
        echo "<h3>Som de ave</h3>";
    }

    public function locomover() {
        echo "<h3>Voando</h3>";
    }
    
    function  fazerNinho(){
        echo "<h3>Fazendo um ninho</h3>";
    }
    
}
