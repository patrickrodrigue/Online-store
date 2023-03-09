<?php

$dbHost = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Loja_de_moto";
$produtos = "produtos";
$usuarios = "usuarios";
$marcaprodutos = "marcaprodutos";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword);
if ($conn->connect_error) {
  die("Erro ao conectar: " . $conn->connect_error);
} // Criar database
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Erro ao criar a base de dados: " . $conn->error;
}
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Criar tabela
$sql = "CREATE TABLE IF NOT EXISTS $usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(32) NOT NULL,
    senha VARCHAR(8)  NOT NULL,
    data_cad DATETIME NOT NULL
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Erro ao criar a tabela: " . $conn->error;
}
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
  $email = mysqli_real_escape_string($conn, trim($_POST['email']));
  // Verificar se o email já existe na tabela
  $sql = "SELECT * FROM $usuarios WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $response["emailExist"] = true;
  } else {
    // Adicionar usuário
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));
    $sql = "INSERT INTO $usuarios (nome, email, senha, data_cad) VALUES ('$nome', '$email', '$senha', NOW())";
    if (mysqli_query($conn, $sql)) {
      header('Location: ../index.php');
    } else {
      echo "Erro ao adicionar usuário:" . mysqli_error($conn);
    }
  }
}
//tabela produtos
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS $produtos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    produtonome VARCHAR(200) NOT NULL,
    marca VARCHAR(32) NOT NULL,
    produtopreco VARCHAR(32) NOT NULL,
    produtodescricao VARCHAR(1000)  NOT NULL,
    quantidade VARCHAR(100)  NOT NULL,
    image LONGBLOB NOT NULL,
    data_cad DATETIME NOT NULL
    
)";
if ($conexao->query($sql) === TRUE) {
  echo "";
} else {
  echo "Erro ao criar a tabela: " . $conexao->error;
}


if ($conexao->connect_error) {
  die("A conexão falhou: " . $conexao->connect_error);
}
/////
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS $marcaprodutos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    marcaprodutos VARCHAR(200) NOT NULL,
    data_cad DATETIME NOT NULL
    
)";
if ($conexao->query($sql) === TRUE) {
  echo "";
} else {
  echo "Erro ao criar a tabela: " . $conexao->error;
}


if ($conexao->connect_error) {
  die("A conexão falhou: " . $conexao->connect_error);
}



