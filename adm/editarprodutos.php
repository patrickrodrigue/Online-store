<?php
include_once("conexao.php");
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$result_cursos = "SELECT * FROM produtos";
$resultado_cursos = mysqli_query($conexao, $result_cursos);
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="editarprodutos.css">
</head>
<body>
<div class="area" role="main">
			<div class="page-header">
				<h1>Listar Produtos</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped">
            
						<thead>
							<tr>
							    <th>Marca</th>
								<th>Modelo</th>
								<th>Valor</th>
								<th>Quantidade</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
							<?php while ($rows_cursos = mysqli_fetch_assoc($resultado_cursos)) { ?>
								<tr>
									
									<td><?php echo $rows_cursos['produtomarca']; ?></td>
									<td><?php echo $rows_cursos['produtonome']; ?></td>
									<td><?php echo $rows_cursos['produtopreco']; ?></td>
									
									<td>
									

								
									

									</td>
								</tr>

                                <?php } ?>
                        </tbody>
                    </table>


  <!-- MENU LATERAL -->

<div class="area"></div><nav class="main-menu">
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
</body>
</html>