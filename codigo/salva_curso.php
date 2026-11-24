<?php
require_once "conexao.php";

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

move_uploaded_file($nome_curso, $carga_horaria );

$sql = "INSERT INTO curso (nome_curso, carga_horaria) VALUES (?, ?)";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "ss", $nome_curso, $carga_horaria);

mysqli_stmt_execute($comando);

header("Location: index.php");
?>