<!--
=============================================================
programa: Movimentacoes-F.php
função: Formulario de entrada de dados das Movimentacoes
data: 24/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
		
		<!--Declaração de conjunto de caracteres -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		
		<title>
		
			Cadastro de movimenta&ccedil;&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaMovimentacao.js"></script>
	 
	</head>
	
	<body>		

		<form name="Movimentacoes" method="POST" action="Movimentacoes-P.php" onSubmit="return ValidaMovimentacao()">
		
			<center>
		
				<h3>Cadastro de movimenta&ccedil;&otilde;es</h3><br>
		
				<table border="0">
				
					<tr>
					
						<td colspan="2" align="center">
							
							<font color="gray" size="2"><b>Campos com asterisco (<font color="red">*</font>) s&atilde;o obrigat&oacute;rios</font>
						
						</td>
						
					</tr>
					
					<tr>
					
						<th align="right">
						
							Arma <font color="red">*</font>:
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
							
							$codigoMovimentacao         = 0;
							$numeroSerieMunicao         = NULL;
							$nomeAcessorio              = NULL;
							$nomeMilitar                = NULL;
							$numeroSerieArma            = NULL;
							$dataHoraMovimentacao       = 0;
							$observacaoMovimentacao     = NULL;
							$tipoMovimentacao           = 0;
							$militarEntregaMovimentacao = NULL;
							
							include_once ("classes/Conexao.class.php");
							include_once ("classes/Movimentacoes.class.php");
							
							$con = new Conexao();
							$Movimentacao = new Movimentacoes($codigoMovimentacao, $numeroSerieMunicao, $nomeAcessorio, $nomeMilitar, $numeroSerieArma, $dataHoraMovimentacao, $observacaoMovimentacao, $tipoMovimentacao, $militarEntregaMovimentacao);
						
							$Movimentacao->listarArma();
						
						?>
					
					</tr>
					
					<tr>
					
						<th align="right">
						
							Muni&ccedil;&atilde;o <font color="red">*</font>:
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
						
							$Movimentacao->listarMunicao();
						
						?>
					
					</tr>
				
					<tr>
					
						<th align="right">
						
							Acess&oacute;rio <font color="red">*</font>:
						
						</th>
					
						<?php
						
							$Movimentacao->listarAcessorio();
						
						?>
					
					</tr>
				
					<tr>
					
						<th align="right">
						
							Militar <font color="red">*</font>: 
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
							
							$Movimentacao->listarMilitar();
							
						?>
						
					</tr>
					
					<tr>
					
						<th align="right">
						
							Observa&ccedil;&otilde;es:
						
						</th>
					
						<th>
						
							<textarea name="observacaoMovimentacao" maxlength="1000" rows="5" cols="25"></textarea>
						
						</th>
					
					</tr>
			
				</table>
				
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Movimentacoes.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Movimentacoes-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
			
			</center>
		
		</form>
		
	</body>
	
</html>