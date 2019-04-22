<?php

include 'db.php';

$id_vendedor = $_POST['id_vendedor'];

$query = "DELETE FROM Vendedores
          Where id_vendedor = $id_vendedor";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Vendedores');
