<?php ob_start() ?>

<!--
=============================================================
programa: Modelos-A.php
função: Alteração dos modelos
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o de modelos
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			//pega por post o componente codigo do formulario -F.
			@$codigoModelo = $_POST['codigoModelo'];
			@$nomeMarca    = $_POST['nomeMarca'];
			@$nomeModelo   = $_POST['nomeModelo'];
			
			//disponibiliza a classe conexão
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Modelos.class.php");
			
			//instancia um objeto na classe de conexao
			$con = new Conexao();
			
			$Modelo = new Modelos($codigoModelo, $nomeMarca, $nomeModelo);

			$Modelo->alterarModelo();
		
			header ('location: Menu.php?pag=Modelos-C');
		
		?>
		
	</body>

</html>