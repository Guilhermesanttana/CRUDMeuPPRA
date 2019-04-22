<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "meuppra";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "Select * from Vendedores";
$consulta_vendedores = mysqli_query($conexao, $query);

$query = "Select * from Produtos";
$consulta_produtos = mysqli_query($conexao, $query);

$query = "Select vendas.id_venda, vendedores.nome_vendedor, produtos.nome_produto, vendas.quantidade
          FROM Vendedores, Produtos, Vendas
          WHERE vendas.id_vendedor = vendedores.id_vendedor
          AND vendas.id_produto = produtos.id_produto";
$consulta_vendas = mysqli_query($conexao, $query);
