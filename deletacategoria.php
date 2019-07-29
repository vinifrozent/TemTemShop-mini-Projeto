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
		
			
			$sql = "select * from categorias";
			$resultado   = $conexao->query($sql);
			
			echo "<h3>Excluir Categorias do Sistema</h3><br>
			<div style='overflow-x:auto; width: 150%;'>";

					echo "<table>";
					echo "<tr>
					<td><center>Cód. Categoria</center></td>
					<td><center>Nome</center></td>
					<td><center>Remover</center></td>
					</tr>";
					
			while($linha = $resultado->fetch_object())
			{
				echo "<tr>";
					echo "<td><center>$linha->cod_categoria</center></td>";
					echo "<td><center>$linha->nome</center></td>";			
					echo "<td><center><a href=\"removerCategoria.php?cod_categoria=".$linha->cod_categoria."\">Remover</a></center></td>";
				echo "</tr>";	
			}	
			echo"</div>";	
	}
?>