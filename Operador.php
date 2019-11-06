<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Operador
 *
 * @author beatr
 */
class Operador {
    private $idOperador;
    private $noOperador;
    
    function getIdOperador() {
        return $this->idOperador;
    }

    function getNoOperador() {
        return $this->noOperador;
    }

    function setIdOperador($idOperador) {
        $this->idOperador = $idOperador;
    }

    function setNoOperador($noOperador) {
        $this->noOperador = $noOperador;
    }

    function __construct($idOperador, $noOperador) {
        $this->idOperador = $idOperador;
        $this->noOperador = $noOperador;
    }

    
        function lista(){
            $sql = "SELECT idOperador, noOperador FROM tbOperador";
            $conn = Conexao::conecta();
            $sql = $conn->query($sql);
            
            $res = array();
            
            while($row = $sql->fetch(PDO::FETCH_OBJ)){
                $operador = new Operador();
                $operador->setIdOperador($row->idOperador);
                $operador->setNoOperador($row->noOperador);
                
                $res = $operador;
                
                
            }
        }
}
