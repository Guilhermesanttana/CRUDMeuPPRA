<?php

include 'db.php';

$id_produto = $_POST['id_produto'];

$query = "DELETE FROM Produtos
          Where id_produto = $id_produto";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Produtos');
