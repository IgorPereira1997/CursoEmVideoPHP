<?php

class Caneta {
    public $modelo; 
    public $cor; 
    private $ponta; 
    protected $carga; 
    protected $tampada;
    public function rabiscar(){
        if($this->tampada){
            echo "<p>ERRO, não posso rabiscar!</p>";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }
    }
    public function tampar(){
        $this->tampada = true; 
    }
    public function  destampar(){
        $this->tampada = false;
    }
}