<?php
		$cod_produto = $_GET ['cod_produto'];
		include "conexao.php";
	
		$sql = "update produtos set disponivel = 'S' where cod_produto = '$cod_produto'";		
		$resultado = $conexao->query($sql);
	
			
		header("Location: deletaproduto.php");	
?>