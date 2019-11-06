<?php
include_once("ConexaoBD.php");
include_once ("Curso.php");
try{
$conn = Conexao::conecta("localhost", "dbbiblioteca", "root", "");
}
catch(PDOException $e) {
echo "ERRO: ".$e->getMessage();
}
$c = new Curso();
$c->insere(5, 'redes');
?>
