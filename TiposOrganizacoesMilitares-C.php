<!--
=============================================================
programa: TiposOrganizacoesMilitares-C.php
função: Consulta dos tipos de OM
data: 09/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de tipos de organiza&ccedil;&otilde;es militares
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoTipoOrganizacaoMilitar   = 0;
			$nomeTipoOrganizacaoMilitar 	= NULL;
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/TiposOrganizacoesMilitares.class.php");
			
			$con = new Conexao();
			$TipoOrganizacaoMilitar = new TiposOrganizacoesMilitares($codigoTipoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar);
			
			//chama o método listarTipoOrganizacaoMilitar de TiposOrganizacoesMilitares.class.php
			$TipoOrganizacaoMilitar-> listarTipoOrganizacaoMilitar();
		
		?>
		
	</body>

</html>