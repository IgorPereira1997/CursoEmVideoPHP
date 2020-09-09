<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    function  abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t === "CC"){
            $this->setSaldo(50);
        }elseif ($t === "CP"){
            $this->setSaldo(150);
        }
    }
    
    function fecharConta(){
        if ($this->getSaldo()>0){
            echo "<p> Conta com dinheiro não pode ser fechada</p>";
        } elseif ($this->getSaldo()<0) {
            echo "<p> Conta em débito não pode ser fechada</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta fechada com sucesso</p>";
        }
    }
    
    function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$v);
            echo "<p>Depósito de R$".number_format($v, 2, ",", ".")." autorizado na conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Impossível depositar! </p>";
        }
    }
    
    function sacar($v){
        if($this->getStatus()){
            if ($this->getSaldo()>=$v){
                $this->setSaldo($this->getSaldo()-$v);
                echo "<p>Saque de R$".number_format($v, 2, ",", ".")." autorizado na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo insuficiente para saque!</p>";
            }
        } else {
            echo "<p>Impossível sacar!</p>";
        }
    }
    
    function pagarMensal(){
        if ($this->getTipo() === "CC"){
            $v = 12;
        } elseif ($this->getTipo() === "CP"){
            $v = 20;
        }
        if ($this->getStatus()){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo()-$v);
                echo "<p>Mensalidade de R$".number_format($v, 2, ",", ".")." debitada na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo insuficiente para cobrança!</p>";
            }
        } else {
            echo "<p>Impossível pagar!</p>";
        }
    }
    
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
