<?php ob_start() ?>

<!--
=============================================================
programa: Calibres-P.php
função: Arquivo de processamento dos Calibres
data: 17/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

		@$codigoCalibre = $_POST['codigoCalibre'];
		@$numeroCalibre = $_POST['numeroCalibre'];
		
		//disponibiliza a classe conexão
		include_once("./classes/Conexao.class.php");
		include_once("./classes/Calibres.class.php");
		
		//instancia um objeto na classe de conexao
		$con = new Conexao();
		
		$Calibre = new Calibres($codigoCalibre, $numeroCalibre);
			
	

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	
	
	switch (@$acao){
	
		//inclusão
		case 0 :
			
			//chama o metodo incluir da instancia
			$Calibre->incluirCalibre();
		
			header ('location: Menu.php?pag=Calibres-C');
		
		break;
		
		//exclusão
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}

			//chama o método excluirOrganizacaoMilitar da instancia
			$Calibre->excluirCalibre($chave);
			
			header ('location: Menu.php?pag=Calibres-C');
		
		break;
		
	
	}
	
?>