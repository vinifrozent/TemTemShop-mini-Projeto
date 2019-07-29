<?php
		$cod_categoria = $_GET ['cod_categoria'];
		include "conexao.php";
	
		$sql = "delete from categorias where cod_categoria = '$cod_categoria'";		
		$resultado = $conexao->query($sql);
	
			
		header("Location: deletacategoria.php");	
?>