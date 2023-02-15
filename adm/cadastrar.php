


<!DOCTYPE html>
<html lang="PT-BR">
<link rel="stylesheet" href="cadastrar.css">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CADASTRAR PRODUTOS</title>
</head>

<body>
  <form action="salvarproduto.php" method="post" class="card"  enctype="multipart/form-data">
    <div class="inp">
   
    <div>
    <label for="produtomarca"> Marca do Produto<br> </label>    
    <select name="produtomarca" id="produtomarca"  >
        <option value="">Selecione a Marca</option>
        <option value="HONDA">HONDA</option>
        <option value="YAMAHA">YAMAHA</option>
        <option value="KAWSAKI">KAWSAKI</option>
        <option value="KTM">KTM</option>
        <option value="Ls2">Ls2</option>
        <option value="TEXX">TEXX</option>
        <option value="Outras">Outras</option>
    </select>
    </div>
    <div>
    
    <label for="produtonome">Produto Nome:<br></label>
      <input type="text" id="produtonome" name="produtonome" placeholder="Nome Do Produto">
    </div>
    
    <label for="produtopreco">Preço:<br></label>
    <input type="number" id="produtopreco" name="produtopreco" step="0.01">
    
    <div>
        <label for="produtodescricao">Descrição:<br></label>
        <textarea id="produtodescricao" name="produtodescricao" placeholder="Máximo 400 caracters"></textarea>
      </div>

    <label for="image">Foto do Produto:<br></label>
    <input type="file" id="image" name="image">
    <div>
    
    <button type="submit" value="Enviar">Enviar</button>
    </div>
  </div>
  </form>







  

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