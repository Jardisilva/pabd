<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author beatr
 */
include_once 'Conexao.php';
class Aluno {
    private $nuMatricula;
    private $noAluno;
    
    function getNuMatricula() {
        return $this->nuMatricula;
    }

    function getNoAluno() {
        return $this->noAluno;
    }

    function setNuMatricula($nuMatricula) {
        $this->nuMatricula = $nuMatricula;
    }

    function setNoAluno($noAluno) {
        $this->noAluno = $noAluno;
    }
    function __construct($nuMatricula, $noAluno) {
        $this->nuMatricula = $nuMatricula;
        $this->noAluno = $noAluno;
    }
    function lista(){
        try{
            $sql = "SELECT nuMatricula, noAluno FROM tbAluno ORDER BY noAluno";
            $conn = Conexao::conecta();
            $sql= $conn->query($sql);
            
            $res = array();
            while($row = $sql->fetch(PDO::FETCH_OBJ)){
                $aluno = new Aluno();
                $aluno->setNoAluno($row->NoAluno);
                $aluno->setNuMatricula($row->nuMatricula);
                $res = $aluno;
            }
            
        } catch (Exception $ex) {

        }
    }



    
}
