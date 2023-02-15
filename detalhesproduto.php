<?php
session_start();
include("adm/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="detalhes.css">
</head>
<body>
<title>Meu card com imagem e descrição</title>

</head>
<body>
<?php
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if (!isset($_GET['search'])) {
	header("Location: index.php");
	exit;
}

$nome = "%".trim($_GET['search'])."%";

$dbh = new PDO('mysql:host=127.0.0.1;dbname=loja_de_moto', 'root', '');

$sth = $dbh->prepare('SELECT * FROM `produtos` WHERE `produtonome` LIKE :search');
$sth->bindParam(':search', $nome, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultados as $resultado) {
?>
	<div class="card">
		<div class="img">
			<?php echo '<img src="data:image/jpeg;base64,' . base64_encode($resultado["image"]) . '" />'; ?>
		</div>
		<div>
			<h1><?php echo $resultado["produtonome"]; ?></h1>
			<p><?php echo $resultado["produtodescricao"]; ?><p>
			<?php echo $resultado["produtopreco"]; ?>
			<button class="comprar" onclick="window.location.href='#';">Comprar</button>
			<button class="calcularfrete">Calcular Frete</button>
		</div>
	</div>
<?php
}
?>

</body>
</html>
