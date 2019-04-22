<?php

include ("db.php");
//$grupo = selectAllVendas();
//var_dump($grupo);

$arqexcel = "<meta charset='UTF-8'>";


$arqexcel .= "<table id='produtos'>
    <thead>
      <tr>
          <th>ID Venda</th>
          <th>ID Vendedor</th>
          <th>ID Produto</th>
          <th>Quantidade</th>

      </tr>
    </thead>

    <tbody>";

      while($linha = mysqli_fetch_array($consulta_vendas))
      {

        $arqexcel .="
            <tr><td>{$linha["id_venda"]}</td>
            <td>{$linha['nome_vendedor']}</td>
            <td>{$linha['nome_produto']}</td>
            <td>{$linha['quantidade']}</td>
            </tr>";
      }

    $arqexcel .= "</tbody>
</table>";

      header("Content-Type: application/xls");
      header("Content-Disposition:attachment; filename = relatorio.xls");
      echo $arqexcel;
