<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php  include('Aluno.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            <h1 align="center">Lista de Alunos</h1>
            <?php 
                $a = new Aluno(); 
                $lista_aluno = $a->lista();
                foreach($lista_aluno as $lst_aluno) { ?>
                <tr>
                    <td><?php echo $lst_aluno->getNuMatricula() ?></td>
                    <td><?php echo $lst_aluno->getNoAluno() ?></td>
                    <td>
                        <a href="CursoAltera.php?editar=<?php echo $lst_curso->getIdcurso(); ?>" class="edit_btn">Alterar</a>
                    </td>
                    <td>
                        <a href="CursoExclui.php?excluir=<?php echo $lst_curso->getIdcurso(); ?>" 
                           class="del_btn">Remover</a>
                    </td>
                </tr>
            <?php } ?>
            <tfoot>
                <td colspan="4" align="center">
                    <br> <button class="btn" name="listar" type="button" onclick="location.href='CursoCadastra.php';">Cadastrar Curso</button>
                </td>
            </tfoot>
        </table>
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>       
    </body>
</html>
