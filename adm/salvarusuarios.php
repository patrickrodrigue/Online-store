<?php
session_start();
include("conexao.php");
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
// Criar tabela
$sql = "CREATE TABLE IF NOT EXISTS $usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(32) NOT NULL,
    senha VARCHAR(8)  NOT NULL,
    data_cad DATETIME NOT NULL
)";

if ($conexao->query($sql) === TRUE) {
    echo "";
} else {
    echo "Erro ao criar a tabela: " . $conexao->error;
}


if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {


    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));

    // Verificar se o email já existe na tabela
    $sql = "SELECT * FROM $usuarios WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) > 0) {
    $response["emailExist"]=true; 
 
    }
    
    else {
        // Adicionar usuário
        $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
        $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
        $sql = "INSERT INTO $usuarios (nome, email, senha, data_cad) VALUES ('$nome', '$email', '$senha', NOW())";
        if (mysqli_query($conexao, $sql)) {
            echo "Usuário adicionado com sucesso";
        } else {
            echo "Erro ao adicionar usuário:" . mysqli_error($conexao);
        }
    }
}
$conexao->close();

header('Location: ../index.php');
exit;
