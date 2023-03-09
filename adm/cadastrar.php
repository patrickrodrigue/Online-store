<!DOCTYPE html>
<html lang="PT-BR">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="cadastrar.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR PRODUTOS</title>
</head>

<body>

    <form action="salvamarca.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label for="marcaprodutos">Adicionar Marca:<br></label>
                            <input type="text" id="marcaprodutos" name="marcaprodutos" placeholder="Adicionar Marca">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" name="submit" value="Enviar" class="btn btn-primary">Enviar</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <form action="salvaproduto.php" method="post" class="card" enctype="multipart/form-data">
        <div class="inp">
            <?php
            include("conexao.php");
            $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
            $sql = 'SELECT * FROM marcaprodutos  ORDER BY id DESC';

            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            ?>
            <div>
                <label for="marca">Marca do Produto<br></label>
                <select name="marca" id="marca">
                    <option value="">Selecione a Marca</option>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <option value="<?php echo $row["marcaprodutos"]; ?>"><?php echo $row["marcaprodutos"]; ?></option>
                    <?php } ?>

                </select>
                <button type="button" class="novamarca" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nova Marca
                </button>
            </div>
            <div></div>
            <div>
                <label for="produtonome">Nome:<br></label>
                <input type="text" id="produtonome" name="produtonome" placeholder="Nome Do Produto">
            </div>


            <label for="produtodescricao" class="descricao">Descrição:<br></label>
            <textarea class="areatxt" id="produtodescricao" name="produtodescricao" placeholder="Máximo 400 caracters"></textarea>

        </div>

    <div>    
        <label for="produtopreco">Preço:<br></label>
        <input id="produtopreco" class="valor" name="produtopreco"></div>
   
       <div> <label for="quantidade">Quantidade:<br></label>
        <input type="number" id="quantidade" class="quantidade" name="quantidade">
    </div>
        <div>
            <div>
                <label for="cod.ID">Cód.ID:<br></label>
                <input id="cod.ID" class="cod.ID" name="cod.ID">
            </div>

            <div>
                <label for="image">Foto do Produto:<br></label>
                <input type="file" id="image" name="image">
            </div>
        
            <div>
                <button type="submit" value="Enviar">Enviar</button>
            </div>
        </div>
    </form>

    <!-- MENU LATERAL -->
    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                        Menu
                    </span>
                </a>

            </li>
            <li>
                <a href="adm.php">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Página Inicial
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="editarprodutos.php">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                        Editar Produtos
                    </span>
                </a>

            </li>

            <li class="has-subnav">
                <a href="produtos.php">
                    <i class="fa fa-folder-open fa-2x"></i>
                    <span class="nav-text">
                        Estoque Lojas
                    </span>
                </a>

            </li>
            <li>
                <a href="../index.php">
                    <i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text">
                        Site
                    </span>
                </a>
            </li>
            <li>
                <a href="cadastrar.php">
                    <i class="fa fa-font fa-2x"></i>
                    <span class="nav-text">
                        Adicionar Produtor
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-info fa-2x"></i>
                    <span class="nav-text">
                        Lembretes
                    </span>
                </a>
            </li>
        </ul>
        <ul class="logout">
            <li>
                <a href="#">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Sair
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://plentz.github.io/jquery-maskmoney/javascripts/jquery.maskMoney.min.js" type="text/javascript"></script>
    <script>
        jQuery(function() {

            jQuery("#produtopreco").maskMoney({
                prefix: 'R$ ',
                thousands: '.',
                decimal: ','
            })

        });


        function newmarca() {

            window.location.href = "salvamarca.php";
        }
    </script>

</body>

</html>