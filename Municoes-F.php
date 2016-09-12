<!--
=============================================================
programa: Munições-F.php
função: Formulario de entrada de dados das Munições
data: 18/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
		
		<!--Declaração de conjunto de caracteres -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		
		<title>
		
			Cadastro de muni&ccedil;&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaMunicao.js"></script>
	 
	</head>
	
	<body>		

		<form name="Municoes" method="POST" action="Municoes-P.php" onSubmit="return ValidaMunicao()">
		
			<center>
				
				<h3>Cadastro de muni&ccedil;&otilde;es</h3><br>
		
				<table border="0">
			
					<tr>
			
						<th align="right">
				
							N&uacute;mero de s&eacute;rie:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="numeroSerieMunicao" title="Informe o n&uacute;mero de s&eacute;rie" size="20" maxlength="20">
				
						</th>
			
					</tr>
					
					<tr>
					
						<th align="right">
						
							Calibre
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
						
							
							
							$codigoMunicao      = 0;
							$numeroCalibre      = NULL;
							$numeroSerieMunicao = NULL;
							
							include_once ("classes/Conexao.class.php");
							include_once ("classes/Municoes.class.php");
							
							$con = new Conexao();
							$Municao = new Municoes($codigoMunicao, $numeroSerieMunicao, $numeroCalibre);
							
							$Municao->listarCalibre();
						
						?>
					
					</tr>
				
				</table>
	
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Municoes.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Municoes-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
		
			</center>
		
		</form>
		
	</body>

</html>