<?php
    require_once 'Lutador.php';
class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    

    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    function marcarLuta($L1, $L2){
        if(($L1->getCategoria()=== $L2->getCategoria())&&($L1<>$L2)){
            $this->setAprovada(true);
            $this->setDesafiado($L1);
            $this->setDesafiante($L2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    
    function lutar(){
        if($this->getAprovada()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            switch(random_int(0, 2)){
                case 0:
                    echo "<h2>Empatou</h2>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1:
                    echo "<h2>{$this->getDesafiado()->getNome()} ganhou a luta!</h2>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2:
                    echo "<h2>{$this->getDesafiante()->getNome()} ganhou a luta!</h2>";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    break;}
        } else {
            echo "<h2>A luta não pode ocorrer!!</h2>";}}
}
