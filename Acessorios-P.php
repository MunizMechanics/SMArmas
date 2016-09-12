<?php ob_start() ?>

<!--
=============================================================
programa: Acessorios-P.php
fun��o: Arquivo de processamento dos Acessorios
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

		@$codigoAcessorio = $_POST['codigoAcessorio'];
		@$nomeAcessorio = $_POST['nomeAcessorio'];
		
		//disponibiliza a classe conex�o
		include_once("./classes/Conexao.class.php");
		include_once("./classes/Acessorios.class.php");
		
		//instancia um objeto na classe de conexao
		$con = new Conexao();
		
		$Acessorio = new Acessorios($codigoAcessorio, $nomeAcessorio);
			
	

	if (isset($_GET['acao'])) {
	
		//variavel acao � enviada por get do m�todo listar do .class ou n�o tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	
	
	switch (@$acao){
	
		//inclus�o
		case 0 :
			
			//chama o metodo incluir da instancia
			$Acessorio->incluirAcessorio();
		
			header ('location: Menu.php?pag=Acessorios-C');
		
		break;
		
		//exclus�o
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}

			//chama o m�todo excluirOrganizacaoMilitar da instancia
			$Acessorio->excluirAcessorio($chave);
			
			header ('location: Menu.php?pag=Acessorios-C');
		
		break;
		
	
	}
	
?>