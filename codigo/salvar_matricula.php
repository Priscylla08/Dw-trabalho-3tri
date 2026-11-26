<?php
   require_once "conexao.php";
   
   $idmatricula = $_SESSION['idmatricula'];

   $data_matricula = $_POST['data_matricula'];
   
   $sql = "INSERT INTO matricula (data_matricula) VALUES (?)";
   $comando = mysqli_prepare($conexao, $sql);

   mysqli_stmt_bind_param($comando, "i", $data_matricula);
   mysqli_stmt_execute($comando);

   
   header("Location: index.php");

?>