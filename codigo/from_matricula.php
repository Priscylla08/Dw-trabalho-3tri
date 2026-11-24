
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de matrículas</title>
</head>
<body>

    <form action="salvar_matricula.php" method="POST">

        Data da matrícula: <br>
        <input type="date" name="data_matricula"><br><br>

        ID do aluno: <br>
        <input type="number" name="id_aluno"><br><br>

        Curso: <br>
        <select name="id_curso">
            <option value="">Selecione um curso</option>
            <option value="1">Técnico em Informática</option>
            <option value="2">Técnico em Agropecuária</option>
            <option value="3">Técnico em Meio Ambiente</option>
        </select><br><br>

        <input type="submit" value="Salvar">

    </form>

</body>
</html>
