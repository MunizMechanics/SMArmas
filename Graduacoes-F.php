<!--
=============================================================
programa: Graduacoes-F.php
função: Formulario de entrada de dados das Graduacoes
data: 23/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
		
		<!--Declaração de conjunto de caracteres -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		
		<title>
		
			Cadastro de gradua&ccedil;&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaGraduacao.js"></script>
	 
	</head>
	
	<body>		

		<form name="Graduacoes" method="POST" action="Graduacoes-P.php" onSubmit="return ValidaGraduacao()">
		
			<?php @header("Content-Type:text/html; charset = ISO-8859-1", true); ?>
		
			<center>
				
				<h3>Cadastro de gradua&ccedil;&otilde;es</h3><br>
		
				<table border="0">
			
					<tr>
			
						<th align="right">
				
							Nome:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="nomeGraduacao" title="Informe a gradua&ccedil;&atilde;o" size="20" maxlength="50">
				
						</th>
			
					</tr>
					
					<tr>
					
						<th align="right">
						
							Sigla:
						
						</th>
					
						<th align="left">
						
							<input type="text" name="siglaGraduacao" title="Informe a gradua&ccedil;&atilde;o" size="3" maxlength="3">
						
						</th>
					
					</tr>
				
				</table>
	
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Graduacoes.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Graduacoes-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
				
			</center>
		
		</form>
		
	</body>

</html>