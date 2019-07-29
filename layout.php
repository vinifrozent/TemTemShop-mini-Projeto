
<html>
<head>
</head>
<body>
	<?php


   function Inicio($isHome = "false")
   {
    //iniciar a sessao
	?>
	<html>
	<head>
		<title>TemTemShop - Materiais em quantidade</title>
		<link rel="stylesheet" type="text/css" href="style1.css" />
		<link  rel="stylesheet" type="text/css"  href="estilo1.css"/>
	</head>
	<body> 
			<div class="languages" style="width: 400px; padding-top: 0px; height: 170px;">											
				<p class="tel">TELEVENDAS</p>
				<br>
				<p class="tel1">
				TEL:(12)3933-1056
				<br>
				Email: central_flex@hotmail.com
				<br>
				<br>
				Horário de atendimento:
				<br>			
				8h as 17h
				<br>
				de 2ª as 6ª feiras.
				</p>
			</div>
			
			</div>
			
	<div id="main_container">
	 

			<!--<div style="padding-top:20px;">
				<span class="tel">Telefone/Nextel</span>
				<br>
				<span class="telefones">(12) 000-0000 | 0000-0000 | 00000</span>   
			</div>-->	
		<div id="header">

	  </div>
	  <div id="main_content">
		<div id="menu_tab">
		  <ul class="menu">
			<li><a href="index.php" class="nav"> Home </a></li>
			<li class="divider"></li>
			<li><a href="promocao.php" class="nav">Promoções</a></li>
			<li class="divider"></li>  
			<li><a href="contato.php" class="nav">Contato</a></li> 
			<li class="divider"></li>

		<?php
			if(isset($_SESSION['ID']))
			{   
				echo "<li><a href='cadastraproduto.php' class='nav'>Adcion. Produto</a>";
				echo "</li>";	
				echo "<li class='divider'></li>";
				echo "<li><a href='cadastracategoria.php' class='nav'>Adcion. Categoria</a>";
				echo "</li>";	
				echo "<li class='divider'></li>";
				echo "<li><a href='deletaproduto.php' class='nav'>R. Produto</a>";
				echo "</li>";	
				echo "<li class='divider'></li>";
				echo "<li><a href='deletacategoria.php' class='nav'>R. Categoria</a>";
				echo "</li>";
								echo "<li class='divider'></li>";
			}

			 if(isset($_SESSION["Nome_Completo"]))
			{
				echo "<li ><a href='' class='nav'>";
				echo " Olá ".$_SESSION['Nome_Completo'];
				echo "</a></li>";
				echo "<li class='divider'></li>";
				echo '<li><a href="logout.php" class="nav"> Sair</a></li>';
			}
		?>		

		  </ul>
		</div><!-- end of menu tab -->
		<?php
		if($isHome == 'true')
			{
		?>			
		<div class="crumb_navigation">Página Principal:<span class="current"><a href="index.php"> Home</a></span> </div>
	
		<div class="left_content">
		  <div class="title_box">Categorias</div>
		  <ul class="left_menu">
			<?php
			    
			    include("conexao.php");
			    $sql="select * from categorias order by nome";
				$resultado = $conexao->query($sql);
				while($linha = $resultado->fetch_object())
				{
				 echo utf8_encode("<li class='even'><a href='index.php?cat=$linha->cod_categoria'><span>$linha->nome</span></a></li>");
				}
			 
			 ?>	
		  </ul>

		</div>	
	<?php
		}
	?>		
		<!-- end of left content -->
		
			<div class="center_content">
				<?php
					if($isHome == 'true')
					{
				?>
				<div class="oferta">
				</div>
				<?php
					}
				?>
			</div>
				<?php
					if($isHome == 'true')
					{
				?>
					<div id="direita">
						<div class="title_box">Nossas Marcas</div><br><br>
						 <a href="http://www.osram.com.br/osram_br/" target="_blank"><img src="./images/TRAMONTINA.png" title="Tramontina" style="width: 160px; height:60px"></a><br><br>
						<a href="http://www.philips.com.br/" target="_blank"><img src="./images/gerdau.png" title="Aliança" style="width: 160px; height:50px"></a><br><br>
						 <a href="http://www.corona.com.br/" target="_blank"><img src="./images/krona.png" title="Krona" style="width: 160px; height:50px"></a><br><br>
						<a href="http://www.daisa.com.br/" target="_blank"><img src="" title="Gerdau" style="width: 160px; height:50px"></a><br><br>
						 <a href="http://www.ecp.com.br/" target="_blank"><img src="" title="Gold" style="width: 160px; height:50px"></a><br><br>
						<a href="http://www.empalux.com.br/" target="_blank"><img src="" title="Radial" style="width: 160px; height:50px"></a><br><br>
						<a href="http://www.fiolux.com.br/" target="_blank"><img src="" title="Lorenzetti" style="width: 160px; height:50px"></a><br><br>
						<br><br>							
					</div>
				<?php
					}
				?>
				<?php
			}
		   function Fim()
		   {

		?>
		  </div>
			<div class="footer">
			<div class="left_footer"> <img src="images/footer_logo.png" alt="" width="89" height="42"/> </div>
			<div class="center_footer"> <br />
			  <img src="images/payment.gif" alt="" /> </div>
			<div class="right_footer"> <a href="index.php">home</a><a href="contato.php">contato</a> <a href="login.php">Admin</a> </div>
		  </div>
		</div>
		<!-- end of main_container -->
		</body>
		</html>
	<?php

	   }
	?>
</body>
</html>
