<?php ob_start() ?>

<!--
=============================================================
programa: Muni��es-A.php
fun��o: Altera��o das Muni��es
data: 22/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o de muni&ccedil;&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			//pega por post o componente codigo do formulario -F.
			$codigoMunicao 		= $_POST['codigoMunicao'];
			$numeroCalibre      = $_POST['numeroCalibre'];
			$numeroSerieMunicao = $_POST['numeroSerieMunicao'];
			
			//disponibiliza a classe conex�o
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Municoes.class.php");
			
			//instancia um objeto na classe de conexao
			$con = new Conexao();
			
			$Municao = new Municoes($codigoMunicao, $numeroCalibre, $numeroSerieMunicao);

			$Municao->alterarMunicao();
		
			header ('location: Menu.php?pag=Municoes-C');
		
		?>
		
	</body>

</html>