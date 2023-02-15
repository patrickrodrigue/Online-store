<?php
session_start();
include("adm/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dtr das motos</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#" class="navbar-brand"> <img src="assets/inicio/logo tranparecy.png" height="90px" alt=""></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link">Para Você</a>
            <a href="#" class="nav-item nav-link">Para Sua Moto</a>
            <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Marcas</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Honda</a>
                    <a href="#" class="dropdown-item">Yamaha</a>
                    <a href="#" class="dropdown-item">Ktm</a>
                    <a href="#" class="dropdown-item">Kawasaki</a>
                </div>
            </div>
            <a href="#" class="nav-item nav-link active">Mais Vendidos</a>
            <a href="#" class="nav-item nav-link">Contato</a>
            <a href="#" class="nav-item nav-link">Quem Somos</a>
        </div>






        <form class="navbar-form form-inline" method="GET" action="detalhesproduto.php">
        <div class="input-group search-box">
            <input type="text" id="search" name="search" class="form-control" placeholder="Buscar produto">
            <div class="input-group-append">
                <button type="submit" class="btn">
                    <i class="material-icons">&#xE8B6;</i>
                </button>
            </div>
        </div>
    </form>
    
        <!-- conta -->
        <div class="navbar-nav ml-auto action-buttons">
            <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4">Entrar</a>
                <div class="dropdown-menu action-form">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <p class="hint-text">Entrar com sua conta</p>
                        <div class="form-group social-btn clearfix">
                            <a href="#" class="btn btn-secondary facebook-btn float-left"><i class="fa fa-facebook"></i>
                                Facebook</a>
                            <a href="#" class="btn btn-secondary twitter-btn float-right"><i class="fa fa-twitter"></i>
                                Twitter</a>
                        </div>
                        <div class="or-seperator"><b>ou</b></div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Seu email" required="required ">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha" required="required">
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Login">
                        <div class="text-center mt-2">
                            <a href="#">Esqueceu sua senha?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">Cadastre-se</a>
                <div class="dropdown-menu action-form">
                    <form action="adm/salvarusuarios.php" method="post" onsubmit="validateForm()">
                        <p class="hint-text">Crie sua conta</p>
                        <div class="form-group">
                            <input type="nome" class="form-control" placeholder="Seu nome" required="required" name="nome">
                        </div>
                        <div class="form-group">
                            <input type="email" onblur="verificarEmail()" class="form-control" placeholder="Seu email" required="required" name="email" id="emailInput">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha" required="required" name="senha">
                        </div>

                        <div class="form-group">
                            <label class="form-check-label"><input type="checkbox" required="required"> Você aceita
                                nossos <a href="#">Termos &amp; Condições</a></label>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Criar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- slide -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <a target="_parent" href="peças/detalhesproduto.php">
            <div class="carousel-item active">
                <img src="assets/carrosel/FF358-CLASSIC-1_.webp" class="d-block w-100" alt="...">
            </div>
        </a>
        <a target="_parent" href="peças/detalhesproduto.php">
            <div class="carousel-item">
                <img src="assets/carrosel/img.1.webp" class="d-block w-100" alt="...">
            </div>
        </a>
        <a target="_parent" href="peças/detalhesproduto.php">
            <div class="carousel-item">
                <img src="assets/carrosel/OF562-AIRFLOW-TRIBAL.webp" class="d-block w-100" alt="...">
            </div>
        </a>
        <a target="_parent" href="peças/detalhesproduto.php">
            <div class="carousel-item">
                <img src="assets/carrosel/RAPID-XTREET.webp" class="d-block w-100" alt="...">
            </div>
        </a>
        <a target="_parent" href="peças/detalhesproduto.php">
            <div class="carousel-item">
                <img src="assets/carrosel/SCOPE-SKID-RED.webp" class="d-block w-100" alt="...">
            </div>
        </a>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!--Produtos-->


<?php
include("adm/conexao.php");

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$sql = 'SELECT * FROM produtos ORDER BY image ASC';
$result = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
?>

<div class="row justify-content-between">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-3 mt-2">
            
            <div class="card">


               <h4> <?php echo  $row["produtonome"]; ?> </h4>
                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row["image"]) . '" />'; ?>
               
                <?php echo $row["produtopreco"]; ?>
                <button class="comprar" onclick="window.location.href='detalhesproduto.php';">Comprar</button>
                <button class="carrinho">Adicionar ao carrinho</button>
            </div>
            
        </div>
    <?php } ?>
</div>

<?php
mysqli_close($conexao);
?>



</body>


</html>