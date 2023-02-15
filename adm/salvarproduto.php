<?php
session_start();
include("conexao.php");
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS $produtos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    produtomarca VARCHAR(200) NOT NULL,
    produtonome VARCHAR(200) NOT NULL,
    produtopreco VARCHAR(32) NOT NULL,
    produtodescricao VARCHAR(1000)  NOT NULL,
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
if (isset($_POST['produtomarca']) && isset($_POST['produtonome']) && isset($_POST['produtopreco']) && isset($_POST['produtodescricao'])) {
  $produtomarca = mysqli_real_escape_string($conexao, trim($_POST['produtomarca']));
  $produtonome = mysqli_real_escape_string($conexao, trim($_POST['produtonome']));
  $produtopreco = mysqli_real_escape_string($conexao, trim($_POST['produtopreco']));
  $produtodescricao = mysqli_real_escape_string($conexao, trim(($_POST['produtodescricao'])));
  $sql = "INSERT INTO $produtos (produtomarca, produtonome, produtopreco, produtodescricao, image, data_cad) VALUES ('$produtomarca', '$produtonome', '$produtopreco', '$produtodescricao', (?), NOW())";
  mysqli_query($conexao, $sql);
}

if (isset($_FILES["image"])) {
  $file = $_FILES["image"];


  $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Apenas arquivos JPG, JPEG e PNG são permitidos.";
    exit();
  }


  $image = file_get_contents($file["tmp_name"]);


  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("s", $image);


  if ($stmt->execute()) {
    echo "Imagem salva com sucesso.";
  } else {
    echo "Erro ao salvar imagem: " . $conexao->error;
  }
}






header('Location: cadastrar.php');

exit;
