<?php
    require_once 'Pessoa.php';
class Visitante extends Pessoa{
    function __construct($nome, $idade, $sexo){
        parent::__construct($nome, $idade, $sexo);
    }
}
