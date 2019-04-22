<a class="btn btn-success" href="?pagina=Inserir_Produto">Inserir novo produto</a>
<p><br></p>
<table class="table table-hover table-striped" id="produtos">
    <thead>
      <tr>
          <th>ID Produto</th>
          <th>Nome</th>
          <th>Valor</th>
          <th></th>
          <th></th>
      </tr>
    </thead>

    <tbody>
    <?php
      while($linha = mysqli_fetch_array($consulta_produtos))
      {
        echo '<tr><td>'.$linha['id_produto'].'</td>';
        echo '<td>'.$linha['nome_produto'].'</td>';
        echo '<td>'.$linha['valor_produto'].'</td>';
    ?>

        <td>
          <form method="post" action="?pagina=Inserir_Produto&Editar=<?php echo $linha['id_produto'] ?>">
            <input type="hidden" name="id_produto" value="<?php echo $linha['id_produto'] ?>">
            <input class="btn btn-success" type="submit" value="Editar">
          </form>
        </td>
        <td>
          <form method="post" action="deleta_produto.php">
            <input type="hidden" name="id_produto" value="<?php echo $linha['id_produto']; ?>">
            <input class="btn btn-dark" type="submit" value="Deletar">
          </form>
        </td></tr>
      <?php
      }
      ?>
    </tbody>
</table>
