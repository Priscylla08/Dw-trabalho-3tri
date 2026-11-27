<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro matricula</title>
</head>

<body>
    <form action="form_matricula.php" method="post">
        <h1>Cadastro matricula</h1>

        nome do aluno <br>
        <input type="text" value="aluno">
           
           <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM aluno";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $aluno = mysqli_stmt_get_result($comando);

            while ($aluno = mysqli_fetch_array($aluno)) {
                $aluno_id = $aluno['id_aluno'];
                $aluno_nome = $aluno['nome'];

                echo "<option value='$aluno_id'>$aluno_nome</option>";
            }
            ?>
        </select> <br><br>
    

        <h2>Lista de curso</h2>
        <form>
              
        
       curso
      <br>
     <input type="checkbox" value="nome_curso">
     Informatica
       <br>
        <input type="checkbox" value="nome_curso">
     Meio Ambiente
       <br>
        <input type="checkbox" value="nome_curso">
     Agropecuaria
       <br>

         <?php
    if (isset($_POST['curso'])) {
        $id_curso = $_SESSION['id_curso'];
        $id_curso = $_POST['curso'];

        $sql = "SELECT * FROM curso WHERE id_curso = ?";
        // require_once "conexao.php";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_bind_param($comando, "i", $id_curso);
        mysqli_stmt_execute($comando);
        $curso = mysqli_stmt_get_result($comando);

    ?>


            <?php
            while ($curso = mysqli_fetch_array($curso)) {
                $id_curso = $curso['id_curso'];
                $nome_curso = $curso['nome'];
            ?>
                <input type="checkbox" name="curso[]" value="informatica"<?php echo $id_curso; ?>"> <?php echo $nome_curso; ?> <br>
        <?php
            }
        }
        ?>
        <br>
        <input type="submit" value="avançar">
        </form>
</body>

</html>