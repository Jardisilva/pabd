<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Idioma
 *
 * @author beatr
 */
include_once 'Conexao.php';
class Idioma {
    private $noIdioma;
    private $idIdioma;
    
    function getNoIdioma() {
        return $this->noIdioma;
    }

    function getIdIdioma() {
        return $this->idIdioma;
    }

    function setNoIdioma($noIdioma) {
        $this->noIdioma = $noIdioma;
    }

    function setIdIdioma($idIdioma) {
        $this->idIdioma = $idIdioma;
    }

    function __construct($noIdioma, $idIdioma) {
        $this->noIdioma = $noIdioma;
        $this->idIdioma = $idIdioma;
    }

    function lista(){
        $sql = "SELECT idIdioma, noIdioma FROM tbIdioma";
        $conn = Conexao::conecta();
        $sql = $conn->query($sql);
        
        $res = array();
        
        while($row = $sql->fetch(PDO::FETCH_OBJ)){
            $idioma = new Idioma();
            $idioma->setIdIdioma($row->idIdioma);
            $idioma->setNoIdioma($row->noIdioma);
            
            
            $res = $idioma;
            
        }
    }
    
}
