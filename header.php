<!DOCTYPE html>
<html>
<head>
  <title>MeuPPRA</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
  <header>
    <div class="container">
      <a href="#">
        <img src="img/logo.png" title="Logo" alt="Logo">
      </a>
      <div id="menu">
        <a href="?pagina=Produtos">Produtos</a>
        <a href="?pagina=Vendedores">Vendedores</a>
        <a href="?pagina=Vendas">Vendas</a>
        <?php if(isset($_SESSION['login'])){ ?>
          <a href="logout.php"><?php echo $_SESSION['usuario']; ?>(sair)</a>
        <?php } ?>
      </div>
    </div>
  </header>

  <div id="conteudo" class ="container">
