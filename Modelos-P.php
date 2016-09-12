<?php ob_start() ?>

<!--
=============================================================
programa: Modelos-P.php
fun��o: Arquivo de processamento dos modelos
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
	
	//disponibiliza a classe conex�o
	include_once("./classes/Conexao.class.php");
	include_once("./classes/Modelos.class.php");
	
	//instancia um objeto na classe de conexao
	$con = new Conexao();
	
	$Modelo = new Modelos($codigoModelo, $nomeMarca, $nomeModelo);

	if (isset($_GET['acao'])) {
	
		//variavel acao � enviada por get do m�todo listar do .class ou n�o tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	switch (@$acao){
	
		//inclus�o
		case 0 :
	
			//chama o metodo incluir da instancia
			$Modelo->incluirModelo();
		
			header ('location: Menu.php?pag=Modelos-C');
		
		break;
		
		//exclus�o
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			//chama o m�todo excluirModelo da instancia
			$Modelo->excluirModelo($chave);
			
			header ('location: Menu.php?pag=Modelos-C');
		
		break;
	
	}
	
?>