<!--
=============================================================
programa: Movimentacoes-C.php
função: Consulta das movimentações
data: 04/06/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Consulta de movimenta&ccedil;&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="menu.css">
	
	</head>
	
	<body>
	
		<?php
		
			$codigoMovimentacao         = 0;
			$numeroSerieArma            = $_POST['numeroSerieArma'];
			$numeroSerieMunicao         = $_POST['numeroSerieMunicao'];
			$nomeAcessorio              = $_POST['nomeAcessorio'];
			$nomeMilitar                = $_POST['nomeMilitar'];
			$dataHoraMovimentacao       = 0;
			$observacaoMovimentacao     = $_POST['observacaoMovimentacao'];
			$tipoMovimentacao           = 0;
			$militarEntregaMovimentacao = $_SESSION['nome'];
			$dataHoraDevolucaoMovimentacao = 0;
			$militarDevolveMovimentacao = $_SESSION['nome'];
			
			include_once ("classes/Conexao.class.php");
			include_once ("classes/Movimentacoes.class.php");
			
			$con = new Conexao();
			$Movimentacao = new Movimentacoes($codigoMovimentacao, $numeroSerieArma, $numeroSerieMunicao, $nomeAcessorio, $nomeMilitar, $numeroSerieArma, $dataHoraMovimentacao, $observacaoMovimentacao, $tipoMovimentacao, $militarEntregaMovimentacao, $dataHoraDevolucaoMovimentacao, $militarDevolveMovimentacao);
			
			//chama o método listarOrganizacaoMilitar de OrganizacoesMilitares.class.php
			$Movimentacao-> listarMovimentacao();
		
		?>
		
	</body>

</html>