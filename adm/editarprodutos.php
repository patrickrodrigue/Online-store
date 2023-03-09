<?php
include_once("conexao.php");
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$result_produto = "SELECT * FROM produtos";
$resultado_produto = mysqli_query($conexao, $result_produto);
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="editarprodutos.css">

</head>

<body>
    <div class="area" role="main">
     
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Descriçao</th>
                            <th>Valor</th>
                            <th>Quantidade</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("conexao.php");
                        $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
                        $result_produto = "SELECT * FROM produtos";
                        $resultado_produto = mysqli_query($conexao, $result_produto);
                        ?>
                        <?php while ($rows_produto = mysqli_fetch_assoc($resultado_produto)) { ?>
                            <tr>
                                <td><?php echo $rows_produto['id']; ?></td>
                                <td><?php echo $rows_produto['marca']; ?></td>
                                <td><?php echo $rows_produto['produtonome']; ?></td>
                                <td><?php echo $rows_produto['produtodescricao']; ?></td>
                                <td><?php echo $rows_produto['produtopreco']; ?></td>
                                <td><?php echo $rows_produto['quantidade']; ?></td>
                                <td>


                                    <button type="button" class="editar" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>

                                        <button type="button" class="excluir" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                            </svg></button>



                                </td>

                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Apagar item</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <label for="marcaprodutos">Apagar item da lista?<br></label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                                            <button onclick="apagar()" class="btn btn-xs btn-danger" id="delete-product-button" data-toggle="modal" data-target="#delete-product-modal" data-id="<?php echo $rows_produto['id']; ?>"> APAGAR</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- Editar -->

                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Produtos</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <label for="produtonome">Nome:<br></label>
                                            <input type="text" id="produtonome" name="produtonome" placeholder="Novo nome do Produto">
                                        </div>
                                            <div>
                                            <label for="produtodescricao">Nome:<br></label>
                                            <input type="text" id="produtodescricao" name="produtodescricao" placeholder="Nova descriçao">
                                        </div>
                                        <div>
                                            <label for="produtopreco">Preço:<br></label>
                                            <input id="produtopreco" class="valor" name="produtopreco">
                                
                                        </div>

                                        <div> <label for="quantidade">Quantidade:<br></label>
                                            <input type="number" id="quantidade" class="quantidade" name="quantidade">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Confirma</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
            <script>
                function apagar() {

                    const id = document.getElementById('delete-product-button').getAttribute('data-id'); //<-captura o id
                    fetch('excluir.php?id=' + id, { //<-Manda o ID do produto para outro arquivo usando fetch API
                            method: 'POST'
                        })
                        .then(response => {
                            location.reload(); //<- para recarrega a pagina
                        })
                        .catch(error => {
                            console.error('Erro ao apagar o produto:', error);
                        });
                    header("Location: editarprodutos.php");
                }
            </script>

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