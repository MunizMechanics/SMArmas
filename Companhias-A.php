<?php ob_start() ?>

<!--
=============================================================
programa: Companhias-A.php
função: Alteração das Companhias
data: 22/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o de companhias
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			//pega por post o componente codigo do formulario -F.
			$codigoCompanhia 		 = $_POST['codigoCompanhia'];
			$nomeOrganizacaoMilitar  = $_POST['nomeOrganizacaoMilitar'];
			$nomeCompanhia  	     = $_POST['nomeCompanhia'];
			
			//disponibiliza a classe conexão
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Companhias.class.php");
			
			//instancia um objeto na classe de conexao
			$con = new Conexao();
			
			$Companhia = new Companhias($codigoCompanhia, $nomeOrganizacaoMilitar, $nomeCompanhia);

			$Companhia->alterarCompanhia();
		
			header ('location: Menu.php?pag=Companhias-C');
		
		?>
		
	</body>

</html>