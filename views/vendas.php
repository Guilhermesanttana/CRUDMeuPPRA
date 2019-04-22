<h1 class="font-weight-bold"> Efetuar Nova Venda</h1>

<script>
  function valida_campos()
  {
      if(document.getElementById('quantidade').value == '')
      {
          alert('Digite uma quantidade!');
          document.getElementById('quantidade').focus();
          return false;
      }
      if(document.getElementById('quantidade').value <= 0)
      {
          alert('Digite uma quantidade positiva!');
          document.getElementById('quantidade').focus();
          return false;
      }
      if (isNaN(document.getElementById('quantidade').value)) {
          alert('Digite apenas numeros!');
          document.getElementById('quantidade').focus();
          return false;
      }
  }
</script>


  <form method="post" action="processa_venda.php" onsubmit="return valida_campos();">
  	<br>
  	<p class="badge badge-secondary">Selecione um vendedor</p>
  	<select class="form-control" name="escolha_vendedor" id="escolha_vendedor">
  		<option>Selecione um vendedor</option>
  		<?php
  		while($linha = mysqli_fetch_array($consulta_vendedores)){
  			echo '<option value="'.$linha['id_vendedor'].'">'.$linha['nome_vendedor'].'</option>';
  		}
  		?>
  	</select>
  	<br>

    <p class="badge badge-secondary">Selecione o produto</p>
  	<select class="form-control" name="escolha_produto">
  		<option>Selecione um produto</option>
  		<?php
  		while($linha = mysqli_fetch_array($consulta_produtos)){
  			echo '<option value="'.$linha['id_produto'].'">'.$linha['nome_produto'].'</option>';
  		}
  		?>
  	</select>
        <br>
        <label class="badge badge-secondary">Quantidade:</label><br>
        <input class="form-control" type="text" name="quantidade" id="quantidade" placeholder="Insira a quantidade">
        <br><br>
  	<input class="btn btn-success" type="submit" value="Efetuar Venda">
  </form>

<br><br>
<h1 class="font-weight-bold">Relatorio de Vendas</h1>

<table class="table table-hover table-striped" id="produtos">
    <thead>
      <tr>
          <th>ID Venda</th>
          <th>Vendedor</th>
          <th>Produto</th>
          <th>Quantidade</th>
          <th></th>

      </tr>
    </thead>

    <tbody>
    <?php
      while($linha = mysqli_fetch_array($consulta_vendas))
      {
        echo '<tr><td>'.$linha['id_venda'].'</td>';
        echo '<td>'.$linha['nome_vendedor'].'</td>';
        echo '<td>'.$linha['nome_produto'].'</td>';
        echo '<td>'.$linha['quantidade'].'</td>';
    ?>
        
      <td>
        <form method="post" action="deleta_venda.php">
          <input type="hidden" name="id_venda" value="<?php echo $linha['id_venda']; ?>">
          <input class="btn btn-dark" type="submit" value="Deletar">
        </form>
      </td></tr>
      <?php
      }
      ?>
    </tbody>
</table>
<br>
<form action="gerar_excel.php">
  <input class="btn btn-success" type="submit" value="Gerar Excel">
</form>
