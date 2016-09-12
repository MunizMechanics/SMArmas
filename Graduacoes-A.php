<?php ob_start() ?>

<!--
=============================================================
programa: Graduacoes-A.php
função: Alteração das Graduacoes
data: 23/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o das gradua&ccedil;&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoGraduacao = $_POST['codigoGraduacao'];
			$nomeGraduacao = $_POST['nomeGraduacao'];
			$siglaGraduacao = $_POST['siglaGraduacao'];
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/Graduacoes.class.php");
			
			$con = new Conexao();
			$Graduacao = new Graduacoes($codigoGraduacao, $nomeGraduacao, $siglaGraduacao);
			
			$Graduacao->alterarGraduacao();
		
			header ('location: Menu.php?pag=Graduacoes-C');
		
		?>
		
	</body>

</html>