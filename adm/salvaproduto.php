<?php
session_start();
include("conexao.php");
if (isset($_POST['produtonome']) && isset($_POST['marca']) && isset($_POST['produtopreco']) && isset($_POST['produtodescricao'])) {
  $produtonome = mysqli_real_escape_string($conexao, trim($_POST['produtonome']));
  $marca = mysqli_real_escape_string($conexao, trim($_POST['marca']));
  $produtopreco = mysqli_real_escape_string($conexao, trim($_POST['produtopreco']));
  $produtodescricao = mysqli_real_escape_string($conexao, trim(($_POST['produtodescricao'])));
  $quantidade = mysqli_real_escape_string($conexao, trim(($_POST['quantidade'])));
  $sql = "INSERT INTO $produtos (produtonome, marca, produtopreco, produtodescricao, quantidade, image, data_cad) VALUES ( '$produtonome', '$marca', '$produtopreco', '$produtodescricao', '$quantidade', (?), NOW())";
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

if (isset($_POST['produtomarca'])) {
  $produtomarca = mysqli_real_escape_string($conexao, trim($_POST['produtomarca']));
  $marcaprodutos = "Loja_de_moto";
  $sql = "INSERT INTO $marcaprodutos (`produtomarca`, `campo2`, `data`) VALUES (?, ?, NOW())";
  $stmt = mysqli_prepare($conexao, $sql);
  mysqli_stmt_bind_param($stmt, "ss", $produtomarca, $campo2);
  mysqli_stmt_execute($stmt);
}

header('Location:cadastrar.php');
exit;

