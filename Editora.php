<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Editora
 *
 * @author beatr
 */
include_once 'ConexaoBD.php';
class Editora {
    private $idEditora;
    private $noEditora;
    
    function getIdEditora() {
        return $this->idEditora;
    }

    function getNoEditora() {
        return $this->noEditora;
    }

    function setIdEditora($idEditora) {
        $this->idEditora = $idEditora;
    }

    function setNoEditora($noEditora) {
        $this->noEditora = $noEditora;
    }

    function __construct($idEditora = null, $noEditora = null) {
        $this->idEditora = $idEditora;
        $this->noEditora = $noEditora;
    }
    
    public function lista(){
        try{
            $sql = "SELECT idEditora, noEditora FROM tbEditora";
            $conn = Conexao::conecta();
            $sql = $conn->query($sql);
            
            $res = array();
            while ($row = $sql->fetch(PDO::FETCH_OBJ)){
                $editora = new Editora();
                $editora->setIdEditora($row->idEditora);
                $editora->setNoEditora($row->noEditora);
                $res = $editora;
            }
            return $res;
        } catch (Exception $ex) {
            echo "ERRO: ".$e->getMessage()."<br><br>";

        }
    }

    public function altera($nome, $codigo){
        try {
            $sql = "UPDATE TbEditora
                       SET NoEditora = ? 
                     WHERE IdEditora = ?"; 
            $conn = ConexaoBD::conecta();

            $stm = $conn->prepare($sql);
            $stm->bindParam(1, $nome);
            $stm->bindParam(2, $codigo);
            $stm->execute();
            return 1; 
	} catch (Exception $e) {
            return 0; 
        } //try-catch     
    } //método altera
    
    public function insere($id, $nome){
      try {
        $sql = "INSERT INTO TbEditora(IdEditora, NoEditora)
                VALUES (?, ?)";
        $conn = ConexaoBD::conecta();
        
        $stm  = $conn->prepare($sql);              
        $stm->bindParam(1, $id);
        $stm->bindParam(2, $nome); 
	$stm->execute();
        return 1;
      } catch (Exception $e) {
        return 0; 
      }     
    } //método insere
    
    public function exclui($codigo){
      try {
	      $sql = "DELETE FROM TbEditora WHERE IdEditora = ?"; 
	      $conn = ConexaoBD::conecta();
                                       
	      $stm = $conn->prepare($sql);
	      $stm->bindParam(1, $codigo);
	      $stm->execute();
              return 1; 
	    } catch (Exception $e) {
              return 0; 
      } //try-catch     
    } //método exclui

    
    
    
    
    
    
    
    
    
        }

