<?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroProfissional;
    
    function __construct($nome, $idade, $sexo) {
        parent::__construct($nome, $idade, $sexo);
    }
    
    function praticar(){
        
    }
}
