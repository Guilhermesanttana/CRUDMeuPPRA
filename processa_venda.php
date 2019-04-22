<?php

include 'db.php';

$id_produto = $_POST['escolha_produto'];
$id_vendedor = $_POST['escolha_vendedor'];
$quantidade = $_POST['quantidade'];


$query = "INSERT INTO VENDAS (id_vendedor, id_produto, quantidade)
          VALUES($id_vendedor, $id_produto, $quantidade)";


mysqli_query($conexao, $query);

header('location:index.php?pagina=Vendas');
