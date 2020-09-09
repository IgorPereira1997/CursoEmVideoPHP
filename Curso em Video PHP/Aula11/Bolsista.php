<?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    function __construct($nome, $idade, $sexo) {
        parent::__construct($nome, $idade, $sexo);
    }

    function renovarBolsa(){
        echo "<p>Bolsa renovada!</p>";
    }

    function pagarMensalidade(){
        echo "<p>Mensalidade de Bolsista paga!!</p>";
    }
}
