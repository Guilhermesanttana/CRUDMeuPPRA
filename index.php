<?php

#Iniciar Sessao
session_start();

#Banco de dados
include 'db.php';

#Cabecalho
include 'header.php';

#Conteudo da pagina
if(isset($_SESSION['login']))
{
  if(isset($_GET['pagina']))
  {
    $pagina = $_GET['pagina'];
  }
    else
    {
      $pagina = 'Produtos';
    }
}
  else
  {
    $pagina = 'home';
  }


  switch($pagina){
      case 'Produtos' : include 'views/produtos.php'; break;
      case 'Vendedores' : include 'views/vendedores.php'; break;
      case 'Vendas' : include 'views/vendas.php'; break;
      case 'Inserir_Produto' : include 'views/inserir_produto.php'; break;
      case 'Inserir_Vendedor' : include 'views/inserir_vendedor.php'; break;
      default: include 'views/home.php'; break;
  }

#Rodape
include 'footer.php';
