<!--
=============================================================
programa: Calibres-F.php
função: Formulario de entrada de dados dos Calibres
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
		
			Cadastro de calibres
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaCalibre.js"></script>
	 
	</head>
	
	<body>		

		<form name="Calibres" method="POST" action="Calibres-P.php" onSubmit="return ValidaCalibre()">
		
			<?php @header("Content-Type:text/html; charset = ISO-8859-1", true); ?>
		
			<center>
				
				<h3>Cadastro de calibres</h3><br>
		
				<table border="0">
			
					<tr>
			
						<th align="right">
				
							N&uacute;mero:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="numeroCalibre" title="Informe o calibre" size="20" maxlength="20">
				
						</th>
			
					</tr>
				
				</table>
	
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Calibres.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Calibres-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
				
			</center>
		
		</form>
		
	</body>

</html>