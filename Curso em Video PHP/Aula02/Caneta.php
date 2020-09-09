<?php

class Caneta {
    var $modelo, $cor, $ponta, $carga, $tampada;
    function rabiscar(){
        if($this->tampada){
            echo "<p>ERRO, não posso rabiscar!</p>";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }
    }
    function tampar(){
        $this->tampada = true; 
    }
    function  destampar(){
        $this->tampada = false;
    }
}
