<!--
=============================================================
programa: TiposMovimentacoes-C.php
função: Consulta dos tipos de movimentacao
data: 30/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de tipos de movimenta&ccedil;&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoTipoMovimentacao   = 0;
			$nomeTipoMovimentacao 	= NULL;
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/TiposMovimentacoes.class.php");
			
			$con = new Conexao();
			$TipoMovimentacao = new TiposMovimentacoes($codigoTipoMovimentacao, $nomeTipoMovimentacao);
			
			//chama o método listarTipoMovimentacao de TiposMovimentacoes.class.php
			$TipoMovimentacao-> listarTipoMovimentacao();
		
		?>
		
	</body>

</html>