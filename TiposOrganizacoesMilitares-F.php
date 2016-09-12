<!--
=============================================================
programa: TiposOrganizacoesMilitares-F.php
função: Formulario de entrada de dados dos Tipos de OM
data: 09/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
		
		<!--Declaração de conjunto de caracteres -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		
		<title>
		
			Cadastro de tipos de organiza&ccedil;&otilde;es militares
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaTipoOrganizacaoMilitar.js"></script>
	 
	</head>
	
	<body>		

		<form name="TiposOrganizacoesMilitares" method="POST" action="TiposOrganizacoesMilitares-P.php" onSubmit="return ValidaTipoOrganizacaoMilitar()">
		
			<center>
				
				<h3>Cadastro de tipos de organiza&ccedil;&otilde;es militares</h3><br>
		
				<table border="0">
			
					<tr>
			
						<th align="right">
				
							Nome:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="nomeTipoOrganizacaoMilitar" title="Informe o tipo de OM" size="20" maxlength="20">
				
						</th>
			
					</tr>
				
				</table>
	
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.TiposOrganizacoesMilitares.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=TiposOrganizacoesMilitares-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
		
			</center>
		
		</form>
		
	</body>

</html>