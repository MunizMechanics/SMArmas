<!--
=============================================================
programa: Armas-F.php
função: Formulario de entrada de dados das Armas
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
		
			Cadastro de armas
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaArma.js"></script>
	 
	</head>
	
	<body>		

		<form name="Armas" method="POST" action="Armas-P.php" onSubmit="return ValidaArma()">
		
			<center>
		
				<h3>Cadastro de armas</h3><br>
		
				<table border="0">
					
					<tr>
					
						<th align="right">
						
							Calibre
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
						
							//pega por post o componente codigo do formulario -F.
							@$codigoArma 	  = $_POST['codigoArma'];
							@$numeroCalibre   = $_POST['numeroCalibre'];
							@$nomeModelo      = $_POST['nomeModelo'];
							@$numeroSerieArma = $_POST['numeroSerieArma'];
							
							//disponibiliza a classe conexão
							include_once("./classes/Conexao.class.php");
							include_once("./classes/Armas.class.php");
							
							//instancia um objeto na classe de conexao
							$con = new Conexao();
	
							$Arma = new Armas($codigoArma, $numeroCalibre, $nomeModelo, $numeroSerieArma);
							
							$Arma->listarCalibre();
						
						?>
					
					</tr>
					
					<tr>
					
						<th align="right">
						
							Modelo
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
							
							$Arma->listarModelo();
						
						?>
					
					</tr>
					
					<tr>
			
						<th align="right">
				
							N&uacute;mero de S&eacute;rie:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="numeroSerieArma" title="Informe o n&uacute;mero de s&eacute;rie" size="20" maxlength="50">
				
						</th>
			
					</tr>
				
				</table>
	
				<table border="0">
					
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Armas.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Armas-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
				
				</table>
				
			</center>
		
		</form>
		
	</body>

</html>