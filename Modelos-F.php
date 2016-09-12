<!--
=============================================================
programa: Modelos-F.php
função: Formulario de entrada de dados dos modelos
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
		
			Cadastro de modelos
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaModelo.js"></script>
	 
	</head>
	
	<body>		

		<form name="Modelos" method="POST" action="Modelos-P.php" onSubmit="return ValidaModelo()">
		
			<center>
				
				<h3>Cadastro de modelos</h3><br>
		
				<table border="0">
			
					<tr>
			
						<th align="right">
				
							Nome:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="nomeModelo" title="Informe o nome do modelo" size="20" maxlength="20">
				
						</th>
			
					</tr>
					
					<tr>
					
						<th align="right">
						
							Marcas
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
						
							
							
							@$codigoModelo = $_POST['codigoModelo'];
							@$nomeMarca    = $_POST['nomeMarca'];
							@$nomeModelo   = $_POST['nomeModelo'];
							
							//disponibiliza a classe conexão
							include_once("./classes/Conexao.class.php");
							include_once("./classes/Modelos.class.php");
							
							//instancia um objeto na classe de conexao
							$con = new Conexao();
							
							$Modelo = new Modelos($codigoModelo, $nomeMarca, $nomeModelo);
							
							$Modelo->listarMarca();
						
						?>
					
					</tr>
				
				</table>
	
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Modelos.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Modelos-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
		
			</center>
		
		</form>
		
	</body>

</html>