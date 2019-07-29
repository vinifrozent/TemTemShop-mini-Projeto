<?php
    //iniciar a sessao
	session_start();
	
	include("layout.php");
    include("conexao.php");

	Inicio();
?>


	<center>
		<form action="confirmalogin.php" method="post">
	
			<h2>Autenticação de Usuário Administrativo</h2>
			
			<hr><br>
			
			<b>Usuário:<b>
			<input type="text" name="login" id="Login">
			
			<br><br>
			
			<b>Senha:<b>
			<input type="password" name="senha" id="Senha" >
			<br><br>
			
			<input type="submit" value="Login">
			<br><hr>
		</form>
	</center>


<?php
	//RODAPÉ
	Fim()
?>
