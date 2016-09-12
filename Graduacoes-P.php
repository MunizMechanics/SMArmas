<?php ob_start() ?>

<!--
=============================================================
programa: Graduacoes-P.php
função: Arquivo de processamento das Graduacoes
data: 23/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

		@$codigoGraduacao = $_POST['codigoGraduacao'];
		@$nomeGraduacao = $_POST['nomeGraduacao'];
		@$siglaGraduacao = $_POST['siglaGraduacao'];
	
		include_once("./classes/Conexao.class.php");
		include_once("./classes/Graduacoes.class.php");
		
		$con = new Conexao();
		$Graduacao = new Graduacoes($codigoGraduacao, $nomeGraduacao, $siglaGraduacao);
			
	

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	
	
	switch (@$acao){
	
		//inclusão
		case 0 :
			
			//chama o metodo incluir da instancia
			$Graduacao->incluirGraduacao();
		
			header ('location: Menu.php?pag=Graduacoes-C');
		
		break;
		
		//exclusão
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}

			//chama o método excluirOrganizacaoMilitar da instancia
			$Graduacao->excluirGraduacao($chave);
			
			header ('location: Menu.php?pag=Graduacoes-C');
		
		break;
		
	
	}
	
?>