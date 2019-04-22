<?php

include 'db.php';

$id_venda = $_POST['id_venda'];

$query = "DELETE FROM Vendas
          Where id_venda = $id_venda";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Vendas');
