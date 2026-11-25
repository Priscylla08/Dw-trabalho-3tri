
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
           <input type="checkbox" name="informatica" value="sim">
            Informática
            <br>
            <input type="checkbox" name="meio" value="sim">
            Meio Ambiente
            <br>
            <input type="checkbox" name="agropecuaria" value="sim">
            Agropecuaria
            <br>
            Carga horária: <br>
        <input type="time" name="carga_horaria"><br><br>

        <input type="submit" value="Salvar">

    </form>

</body>
</html>
