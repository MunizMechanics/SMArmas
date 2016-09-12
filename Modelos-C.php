<!--
=============================================================
programa: Modelos-C.php
fun��o: Consulta dos modelos
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de modelos
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			@$codigoModelo = $_POST['codigoModelo'];
			@$nomeMarca    = $_POST['nomeMarca'];
			@$nomeModelo   = $_POST['nomeModelo'];
			
			//disponibiliza a classe conex�o
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Modelos.class.php");
			
			//instancia um objeto na classe de conexao
			$con = new Conexao();
			
			$Modelo = new Modelos($codigoModelo, $nomeMarca, $nomeModelo);
			
			//chama o m�todo listarModelo de Modelos.class.php
			$Modelo-> listarModelo();
		
		?>
		
	</body>

</html>