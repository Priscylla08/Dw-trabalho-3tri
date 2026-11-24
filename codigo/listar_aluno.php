<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de alunos</title>
</head>
<body>

    <h2>Lista de alunos</h2>

    <div class="alunos">
        <?php
        require_once "conexao.php";

        $sql = "SELECT * FROM aluno";

        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_execute($comando);
        $alunos = mysqli_stmt_get_result($comando);

        while ($aluno = mysqli_fetch_array($alunos)) {

            $idaluno = $aluno['idaluno'];
            $nome = $aluno['nome'];
            $email = $aluno['email'];
            $data_nascimento = $aluno['data_nascimento'];
            $cpf = $aluno['cpf'];
            $foto_aluno = $aluno['foto_aluno'];

            echo "<div class='aluno'>";
            echo "ID: $idaluno <br>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Data de nascimento: $data_nascimento <br>";
            echo "CPF: $cpf <br>";
            echo "Foto: $foto_aluno <br>";
            echo "<hr>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
