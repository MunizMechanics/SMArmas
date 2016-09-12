<?php ob_start() ?>

<!--
=============================================================
programa: Companhias-P.php
fun��o: Arquivo de processamento das companhias
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
	
	//disponibiliza a classe conex�o
	include_once("./classes/Conexao.class.php");
	include_once("./classes/Companhias.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();
	
	$Companhia = new Companhias($codigoCompanhia, $nomeOrganizacaoMilitar, $nomeCompanhia);

	if (isset($_GET['acao'])) {
	
		//variavel acao � enviada por get do m�todo listar do .class ou n�o tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclus�o
		case 0 :
	
			//chama o metodo incluir da instancia
			$Companhia->incluirCompanhia();
		
			header ('location: Menu.php?pag=Companhias-C');
		
		break;
		
		//exclus�o
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o m�todo excluir da instancia
			$Companhia->excluirCompanhia($chave);
			
			header ('location: Menu.php?pag=Companhias-C');
		
		break;
	
	}
	
?>