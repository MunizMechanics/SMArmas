<?php ob_start() ?>

<!--
=============================================================
programa: Munições-P.php
função: Arquivo de processamento das Munições
data: 22/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

	//pega por post o componente codigo do formulario -F.
	@$codigoMunicao 	 = $_POST['codigoMunicao'];
	@$numeroCalibre      = $_POST['numeroCalibre'];
	@$numeroSerieMunicao = $_POST['numeroSerieMunicao'];
	
	//disponibiliza a classe conexão
	include_once("./classes/Conexao.class.php");
	include_once("./classes/Municoes.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();
	
	$Municao = new Municoes($codigoMunicao, $numeroCalibre, $numeroSerieMunicao);

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclusão
		case 0 :
	
			//chama o metodo incluir da instancia
			$Municao->incluirMunicao();
		
			header ('location: Menu.php?pag=Municoes-C');
		
		break;
		
		//exclusão
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o método excluirOrganizacaoMilitar da instancia
			$Municao->excluirMunicao($chave);
			
			header ('location: Menu.php?pag=Municoes-C');
		
		break;
	
	}
	
?>

</html>