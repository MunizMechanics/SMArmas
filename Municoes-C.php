<!--
=============================================================
programa: Munições-C.php
função: Consulta das Munições
data: 22/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de muni&ccedil;&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoMunicao      = 0;
			$numeroCalibre      = NULL;
			$numeroSerieMunicao = NULL;
			
			include_once ("classes/Conexao.class.php");
			include_once ("classes/Municoes.class.php");
			
			$con = new Conexao();
			$Municao = new Municoes($codigoMunicao, $numeroSerieMunicao, $numeroCalibre);
			
			//chama o método listarOrganizacaoMilitar de OrganizacoesMilitares.class.php
			$Municao-> listarMunicao();
		
		?>
		
	</body>

</html>