<?php ob_start() ?>

<!--
=============================================================
programa: Companhias-P.php
função: Arquivo de processamento das companhias
data: 22/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

	//pega por post o componente codigo do formulario -F.
	@$codigoCompanhia 		 = $_POST['codigoCompanhia'];
	@$nomeOrganizacaoMilitar = $_POST['nomeOrganizacaoMilitar'];
	@$nomeCompanhia  	     = $_POST['nomeCompanhia'];
	
	//disponibiliza a classe conexão
	include_once("./classes/Conexao.class.php");
	include_once("./classes/Companhias.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();
	
	$Companhia = new Companhias($codigoCompanhia, $nomeOrganizacaoMilitar, $nomeCompanhia);

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclusão
		case 0 :
	
			//chama o metodo incluir da instancia
			$Companhia->incluirCompanhia();
		
			header ('location: Menu.php?pag=Companhias-C');
		
		break;
		
		//exclusão
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o método excluir da instancia
			$Companhia->excluirCompanhia($chave);
			
			header ('location: Menu.php?pag=Companhias-C');
		
		break;
	
	}
	
?>