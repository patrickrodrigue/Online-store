<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="col-md-9 mt-3">
    <div class="row">
        <?php
        $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        $sql = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY image ASC") or die(mysqli_error($conexao));
        ?>


        <div class="col-md-3">
            <div class="sidebar-module">
                <div class="main_card">

                    <div class="card">
                        <?php
                        include("adm/conexao.php");

                        $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                        $sql = 'SELECT * FROM produtos ORDER BY image ASC';
                        $result = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

                        if ($result) {
                            while ($aux = mysqli_fetch_assoc($result)) {
                                echo '<h5 class="card-title">' . $aux["produtonome"] . '</h5>';
                                echo  '<img src="data:image/jpeg;base64,' . base64_encode($aux["image"]) . '" />';

                                echo '<p class="card-text">' . $aux["produtodescricao"] . '</p>';
                                echo '<span>R$ ' . $aux["produtopreco"] . ' em <p>....</p></span>';
                                echo '<button class="comprar">Comprar</button>';
                                echo '<button class="carrinho"> Adicionar ao carrinho</button>';
                            }
                        }
                        mysqli_close($conexao);
                        ?>
                    </div>

                </div>
            </div>
        </div>



    </div>
</div>



<div class="col-md-9 mt-3">
    <div class="row">
        <?php
        $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        $sql = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY image ASC") or die(mysqli_error($conexao));
        ?>


        <div class="col-md-3">
            <div class="sidebar-module">
                <div class="main_card">

                    <div class="card">
                        <?php
                        include("adm/conexao.php");

                        $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                        $sql = 'SELECT * FROM produtos ORDER BY image ASC';
                        $result = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

                        if ($result) {
                            while ($aux = mysqli_fetch_assoc($result)) {
                                echo '<h5 class="card-title">' . $aux["produtonome"] . '</h5>';
                                echo  '<img src="data:image/jpeg;base64,' . base64_encode($aux["image"]) . '" />';

                                echo '<p class="card-text">' . $aux["produtodescricao"] . '</p>';
                                echo '<span>R$ ' . $aux["produtopreco"] . ' em <p>....</p></span>';
                                echo '<button class="comprar">Comprar</button>';
                                echo '<button class="carrinho"> Adicionar ao carrinho</button>';
                            }
                        }
                        mysqli_close($conexao);
                        ?>
                    </div>

                </div>
            </div>
        </div>



    </div>
</div>




</body>
</html>