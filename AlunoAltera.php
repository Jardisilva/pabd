<!DOCTYPE html>
<?php  include('Aluno.php'); ?>
<html>
<head>
    <title>Altera Aluno</title>

</head>
<body>
    <?php
        if (isset($_GET['editar'])) {
            $id = $_GET['editar'];
            
            $a = new Aluno();
            $aluno = $a->consulta($nuMatricula); 
            foreach($curso as $lst_curso) {
                $nome = $lst_curso->getNocurso();
            } 
        }
    ?>    
    <h1 align="center">Alteração de Curso</h1>    
    <form method="post" action="CursoAltera.php" >
        <div class="input-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="input-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome; ?>">
        </div>
        <div class="input-group">
            <button class="btn" type="submit" name="alterar" style="background: #556B2F;" >Alterar</button>
        </div>
    </form>
    <?php
        if (isset($_POST['alterar'])) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            
            $c = new Curso();
            $c->altera($nome, $id);

            header('location: CursoLista.php');
        }
    ?>
</body>
</html>
