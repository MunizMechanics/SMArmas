<?php ob_start() ?>

<!--
=============================================================
programa: Marcas-A.php
função: Alteração das Marcas
data: 17/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o das marcas
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoMarca = $_POST['codigoMarca'];
			$nomeMarca = $_POST['nomeMarca'];
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Marcas.class.php");
			
			$con = new Conexao();
			$Marca = new Marcas($codigoMarca, $nomeMarca);
			
			$Marca->alterarMarca();
		
			header ('location: Menu.php?pag=Marcas-C');
		
		?>
		
	</body>

</html>