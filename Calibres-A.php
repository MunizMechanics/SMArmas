<?php ob_start() ?>

<!--
=============================================================
programa: Calibres-A.php
função: Alteração dos Calibres
data: 17/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o dos calibres
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoCalibre = $_POST['codigoCalibre'];
			$numeroCalibre = $_POST['numeroCalibre'];
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Calibres.class.php");
			
			$con = new Conexao();
			$Calibre = new Calibres($codigoCalibre, $numeroCalibre);
			
			$Calibre->alterarCalibre();
		
			header ('location: Menu.php?pag=Calibres-C');
		
		?>
		
	</body>

</html>