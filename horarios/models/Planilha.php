<?php

class Planilha {

    private $id;
    private $nome;
    private $link;
    private $siglaCursos = array();
    private $anosCursos = array();
    private $script;

    public function __construct($id, $nome, $link) {
        $this->id = $id;
        $this->nome = (string) $nome;
        $this->link = $link;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getLink() {
        return $this->link;
    }

    function getSiglaCursos() {
        return $this->siglaCursos;
    }

    function getAnosCursos() {
        return $this->anosCursos;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setLink($link) {
        $this->link = $link;
    }

    function setSiglaCursos($siglaCursos) {
        $this->siglaCursos = $siglaCursos;
    }

    function setAnosCursos($anosCursos) {
        $this->anosCursos = $anosCursos;
    }

    function getScript() {
        return $this->script;
    }

    function setScript($script) {
        $this->script = $script;
    }
}
