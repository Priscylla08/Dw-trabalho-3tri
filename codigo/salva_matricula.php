<?php
require_once "conexao.php";

$data_matricula = $_POST['data_matricula'];
$idaluno = $_SESSION['idaluno'];
$idcurso = $_SESSION['idcurso'];

$sql = "INSERT INTO matricula ( data_matricula, idaluno, idcurso,) VALUES (?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "sssss", $data_matricula, $idaluno, $idcurso);

mysqli_stmt_execute($comando);

header("Location: index.php");
?>