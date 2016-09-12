<!--
=============================================================
programa: Calibres-C.php
função: Consulta dos Calibres
data: 17/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de calibres
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoCalibre = 0;
			$numeroCalibre = NULL;
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Calibres.class.php");
			
			$con = new Conexao();
			$Calibre = new Calibres($codigoCalibre, $numeroCalibre);
			
			$Calibre-> listarCalibre();
		
		?>
		
	</body>

</html>