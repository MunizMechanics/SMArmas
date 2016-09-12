<?php ob_start() ?>

<!--
=============================================================
programa: TiposOrganizacoesMiliares-P.php
função: Arquivo de processamento dos Tipos de OM
data: 02/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

		@$codigoTipoOrganizacaoMilitar = $_POST['codigoTipoOrganizacaoMilitar'];
		@$nomeTipoOrganizacaoMilitar   = $_POST['nomeTipoOrganizacaoMilitar'];
		
		//disponibiliza a classe conexão
		include_once("./classes/Conexao.class.php");
		include_once("./classes/TiposOrganizacoesMilitares.class.php");
		
		//instancia um objeto na classe de conexao
		$con = new Conexao();
		
		$TipoOrganizacaoMilitar = new TiposOrganizacoesMilitares($codigoTipoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar);
			
	

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	
	
	switch (@$acao){
	
		//inclusão
		case 0 :
			
			//chama o metodo incluir da instancia
			$TipoOrganizacaoMilitar->incluirTipoOrganizacaoMilitar();
		
			header ('location: Menu.php?pag=TiposOrganizacoesMilitares-C');
		
		break;
		
		//exclusão
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}

			//chama o método excluirOrganizacaoMilitar da instancia
			$TipoOrganizacaoMilitar->excluirTipoOrganizacaoMilitar($chave);
			
			header ('location: Menu.php?pag=TiposOrganizacoesMilitares-C');
		
		break;
		
	
	}
	
?>