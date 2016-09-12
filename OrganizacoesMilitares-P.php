<?php ob_start() ?>

<!--
=============================================================
programa: OrganizacoesMiliares-P.php
fun��o: Arquivo de processamento das OM
data: 02/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

	//pega por post o componente codigo do formulario -F.
	@$codigoOrganizacaoMilitar 		= $_POST['codigoOrganizacaoMilitar'];
	@$nomeTipoOrganizacaoMilitar    = $_POST['nomeTipoOrganizacaoMilitar'];
	@$nomeOrganizacaoMilitar  	    = $_POST['nomeOrganizacaoMilitar'];
	
	//disponibiliza a classe conex�o
	include_once("./classes/Conexao.class.php");
	include_once("./classes/OrganizacoesMilitares.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();
	
	$OrganizacaoMilitar = new OrganizacoesMilitares($codigoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar, $nomeOrganizacaoMilitar);

	if (isset($_GET['acao'])) {
	
		//variavel acao � enviada por get do m�todo listar do .class ou n�o tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclus�o
		case 0 :
	
			//chama o metodo incluir da instancia
			$OrganizacaoMilitar->incluirOrganizacaoMilitar();
		
			header ('location: Menu.php?pag=OrganizacoesMilitares-C');
		
		break;
		
		//exclus�o
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o m�todo excluirOrganizacaoMilitar da instancia
			$OrganizacaoMilitar->excluirOrganizacaoMilitar($chave);
			
			header ('location: Menu.php?pag=OrganizacoesMilitares-C');
		
		break;
	
	}
	
?>