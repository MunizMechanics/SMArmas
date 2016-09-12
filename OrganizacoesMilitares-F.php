<!--
=============================================================
programa: OrganizacoesMilitares-F.php
função: Formulario de entrada de dados das OM
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
		
			Cadastro de organiza&ccedil;&otilde;es militares
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaOrganizacaoMilitar.js"></script>
	 
	</head>
	
	<body>		

		<form name="OrganizacoesMilitares" method="POST" action="OrganizacoesMilitares-P.php" onSubmit="return ValidaOrganizacaoMilitar()">
		
			<center>
				
				<h3>Cadastro de organiza&ccedil;&otilde;es militares</h3><br>
		
				<table border="0">
			
					<tr>
			
						<th align="right">
				
							Nome:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="nomeOrganizacaoMilitar" title="Informe a OM" size="20" maxlength="20">
				
						</th>
			
					</tr>
					
					<tr>
					
						<th align="right">
						
							Nome Tipo OM
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
						
							
							
							$codigoOrganizacaoMilitar   = 0;
							$nomeTipoOrganizacaoMilitar = NULL;
							$nomeOrganizacaoMilitar     = NULL;
							
							include_once ("classes/Conexao.class.php");
							include_once ("classes/OrganizacoesMilitares.class.php");
							
							$con = new Conexao();
							$OrganizacaoMilitar = new OrganizacoesMilitares($codigoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar, $nomeOrganizacaoMilitar);
							
							$OrganizacaoMilitar->listarTipoOrganizacaoMilitar();
						
						?>
					
					</tr>
				
				</table>
	
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.OrganizacoesMilitares.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=OrganizacoesMilitares-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
		
			</center>
		
		</form>
		
	</body>

</html>