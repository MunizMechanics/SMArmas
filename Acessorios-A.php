<?php ob_start() ?>

<!--
=============================================================
programa: Acessorios-A.php
função: Alteração das Acessorios
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o dos acess&ocute;rios
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoAcessorio = $_POST['codigoAcessorio'];
			$nomeAcessorio = $_POST['nomeAcessorio'];
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Acessorios.class.php");
			
			$con = new Conexao();
			$Acessorio = new Acessorios($codigoAcessorio, $nomeAcessorio);
			
			$Acessorio->alterarAcessorio();
		
			header ('location: Menu.php?pag=Acessorios-C');
		
		?>
		
	</body>

</html>