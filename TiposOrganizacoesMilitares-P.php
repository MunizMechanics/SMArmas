<?php ob_start() ?>

<!--
=============================================================
programa: TiposOrganizacoesMiliares-P.php
fun��o: Arquivo de processamento dos Tipos de OM
data: 02/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

		@$codigoTipoOrganizacaoMilitar = $_POST['codigoTipoOrganizacaoMilitar'];
		@$nomeTipoOrganizacaoMilitar   = $_POST['nomeTipoOrganizacaoMilitar'];
		
		//disponibiliza a classe conex�o
		include_once("./classes/Conexao.class.php");
		include_once("./classes/TiposOrganizacoesMilitares.class.php");
		
		//instancia um objeto na classe de conexao
		$con = new Conexao();
		
		$TipoOrganizacaoMilitar = new TiposOrganizacoesMilitares($codigoTipoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar);
			
	

	if (isset($_GET['acao'])) {
	
		//variavel acao � enviada por get do m�todo listar do .class ou n�o tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	
	
	switch (@$acao){
	
		//inclus�o
		case 0 :
			
			//chama o metodo incluir da instancia
			$TipoOrganizacaoMilitar->incluirTipoOrganizacaoMilitar();
		
			header ('location: Menu.php?pag=TiposOrganizacoesMilitares-C');
		
		break;
		
		//exclus�o
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}

			//chama o m�todo excluirOrganizacaoMilitar da instancia
			$TipoOrganizacaoMilitar->excluirTipoOrganizacaoMilitar($chave);
			
			header ('location: Menu.php?pag=TiposOrganizacoesMilitares-C');
		
		break;
		
	
	}
	
?>