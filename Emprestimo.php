<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Emprestimo
 *
 * @author beatr
 */
class Emprestimo {
    private $idEmprestimo;
    private $DaEmprestimo;
    private $DaPrevisaoDevolucao;
    private $daDevolucao;
    private $idOperador;
    private $nuMatricula;
    
    function getIdEmprestimo() {
        return $this->idEmprestimo;
    }

    function getDaEmprestimo() {
        return $this->DaEmprestimo;
    }

    function getDaPrevisaoDevolucao() {
        return $this->DaPrevisaoDevolucao;
    }

    function getDaDevolucao() {
        return $this->daDevolucao;
    }

    function getIdOperador() {
        return $this->idOperador;
    }

    function getNuMatricula() {
        return $this->nuMatricula;
    }

    function setIdEmprestimo($idEmprestimo) {
        $this->idEmprestimo = $idEmprestimo;
    }

    function setDaEmprestimo($DaEmprestimo) {
        $this->DaEmprestimo = $DaEmprestimo;
    }

    function setDaPrevisaoDevolucao($DaPrevisaoDevolucao) {
        $this->DaPrevisaoDevolucao = $DaPrevisaoDevolucao;
    }

    function setDaDevolucao($daDevolucao) {
        $this->daDevolucao = $daDevolucao;
    }

    function setIdOperador($idOperador) {
        $this->idOperador = $idOperador;
    }

    function setNuMatricula($nuMatricula) {
        $this->nuMatricula = $nuMatricula;
    }

    function __construct($idEmprestimo, $DaEmprestimo, $DaPrevisaoDevolucao, $daDevolucao, $idOperador, $nuMatricula) {
        $this->idEmprestimo = $idEmprestimo;
        $this->DaEmprestimo = $DaEmprestimo;
        $this->DaPrevisaoDevolucao = $DaPrevisaoDevolucao;
        $this->daDevolucao = $daDevolucao;
        $this->idOperador = $idOperador;
        $this->nuMatricula = $nuMatricula;
    }
    
    function lista(){
        $sql = "SELECT idEmprestimo, idOperador, idAluno, daPrevisaoDevolucao";
        $conn = Conexao::conecta();
        $sql = $conn->query($sql);
        
        $res = array();
        while($row= $sql->fetch(PDO::FETCH_OBJ)){
            $emprestimo = new Emprestimo();
            $emprestimo->setNuMatricula($row->nuMatricula);
            $emprestimo->setDaDevolucao($row->daDevolucao);
            $emprestimo->setIdOperador($row->idOperador);
            $emprestimo->DaPrevisaoDevolucao($row->daPrevisaoDevolucao);
            $emprestimo->DaEmprestimo($row->emprestimo);
            
            $res = $emprestimo;
            
        }
    }

    
}
