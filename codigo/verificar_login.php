<?php
require_once "conexao.php";

$email = $_POST['email'];
$nome = $_POST['nome'];

$sql = "select * from aluno WHERE email = ?";
$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "s", $email);
mysqli_stmt_execute($comando);

$resultado = mysqli_stmt_get_result($comando);
$quantidade = mysqli_num_rows($resultado);

if ($quantidade == 1) {
    $linha = mysqli_fetch_array($resultado);
    $email_banco = $linha['email'];

    if (password_verify($email, $email_banco)) {
        $nome = $linha['nome'];
        $email = $linha['email'];
        $idaluno = $linha['idaluno'];
        // $foto = $linha['foto'];

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        $_SESSION['idaluno'] = $idaluno;

        header("Location: principal.php");
    } else {
        header("Location: index.php?erro=login&email=$email");
    }
} else {
    header("Location: index.php?erro=login&email=$email");
}