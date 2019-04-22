<a class="btn btn-success" href="?pagina=Inserir_Vendedor">Inserir novo vendedor</a>
<p><br></p>
<table class="table table-hover table-striped" id="vendedores">

    <thead>
      <tr>
          <th>ID Vendedor</th>
          <th>Nome</th>
          <th></th>
          <th></th>
      </tr>
    </thead>

    <tbody>
    <?php
      while($linha = mysqli_fetch_array($consulta_vendedores)){
        echo '<tr><td>'.$linha['id_vendedor'].'</td>';
        echo '<td>'.$linha['nome_vendedor'].'</td>';
    ?>
        <td>
          <form method="post" action="?pagina=Inserir_Vendedor&Editar=<?php echo $linha['id_vendedor'] ?>">
            <input type="hidden" name="id_vendedor" value="<?php echo $linha['id_vendedor'] ?>">
            <input class="btn btn-success" type="submit" value="Editar">
          </form>
        </td>
        <td>
          <form method="post" action="deleta_vendedor.php">
            <input type="hidden" name="id_vendedor" value="<?php echo $linha['id_vendedor']; ?>">
            <input class="btn btn-dark" type="submit" value="Deletar">
          </form>
        </td></tr>
        <?php
        }
        ?>
    </tbody>
</table>
