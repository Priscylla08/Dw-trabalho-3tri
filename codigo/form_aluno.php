
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
</head>
<body>

    <form action="salvar_curso.php" method="POST" enctype="multipart/form-data">
    
        Nome do aluno: <br>
        <input type="text" name="nome"><br><br>

        E-mail: <br>
        <input type="email" name="email"><br><br>

        Data de nascimento: <br>
        <input type="date" name="data_nascimento"><br><br>

        CPF: <br>
        <input type="text" name="cpf"><br><br>

        Foto do aluno: <br>
        <input type="file" name="foto_aluno"><br><br>

        <input type="submit" value="Salvar">

    </form>
       <a href="form_curso.php">Não tenho cadastro.</a>
</body>
</html>
