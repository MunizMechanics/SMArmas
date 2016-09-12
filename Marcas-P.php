<?php ob_start() ?>

<!--
=============================================================
programa: Marcas-P.php
função: Arquivo de processamento das Marcas
data: 17/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

		@$codigoMarca = $_POST['codigoMarca'];
		@$nomeMarca = $_POST['nomeMarca'];
		
		//disponibiliza a classe conexão
		include_once("./classes/Conexao.class.php");
		include_once("./classes/Marcas.class.php");
		
		//instancia um objeto na classe de conexao
		$con = new Conexao();
		
		$Marca = new Marcas($codigoMarca, $nomeMarca);
			
	

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	
	
	switch (@$acao){
	
		//inclusão
		case 0 :
			
			//chama o metodo incluir da instancia
			$Marca->incluirMarca();
		
			header ('location: Menu.php?pag=Marcas-C');
		
		break;
		
		//exclusão
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}

			//chama o método excluirOrganizacaoMilitar da instancia
			$Marca->excluirMarca($chave);
			
			header ('location: Menu.php?pag=Marcas-C');
		
		break;
		
	
	}
	
?>