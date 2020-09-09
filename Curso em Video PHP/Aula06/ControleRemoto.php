<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    
    function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if($this->getLigado()&&($this->getVolume()==0)){
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        echo "<p>Fechando menu...</p>";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if($this->getLigado()&&($this->getVolume()>0)){
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+1);
        } else {
            echo "<p>ERRO! Não posso aumentar o volume!</p>";
        }
    }

    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-1);
        } else {
            echo "<p>ERRO! Não posso diminuir o volume!</p>";
        }
    }

    public function pause() {
        if($this->getLigado()&&$this->getTocando()){
            $this->setTocando(false);
        }
    }

    public function play() {
        if($this->getLigado()&&(!$this->getTocando())){
            $this->setTocando(true);
        }
    }

    public function abrirMenu() {
        echo "<p>-------- MENU --------<p>";
        echo "<p>Está ligado?: ".($this->getLigado()?"SIM":"NÃO")."</p>";
        echo "<p>Está tocando?: ".($this->getTocando()?"SIM":"NÃO")."</p>";
        echo "<br/>Volume: ".($this->getVolume())." ";
        for($i = 0; $i < $this->getVolume();$i+=10){
            echo ' | ';
        }
        echo "<br/>";
        echo "<p>{$this->getTocando()}</p>";
    }

}
