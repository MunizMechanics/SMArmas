<?php ob_start() ?>

<!--
=============================================================
programa: Pelotoes-P.php
fun��o: Arquivo de processamento dos Pelotoes
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

	//pega por post o componente codigo do formulario -F.
	@$codigoPelotao = $_POST['codigoPelotao'];
	@$nomeCompanhia = $_POST['nomeCompanhia'];
	@$nomePelotao  	= $_POST['nomePelotao'];
	
	//disponibiliza a classe conex�o
	include_once("./classes/Conexao.class.php");
	include_once("./classes/Pelotoes.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();

	$Pelotao = new Pelotoes($codigoPelotao, $nomeCompanhia, $nomePelotao);

	if (isset($_GET['acao'])) {
	
		//variavel acao � enviada por get do m�todo listar do .class ou n�o tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclus�o
		case 0 :
	
			//chama o metodo incluir da instancia
			$Pelotao->incluirPelotao();
		
			header ('location: Menu.php?pag=Pelotoes-C');
		
		break;
		
		//exclus�o
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o m�todo excluir da instancia
			$Pelotao->excluirPelotao($chave);
			
			header ('location: Menu.php?pag=Pelotoes-C');
		
		break;
	
	}
	
?>