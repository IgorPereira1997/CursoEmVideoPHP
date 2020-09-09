<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    
    function apresentar(){
        echo "<p>---------------------------------------<br/>";
        echo "Lutador: ".$this->getNome()."<br/>";
        echo "Origem: ".$this->getNacionalidade()."<br/>";
        echo $this->getIdade()." anos<br/>";
        echo "Tem ".$this->getAltura()."m de altura<br/>";
        echo "Pesando ".$this->getPeso()."kg<br/>";
        echo "Ganhou: ".$this->getVitorias()."vez(es)<br/>";
        echo "Perdeu: ".$this->getDerrotas()."vez(es)<br/>";
        echo "Empatou: ".$this->getEmpates()."vez(es)<br/></p>";
    }
    
    function status(){
        echo "<p>".$this->getNome()." é um peso ".$this->getCategoria().", com ".$this->getVitorias()." vitória(s), ".$this->getDerrotas()." derrota(s) e ".$this->getEmpates()." empate(s)!</p>";
    }
    
    function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    
    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }
    
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    function setCategoria() {
        if($this->getPeso()<52.2){
            $this->categoria="Inválido";
        }elseif($this->getPeso()<=78.3){
            $this->categoria="Leve";
        }elseif($this->getPeso()<=83.9){
            $this->categoria="Médio";
        }elseif($this->getPeso()<=120.2){
            $this->categoria="Pesado";
        }else{
            $this->categoria="Inválido";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

}
