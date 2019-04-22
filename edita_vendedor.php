<?php

include 'db.php';

$id_vendedor = $_POST['id_vendedor'];
$nome_vendedor = $_POST['nome_vendedor'];

$query = "UPDATE VENDEDORES SET nome_vendedor='$nome_vendedor'
          WHERE id_vendedor = $id_vendedor";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Vendedores');
