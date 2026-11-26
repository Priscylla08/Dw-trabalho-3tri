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
    <form action="form_grupo_alunos.php" method="post">
        <h1>Cadastro matricula</h1>

        Escolha uma aluno: <br>
        <select name="curso">
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

        <input type="submit" value="Avançar">
    </form>


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
        <h2>Lista de curso</h2>
        <form action="salvar_curso.php" method="post">
            Nome do curso: <br>
            <input type="text" name="nome_curso"> <br><br>

            <?php
            while ($curso = mysqli_fetch_array($curso)) {
                $id_curso = $curso['id_curso'];
                $nome_curso = $curso['nome'];
            ?>
                <input type="checkbox" name="curso[]" value="<?php echo $id_curso; ?>"> <?php echo $nome_curso; ?> <br>
        <?php
            }
        }
        ?>
        <br>
        <input type="submit" value="Salvar curso">
        </form>
</body>

</html>