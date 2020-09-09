<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;
    
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setLeitor($leitor);
        $this->setPagAtual(0);
        $this->setLeitor($leitor);
    }

    
    function detalhes(){
        echo "<hr/> Livro ".$this->getTitulo()." escrito por ".$this->getAutor();
        echo "<br/> Páginas: ".$this->getTotPaginas()."; Página atual: ".$this->getPagAtual();
        echo "<br/> Sendo lido por ".$this->getLeitor()->getNome();
    }

    public function abrir() {
        $this->setAberto(true);
    }

    public function avancarPag() {
        if($this->getPagAtual()<$this->getTotPaginas()){
            $this->setPagAtual($this->getPagAtual()+1);
        } else {
            echo "<h2>Livro acabou!</h2>";
            $this->fechar();
        }
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($p) {
        if($p>$this->getTotPaginas()){
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($p);
        }
    }

    public function voltarPag() {
         if($this->getPagAtual()){
            $this->setPagAtual($this->getPagAtual()+1);
        } else {
            echo "<h2>Livro já está na capa!</h2>";
            $this->fechar();
        }
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    
}
