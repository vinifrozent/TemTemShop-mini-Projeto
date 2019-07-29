<?php
    //iniciar a sessao
	session_start();
	
	include("layout.php");
    include("conexao.php");

	Inicio();
?>
<div class="center_content">
<?php

	if(!isset($_SESSION["Logado"]))
	{
		header("Location: login.php");
	}
	else
	{		
		
			
			$sql = "select * from produtos";
			$resultado   = $conexao->query($sql);
			
			echo "<h3>Excluir Produtos do Sistema</h3><br>
			<div style='overflow-x:auto; width: 150%;'>";

					echo "<table>";
					echo "<tr>
					<td><center>Cód. Produto</center></td>
					<td><center>Cód. Categoria</center></td>
					<td><center>Nome</center></td>
					<td><center>Valor</center></td>
					<td><center>Em destaque?</center></td>
					<td><center>Foto</center></td>
					<td><center>Descrição</center></td>
					<td><center>Promoção</center></td>
					<td><center>Disponível</center></td>
					<td><center>Remover</center></td>
					</tr>";
					
			while($linha = $resultado->fetch_object())
			{
				echo "<tr>";
					echo "<td><center>$linha->cod_produto</center></td>";
					echo "<td><center>$linha->cod_categoria</center></td>";
					echo "<td><center>$linha->nome</center></td>";
					echo "<td><center>$linha->valor</center></td>";
					echo "<td><center>$linha->destaque</center></td>";
					echo "<td><center>$linha->foto_principal</center></td>";								
					echo "<td><center>$linha->descricao</center></td>";					
					echo "<td><center>$linha->promocao</center></td>";					
					echo "<td><center>$linha->disponivel</center></td>";				
					echo "<td><center><a href=\"removerProduto.php?cod_produto=".$linha->cod_produto."\">Remover</a></center></td>";
				echo "</tr>";	
			}	
			echo"</div>";	
	}
?>
