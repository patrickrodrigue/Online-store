<?php

$dbHost = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Loja_de_moto";
$produtos = "produtos";
$usuarios = "usuarios";
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword);
// Criar conexão

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro ao conectar: " . $conexao->connect_error);
}

// Criar database
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if ($conexao->query($sql) === TRUE) {
    echo "";
} else {
    echo "Erro ao criar a base de dados: " . $conexao->error;
}






