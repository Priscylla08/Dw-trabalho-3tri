<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];

$nome_arquivo = $_FILES['foto']['name'];
$caminho_temporario = $_FILES['foto']['tmp_name'];

$extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

$novo_nome = uniqid() . "." . $extensao;

$caminho_destino = "fotos_aluno/" . $novo_nome;

move_uploaded_file($caminho_temporario, $caminho_destino);

$sql = "INSERT INTO aluno (nome, email, data_nascimento, cpf, foto_aluno) VALUES (?, ?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "sssss", $nome, $email, $data_nascimento, $cpf, $novo_nome);

mysqli_stmt_execute($comando);

header("Location: index.php");
?>