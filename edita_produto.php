<?php

include 'db.php';

$id_produto = $_POST['id_produto'];
$nome_produto = $_POST['nome_produto'];
$valor_produto = $_POST['valor_produto'];

$query = "UPDATE PRODUTOS SET nome_produto='$nome_produto', valor_produto=$valor_produto
          WHERE id_produto = $id_produto";


mysqli_query($conexao, $query);

header('location:index.php?pagina=Produtos');
