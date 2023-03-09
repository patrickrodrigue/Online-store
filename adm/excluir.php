<?php
session_start();
include_once("conexao.php");
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$result_produto = "DELETE FROM produtos WHERE id='$id'";
$resultado_produto = mysqli_query($conexao, $result_produto);

?>