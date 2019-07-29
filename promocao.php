<?php
    //iniciar a sessao
	session_start();
	
	include("layout.php");
    include("conexao.php");

	Inicio("true");
?>

<?php
	//DIV CONTEUDO

		$sql = "select * from produtos 
			where promocao='S'";
	
		$resultado   = $conexao->query($sql);
			while($linha = $resultado->fetch_object())
		{
			echo "<div class='produto'>";
			echo"<img src='./produtos/$linha->foto_principal' class='img_produto'>";
			echo "<br>";
			echo "<h3> $linha->nome  </h3>";
			echo "<span class='valor'>R$ $linha->valor</span>";
			
			echo "<br>";
			echo "<a href='contato.php'><img src='./images/orc3.jpg'></a>";
			echo "</div>";
		}
?>

<?php
	//RODAPÉ			echo "<a href='detalhes.php?ID=$linha->cod_produto'><img src='./produtos/$linha->foto_principal' class='img_produto'></a>";
	Fim()
?>