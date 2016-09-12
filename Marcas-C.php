<!--
=============================================================
programa: Marcas-C.php
função: Consulta das Marcas
data: 17/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de marcas
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoMarca = 0;
			$nomeMarca   = NULL;
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Marcas.class.php");
			
			$con = new Conexao();
			$Marca = new Marcas($codigoMarca, $nomeMarca);
			
			$Marca-> listarMarca();
		
		?>
		
	</body>

</html>