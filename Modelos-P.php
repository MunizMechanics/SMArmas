<?php ob_start() ?>

<!--
=============================================================
programa: Modelos-P.php
função: Arquivo de processamento dos modelos
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

	//pega por post o componente codigo do formulario -F.
	@$codigoModelo = $_POST['codigoModelo'];
	@$nomeMarca    = $_POST['nomeMarca'];
	@$nomeModelo   = $_POST['nomeModelo'];
	
	//disponibiliza a classe conexão
	include_once("./classes/Conexao.class.php");
	include_once("./classes/Modelos.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();
	
	$Modelo = new Modelos($codigoModelo, $nomeMarca, $nomeModelo);

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclusão
		case 0 :
	
			//chama o metodo incluir da instancia
			$Modelo->incluirModelo();
		
			header ('location: Menu.php?pag=Modelos-C');
		
		break;
		
		//exclusão
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o método excluirModelo da instancia
			$Modelo->excluirModelo($chave);
			
			header ('location: Menu.php?pag=Modelos-C');
		
		break;
	
	}
	
?>