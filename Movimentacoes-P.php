<?php 

	ob_start();
	session_start();
?>

<!--
=============================================================
programa: Movimentacoes-P.php
função: Arquivo de processamento das movimentações
data: 04/06/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

	if(isset($_GET['acao'])){
		$acao = 1;
	}else{
		$acao = 0;
	}

	switch($acao){

	case 0:
	
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

		//pega a data e hora atual
		$query = "SELECT CURRENT_TIMESTAMP";
	   
		$res = mysql_query($query) or die (mysql_error());
	   
		$row = mysql_fetch_array($res);
	   
		$dataHora = $row[0];
	 
		$dataHoraMovimentacao = $dataHora; 					// pega  o componente registroUsuario do formulario de Usuarios-f.php
		
		$Movimentacao = new Movimentacoes($codigoMovimentacao, $numeroSerieArma, $numeroSerieMunicao, $nomeAcessorio, $nomeMilitar,  $dataHoraMovimentacao, $observacaoMovimentacao, $tipoMovimentacao, $militarEntregaMovimentacao, $dataHoraDevolucaoMovimentacao, $militarDevolveMovimentacao);

		if (isset($_GET['acao'])) {
		
			//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
		
			$acao = $_GET['acao'];
		
		}

		//chama o metodo incluir da instancia
		$Movimentacao->incluirMovimentacao();

		header ('location: Menu.php?pag=Movimentacoes-C');
	break;
	
	case 1:
		
		include_once ("classes/Conexao.class.php");
		$con = new Conexao();
		
		//pega a data e hora atual
		$query = "SELECT CURRENT_TIMESTAMP";
	   
		$res = mysql_query($query) or die (mysql_error());
	   
		$row = mysql_fetch_array($res);
	   
		$dataHora = $row[0];
	 
		$dataHoraDevolucaoMovimentacao = $dataHora; 					// pega  o componente registroUsuario do formulario de Usuarios-f.php
		
		$query = "UPDATE Movimentacoes
				SET tipoMovimentacao = '1',
					dataHoraDevolucaoMovimentacao = '". $dataHoraDevolucaoMovimentacao ."',
					militarDevolveMovimentacao    = '". $_SESSION['nome'] ."'
				WHERE codigoMovimentacao = " . $_GET['codigo'];
		
		mysql_query($query) or die (mysql_error());
		
		header ('location: Menu.php?pag=Movimentacoes-C');
					
	break;
	}
?>