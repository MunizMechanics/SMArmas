<?php ob_start() ?>

<!--
=============================================================
programa: TiposOrganizacoesMilitares-A.php
função: Alteração dos TiposOM
data: 09/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o de tipos de organiza&ccedil;&otilde;es militares
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoTipoOrganizacaoMilitar = $_POST['codigoTipoOrganizacaoMilitar'];
			$nomeTipoOrganizacaoMilitar   = $_POST['nomeTipoOrganizacaoMilitar'];
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/TiposOrganizacoesMilitares.class.php");
			
			$con = new Conexao();
			$TipoOrganizacaoMilitar = new TiposOrganizacoesMilitares(@$codigoTipoOrganizacaoMilitar, @$nomeTipoOrganizacaoMilitar);
			
			$TipoOrganizacaoMilitar->alterarTipoOrganizacaoMilitar();
		
			header ('location: Menu.php?pag=TiposOrganizacoesMilitares-C');
		
		?>
		
	</body>

</html>