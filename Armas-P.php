<?php ob_start() ?>

<!--
=============================================================
programa: Armas-P.php
fun��o: Arquivo de processamento das armas
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

	//pega por post o componente codigo do formulario -F.
	@$codigoArma 	  = $_POST['codigoArma'];
	@$numeroCalibre   = $_POST['numeroCalibre'];
	@$nomeModelo      = $_POST['nomeModelo'];
	@$numeroSerieArma = $_POST['numeroSerieArma'];
	
	//disponibiliza a classe conex�o
	include_once("./classes/Conexao.class.php");
	include_once("./classes/Armas.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();

	$Arma = new Armas($codigoArma, $numeroCalibre, $nomeModelo, $numeroSerieArma);

	if (isset($_GET['acao'])) {
	
		//variavel acao � enviada por get do m�todo listar do .class ou n�o tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclus�o
		case 0 :
	
			//chama o metodo incluir da instancia
			$Arma->incluirArma();
		
			header ('location: Menu.php?pag=Armas-C');
		
		break;
		
		
		//exclus�o
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o m�todo excluir da instancia
			$Arma->excluirArma($chave);
			
			header ('location: Menu.php?pag=Armas-C');
		
		break;
	
	}
	
?>