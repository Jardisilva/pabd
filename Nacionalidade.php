<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nacionalidade
 *
 * @author beatr
 */
include_once 'Conexao.php';

class Nacionalidade {

    private $idNacionalidade;
    private $noNacionalidade;

    function getIdNacionalidade() {
        return $this->idNacionalidade;
    }

    function getNoNacionalidade() {
        return $this->noNacionalidade;
    }

    function setIdNacionalidade($idNacionalidade) {
        $this->idNacionalidade = $idNacionalidade;
    }

    function setNoNacionalidade($noNacionalidade) {
        $this->noNacionalidade = $noNacionalidade;
    }

    function __construct($idNacionalidade, $noNacionalidade) {
        $this->idNacionalidade = $idNacionalidade;
        $this->noNacionalidade = $noNacionalidade;
    }

    function lista() {

        try {


            $sql = "SELECT idNacionalidade, noNacionalidade";
            $conn = Conexao::conecta();
            $sql = $conn->query($sql);
            $res = array();
            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $nacionalidade = new Nacionalidade();
                $nacionalidade->setIdNacionalidade($row->idNacionalidade);
                $nacionalidade->setNoNacionalidade($row->noNacionalidade);

                $res = $nacionalidade;
            }
        } catch (Exception $ex) {
            
        }
    }
}