<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autor
 *
 * @author G4L1L3U
 */
include_once'Conexao.php';
class Autor {
    private $idAutor;
    private $noAutor;
    private $idNacionalidade;
    
    function getIdAutor() {
        return $this->idAutor;
    }

    function getNoAutor() {
        return $this->noAutor;
    }

    function getIdNacionalidade() {
        return $this->idNacionalidade;
    }

    function setIdAutor($idAutor) {
        $this->idAutor = $idAutor;
    }

    function setNoAutor($noAutor) {
        $this->noAutor = $noAutor;
    }

    function setIdNacionalidade($idNacionalidade) {
        $this->idNacionalidade = $idNacionalidade;
    }

        function __construct($idAutor, $noAutor, $idnacionalidade) {
        $this->idAutor = $idAutor;
        $this->noAutor = $noAutor;
        $this->idnacionalidade = $idnacionalidade;
    }
    function lista(){
        try{
            $sql = "SELECT idAutor, idNacionalidade, noAutor";
            $conn = Conexao::conecta();
            $aql = $conn->query($sql);
            
            $res = array();
            
            while($row = $sql->fetch(PDO::FETCH_OBJ)){
                $autor = new Autor();
                $autor->setIdAutor($row->idAutor);
                $autor->setNoAutor($row->noAutor);
                $autor->setidNacionalidade($row->idNacionalidade);
                
                $res = $autor;
                
            }
            
        } catch (Exception $ex) {

        }
    }
}
