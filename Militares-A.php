<?php ob_start() ?>

<!--
=============================================================
programa: Militares-A.php
função: Alteração dos Militares
data: 30/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o de militares
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			//pega por post o componente codigo do formulario -F.
			@$codigoMilitar 	    = $_POST['codigoMilitar'];
			@$nomePelotao           = $_POST['nomePelotao'];  //FK
			@$nomeGraduacao         = $_POST['nomeGraduacao'];  //FK
			@$nomeMilitar           = $_POST['nomeMilitar'];
			@$armeiroMilitar        = $_POST['armeiroMilitar'];
			@$usuarioArmeiroMilitar = $_POST['usuarioArmeiroMilitar'];
			@$senhaArmeiroMilitar   = $_POST['senhaArmeiroMilitar'];
			
			//disponibiliza a classe conexão
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Militares.class.php");
			
			//instancia um objeto na classe de conexao
			$con = new Conexao();

			$Militar = new Militares($codigoMilitar, $nomePelotao, $nomeGraduacao, $nomeMilitar, $armeiroMilitar, $usuarioArmeiroMilitar, $senhaArmeiroMilitar);

			$Militar->alterarMilitar();
		
			header ('location: Menu.php?pag=Militares-C');
		
		?>
		
	</body>

</html>