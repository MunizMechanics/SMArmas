<!--
=============================================================
programa: Pelotoes-C.php
função: Consulta dos Pelotoes
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de pelot&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			//pega por post o componente codigo do formulario -F.
			@$codigoPelotao = $_POST['codigoPelotao'];
			@$nomeCompanhia = $_POST['nomeCompanhia'];
			@$nomePelotao  	= $_POST['nomePelotao'];
			
			//disponibiliza a classe conexão
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Pelotoes.class.php");
			
			//instancia um objeto na classe de conexao
			$con = new Conexao();

			$Pelotao = new Pelotoes($codigoPelotao, $nomeCompanhia, $nomePelotao);
			
			$Pelotao-> listarPelotao();
		
		?>
		
	</body>

</html>