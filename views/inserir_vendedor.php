<?php if(!isset($_GET['Editar'])){ ?>

<script>
  function valida_campos()
  {
      if(document.getElementById('nome_vendedor').value == '')
      {
          alert('Digite o nome do vendedor!');
          document.getElementById('nome_vendedor').focus();
          return false;
      }
      if (isNaN(document.getElementById('nome_vendedor').value) == false) {
          alert('Digite apenas letras!');
          document.getElementById('nome_vendedor').focus();
          return false;
      }
  }
</script>


<h1 class="font-weight-bold"> Inserir Novo Vendedor</h1>
<form method="POST" action="processa_vendedor.php" onsubmit="return valida_campos();">
    <br>
    <label class="badge badge-secondary">Nome vendedor:</label><br>
    <input class="form-control" type="text" name="nome_vendedor" placeholder="Insira o nome do vendedor" id="nome_vendedor">
    <br><br>
    <input class="btn btn-success" type="submit" value="Inserir Vendedor">
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_vendedores)) { ?>
        <?php if($linha['id_vendedor'] == $_GET['Editar']) { ?>

          <h1 class="font-weight-bold"> Editar Vendedor</h1>
          <form method="POST" action="edita_vendedor.php" onsubmit="return valida_campos();">
              <input type="hidden" name="id_vendedor" value="<?php echo $linha['id_vendedor']; ?>">
              <br>
              <label class="badge badge-secondary">Nome vendedor:</label><br>
              <input class="form-control" type="text" name="nome_vendedor" id="nome_vendedor" value="<?php echo $linha['nome_vendedor']; ?>">
              <br><br>
              <input class="btn btn-success" type="submit" value="Editar Vendedor">
          </form>
      <?php } ?>
  <?php } ?>
<?php } ?>
