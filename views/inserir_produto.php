<?php if(!isset($_GET['Editar'])){ ?>

  <script>
    function valida_campos()
    {
        if(document.getElementById('nome_produto').value == '')
        {
            alert('Digite o nome do produto!');
            document.getElementById('nome_produto').focus();
            return false;
        }
        if(document.getElementById('valor_produto').value == '')
        {
            alert('Digite o valor do produto!');
            document.getElementById('valor_produto').focus();
            return false;
        }
        if(document.getElementById('valor_produto').value <= 0)
        {
            alert('Digite um valor positivo para o produto!');
            document.getElementById('valor_produto').focus();
            return false;
        }
        if (isNaN(document.getElementById('valor_produto').value)   ) {
            alert("Digite apenas números!");
            document.getElementById('valor_produto').focus();
            return false;
        }


    }
  </script>

<h1 class="font-weight-bold">Inserir Novo Produto</h1>
<form method="post" action="processa_produto.php" onsubmit="return valida_campos();">
    <br>
    <label class="badge badge-secondary">Nome produto:</label><br>
    <input class="form-control" type="text" name="nome_produto" id="nome_produto" placeholder="Insira o nome do produto">
    <br><br>
    <label class="badge badge-secondary">Valor produto:</label><br>
    <input class="form-control" type="text" name="valor_produto" id="valor_produto" placeholder="Insira o valor do produto">
    <br><br>
    <input class="btn btn-success" type="submit" value="Inserir Produto">
</form>

<?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_produtos)) { ?>
        <?php if($linha['id_produto'] == $_GET['Editar']) { ?>

            <h1 class="font-weight-bold">Editar Produto</h1>
            <form method="post" action="edita_produto.php">
                <input class="form-control" type="hidden" name="id_produto" value="<?php echo $linha['id_produto']; ?>">
                <br>
                <label class="badge badge-secondary">Nome produto:</label><br>
                <input class="form-control" type="text" name="nome_produto" value="<?php echo $linha['nome_produto']; ?>">
                <br><br>
                <label class="badge badge-secondary">Valor produto:</label><br>
                <input class="form-control" type="text" name="valor_produto" value="<?php echo $linha['valor_produto']; ?>">
                <br><br>
                <input class="btn btn-success" type="submit" value="Editar Produto">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
