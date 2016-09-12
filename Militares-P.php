<?php ob_start() ?>

<!--
=============================================================
programa: Militares-P.php
função: Arquivo de processamento dos militares
data: 30/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

	//pega por post o componente codigo do formulario -F.
	@$codigoMilitar 	    = $_POST['codigoMilitar'];
	@$nomePelotao           = $_POST['nomePelotao'];  //FK
	@$nomeGraduacao         = $_POST['nomeGraduacao'];  //FK
	@$nomeMilitar           = $_POST['nomeMilitar'];
	@$armeiroMilitar        = $_POST['armeiroMilitar'];
	@$usuarioArmeiroMilitar = $_POST['usuarioArmeiroMilitar'];
	@$senhaArmeiroMilitar   = $_POST['senhaArmeiroMilitar'];
	
	//disponibiliza a classe conexão
	include_once("./classes/Conexao.class.php");
	include_once("./classes/Militares.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();

	$Militar = new Militares($codigoMilitar, $nomePelotao, $nomeGraduacao, $nomeMilitar, $armeiroMilitar, $usuarioArmeiroMilitar, $senhaArmeiroMilitar);

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclusão
		case 0 :
	
			//chama o metodo incluir da instancia
			$Militar->incluirMilitar();
		
			header ('location: Menu.php?pag=Militares-C');
		
		break;
		
		//exclusão
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o método excluir da instancia
			$Militar->excluirMilitar($chave);
			
			header ('location: Menu.php?pag=Militares-C');
		
		break;
	
	}
	
?>