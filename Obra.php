<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Obra
 *
 * @author G4L1L3U
 */
include_once'Conexao.php';
class Obra {
    private $idObra;
    private $noObra;
    private $nuAno;
    private $nuEdicao;
    private $vaPreco;
    private $idIdioma;
    private $idEditora;
    
    function getIdObra() {
        return $this->idObra;
    }

    function getNoObra() {
        return $this->noObra;
    }

    function getNuAno() {
        return $this->nuAno;
    }

    function getNuEdicao() {
        return $this->nuEdicao;
    }

    function getVaPreco() {
        return $this->vaPreco;
    }

    function getIdIdioma() {
        return $this->idIdioma;
    }

    function getIdEditora() {
        return $this->idEditora;
    }

    function setIdObra($idObra) {
        $this->idObra = $idObra;
    }

    function setNoObra($noObra) {
        $this->noObra = $noObra;
    }

    function setNuAno($nuAno) {
        $this->nuAno = $nuAno;
    }

    function setNuEdicao($nuEdicao) {
        $this->nuEdicao = $nuEdicao;
    }

    function setVaPreco($vaPreco) {
        $this->vaPreco = $vaPreco;
    }

    function setIdIdioma($idIdioma) {
        $this->idIdioma = $idIdioma;
    }

    function setIdEditora($idEditora) {
        $this->idEditora = $idEditora;
    }

    function __construct($idObra, $noObra, $nuAno, $nuEdicao, $vaPreco, $idIdioma, $idEditora) {
        $this->idObra = $idObra;
        $this->noObra = $noObra;
        $this->nuAno = $nuAno;
        $this->nuEdicao = $nuEdicao;
        $this->vaPreco = $vaPreco;
        $this->idIdioma = $idIdioma;
        $this->idEditora = $idEditora;
    }

    function lista(){
        try{
            $sql = "SELECT idObra, noObra, nuAno, nuEdicao, vaPreco, idIdioma, idEditora";
        $conn = Conexao::conecta();
        $sql = $conn->query($sql);
        
            $res = array();
            
            while($row = $sql->fetch(PDO::FETCH_OBJ)){
                $obra = new Obra();
                $obra->setIdObra($row->idObra);
                $obra->setIdEditora($row->idEditora);
                $obra->setIdIdioma($row->idIdioma);
                $obra->setNoObra($row->noObra);
                $obra->setNuEdicao($row->nuEdicao);
                $obra->setVaPreco($row->vaPreco);
                
                
                 
            }
        } catch (Exception $ex) {

        }
        
        
    }
    
}
