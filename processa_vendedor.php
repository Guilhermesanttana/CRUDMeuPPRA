<?php

include 'db.php';

$nome_vendedor = $_POST['nome_vendedor'];

$query = "INSERT INTO vendedores(nome_vendedor)
          VALUES('$nome_vendedor')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Vendedores');
