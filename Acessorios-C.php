<!--
=============================================================
programa: Acessorios-C.php
função: Consulta das Acessorios
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de acess&ocute;rios
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoAcessorio = 0;
			$nomeAcessorio   = NULL;
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Acessorios.class.php");
			
			$con = new Conexao();
			$Acessorio = new Acessorios($codigoAcessorio, $nomeAcessorio);
			
			$Acessorio-> listarAcessorio();
		
		?>
		
	</body>

</html>