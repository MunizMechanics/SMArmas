<?php ob_start() ?>

<!--
=============================================================
programa: TiposMovimentacoes-P.php
função: Arquivo de processamento dos Tipos de movimentacoes
data: 30/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<?php

		@$codigoTipoMovimentacao = $_POST['codigoTipoMovimentacao'];
		@$nomeTipoMovimentacao   = $_POST['nomeTipoMovimentacao'];
		
		//disponibiliza a classe conexão
		include_once("./classes/Conexao.class.php");
		include_once("./classes/TiposMovimentacoes.class.php");
		
		//instancia um objeto na classe de conexao
		$con = new Conexao();
		
		$TipoMovimentacao = new TiposMovimentacoes($codigoTipoMovimentacao, $nomeTipoMovimentacao);
			
	

	if (isset($_GET['acao'])) {
	
		//variavel acao é enviada por get do método listar do .class ou não tem valor algum quando vem diretamente em resposta ao action do formulario -F.
	
		$acao = $_GET['acao'];
	
	}
	
	
	
	switch (@$acao){
	
		//inclusão
		case 0 :
			
			//chama o metodo incluir da instancia
			$TipoMovimentacao->incluirTipoMovimentacao();
		
			header ('location: Menu.php?pag=TiposMovimentacoes-C');
		
		break;
		
		//alteração
		case 1 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}
		
			$TipoMovimentacao->localizarTipoMovimentacao($chave);

				
			//codigoTipoMovimentacao
			echo "<form name=\"TiposMovimentacoes\" action=\"Menu.php?pag=TiposMovimentacoes-A\" method=\"POST\" onSubmit=\"return ValidaTipoMovimentacao()\">";
			
			echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\">";
			
			echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE TIPOS DE MOVIMENTA&Ccedil;&Otilde;ES</th></tr>";
			
			echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $TipoMovimentacao->getCodigoTipoMovimentacao() . "</strong></font><input type=\"hidden\" name=\"codigoTipoMovimentacao\" value=\"". $TipoMovimentacao->getCodigoTipoMovimentacao() ."\"/></td></tr>";
			
			//nomeTipoMovimentacao
			
			echo "<tr><td align=\"right\"><label>Nome</label></td><td><input type=\"text\" name=\"nomeTipoMovimentacao\" size=\"20\" value=\"" . $TipoMovimentacao->getNomeTipoMovimentacao() ."\"/></td></tr>";
			
			echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=TiposMovimentacoes-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
			echo "</table></form>";
	
		break;
		
		//exclusão
		case 2 :
		
			if (isset($_GET['chave'])){
			
				$chave = $_GET['chave'];
			
			}

			//chama o método excluirOrganizacaoMilitar da instancia
			$TipoMovimentacao->excluirTipoMovimentacao($chave);
			
			header ('location: Menu.php?pag=TiposMovimentacoes-C');
		
		break;
		
	
	}
	
?>