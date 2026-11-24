
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cursos</title>
</head>
<body>

    <form action="salvar_curso.php" method="POST">

        Nome do curso: <br>
        <input type="text" name="nome_curso"><br><br>

        Carga horária: <br>
        <input type="number" name="carga_horaria"><br><br>

        <input type="submit" value="Salvar">

    </form>

</body>
</html>
