<?php
require_once 'Animal.php';
require_once 'Mamifero.php';
class Canguru extends Mamifero{
    
    function usarBolsa(){
        
    }
    
    function locomover() {
        echo "<h3>Saltando</h3>";
    }
}
