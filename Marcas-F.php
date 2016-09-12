<!--
=============================================================
programa: Marcas-F.php
função: Formulario de entrada de dados das Marcas
data: 17/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
		
		<!--Declaração de conjunto de caracteres -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		
		<title>
		
			Cadastro de marcas
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaMarca.js"></script>
	 
	</head>
	
	<body>		

		<form name="Marcas" method="POST" action="Marcas-P.php" onSubmit="return ValidaMarca()">
		
			<?php @header("Content-Type:text/html; charset = ISO-8859-1", true); ?>
		
			<center>
				
				<h3>Cadastro de marcas</h3><br>
		
				<table border="0">
			
					<tr>
			
						<th align="right">
				
							Nome:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="nomeMarca" title="Informe a Marca" size="20" maxlength="50">
				
						</th>
			
					</tr>
				
				</table>
	
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Marcas.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Marcas-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
				
			</center>
		
		</form>
		
	</body>

</html>