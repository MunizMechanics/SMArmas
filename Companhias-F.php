<!--
=============================================================
programa: Companhias-F.php
função: Formulario de entrada de dados das Companhias
data: 22/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
		
		<!--Declaração de conjunto de caracteres -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		
		<title>
		
			Cadastro de companhias
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaCompanhia.js"></script>
	 
	</head>
	
	<body>		

		<form name="Companhias" method="POST" action="Companhias-P.php" onSubmit="return ValidaCompanhia()">
		
			<center>
				
				<h3>Cadastro de companhias</h3><br>
		
				<table border="0">
			
					<tr>
			
						<th align="right">
				
							Nome:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="nomeCompanhia" title="Informe a companhia" size="20" maxlength="50">
				
						</th>
			
					</tr>
					
					<tr>
					
						<th align="right">
						
							Nome OM
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
						
							
							
							//pega por post o componente codigo do formulario -F.
							@$codigoCompanhia 		 = $_POST['codigoCompanhia'];
							@$nomeOrganizacaoMilitar = $_POST['nomeOrganizacaoMilitar'];
							@$nomeCompanhia  	     = $_POST['nomeCompanhia'];
							
							//disponibiliza a classe conexão
							include_once("./classes/Conexao.class.php");
							include_once("./classes/Companhias.class.php");
							
							//instancia um objeto na classe de conexao
							$con = new Conexao();
	
							$Companhia = new Companhias($codigoCompanhia, $nomeOrganizacaoMilitar, $nomeCompanhia);
							
							$Companhia->listarOrganizacaoMilitar();
						
						?>
					
					</tr>
				
				</table>
	
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Companhias.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Companhias-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
		
			</center>
		
		</form>
		
	</body>

</html>