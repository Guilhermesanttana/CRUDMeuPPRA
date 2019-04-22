<?php

include 'db.php';

$nome_produto = $_POST['nome_produto'];
$valor_produto = $_POST['valor_produto'];

$query = "INSERT INTO produtos(nome_produto, valor_produto)
          VALUES('$nome_produto',$valor_produto)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Produtos');
