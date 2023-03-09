<?php
session_start();
include("conexao.php");

if (isset($_POST['marcaprodutos'])) {
  $marcaprodutos = mysqli_real_escape_string($conexao, trim($_POST['marcaprodutos']));
  $sql = "INSERT INTO marcaprodutos (marcaprodutos, data_cad) VALUES (?, NOW())";
  $stmt = mysqli_prepare($conexao, $sql);
  mysqli_stmt_bind_param($stmt, "s", $marcaprodutos);
  mysqli_stmt_execute($stmt);
}

header('Location:cadastrar.php');
exit();
?>
