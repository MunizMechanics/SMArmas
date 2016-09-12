<!--
=============================================================
programa: Armas-C.php
função: Consulta das armas
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de armas
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			//pega por post o componente codigo do formulario -F.
			@$codigoArma 	  = $_POST['codigoArma'];
			@$numeroCalibre   = $_POST['numeroCalibre'];
			@$nomeModelo      = $_POST['nomeModelo'];
			@$numeroSerieArma = $_POST['numeroSerieArma'];
			
			//disponibiliza a classe conexão
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Armas.class.php");
			
			//instancia um objeto na classe de conexao
			$con = new Conexao();

			$Arma = new Armas($codigoArma, $numeroCalibre, $nomeModelo, $numeroSerieArma);
			
			$Arma-> listarArma();
		
		?>
		
	</body>

</html>