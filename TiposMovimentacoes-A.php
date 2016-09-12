<?php ob_start() ?>

<!--
=============================================================
programa: TiposMovimentacoes-A.php
função: Alteração dos Tipos de movimentacao
data: 30/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Altera&ccedil;&atilde;o de tipos de movimenta&ccedil;&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoTipoMovimentacao = $_POST['codigoTipoMovimentacao'];
			$nomeTipoMovimentacao   = $_POST['nomeTipoMovimentacao'];
		
			include_once("./classes/Conexao.class.php");
			include_once("./classes/TiposMovimentacoes.class.php");
			
			$con = new Conexao();
			$TipoMovimentacao = new TiposMovimentacoes(@$codigoTipoMovimentacao, @$nomeTipoMovimentacao);
			
			$TipoMovimentacao->alterarTipoMovimentacao();
		
			header ('location: Menu.php?pag=TiposMovimentacoes-C');
		
		?>
		
	</body>

</html>