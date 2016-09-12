<!--
=============================================================
programa: OrganizacoesMilitares-C.php
função: Consulta das OM
data: 09/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de organiza&ccedil;&otilde;es militares
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoOrganizacaoMilitar   = 0;
			$nomeTipoOrganizacaoMilitar = NULL;
			$nomeOrganizacaoMilitar 	= NULL;
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/OrganizacoesMilitares.class.php");
			
			$con = new Conexao();
			$OrganizacaoMilitar = new OrganizacoesMilitares($codigoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar, $nomeOrganizacaoMilitar);
			
			//chama o método listarOrganizacaoMilitar de OrganizacoesMilitares.class.php
			$OrganizacaoMilitar-> listarOrganizacaoMilitar();
		
		?>
		
	</body>

</html>