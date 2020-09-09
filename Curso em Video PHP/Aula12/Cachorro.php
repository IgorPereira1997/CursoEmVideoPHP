<?php
require_once 'Animal.php';
require_once 'Mamifero.php';
class Cachorro extends Mamifero{
    function locomover() {
        parent::locomover();
    }
    
    function emitirSom() {
        echo "<h2>Au Au Au</h2>";
    }
}
