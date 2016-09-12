<?php ob_start() ?>

<!--
=============================================================
programa: Militares-P.php
fun��o: Arquivo de processamento dos militares
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
	
	//disponibiliza a classe conex�o
	include_once("./classes/Conexao.class.php");
	include_once("./classes/Militares.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();

	$Militar = new Militares($codigoMilitar, $nomePelotao, $nomeGraduacao, $nomeMilitar, $armeiroMilitar, $usuarioArmeiroMilitar, $senhaArmeiroMilitar);

	if (isset($_GET['acao'])) {
	
		//variavel acao � enviada por get do m�todo listar do .class ou n�o tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclus�o
		case 0 :
	
			//chama o metodo incluir da instancia
			$Militar->incluirMilitar();
		
			header ('location: Menu.php?pag=Militares-C');
		
		break;
		
		//exclus�o
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o m�todo excluir da instancia
			$Militar->excluirMilitar($chave);
			
			header ('location: Menu.php?pag=Militares-C');
		
		break;
	
	}
	
?>