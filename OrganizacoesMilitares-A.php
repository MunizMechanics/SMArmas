<?php ob_start() ?>

<!--
=============================================================
programa: OrganizacoesMilitares-A.php
função: Alteração das OM
data: 09/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o de organiza&ccedil;&otilde;es militares
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoOrganizacaoMilitar = $_POST['codigoOrganizacaoMilitar'];
			$nomeTipoOrganizacaoMilitar   = $_POST['nomeTipoOrganizacaoMilitar'];
			$nomeOrganizacaoMilitar   = $_POST['nomeOrganizacaoMilitar'];
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/OrganizacoesMilitares.class.php");
			
			$con = new Conexao();
			$OrganizacaoMilitar = new OrganizacoesMilitares($codigoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar, $nomeOrganizacaoMilitar);

			$OrganizacaoMilitar->alterarOrganizacaoMilitar();
		
			header ('location: Menu.php?pag=OrganizacoesMilitares-C');
		
		?>
		
	</body>

</html>