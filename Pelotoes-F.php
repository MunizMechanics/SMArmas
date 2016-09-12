<!--
=============================================================
programa: Pelotoes-F.php
função: Formulario de entrada de dados dos Pelotoes
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
		
			Cadastro de pelot&otilde;es
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaPelotao.js"></script>
	 
	</head>
	
	<body>		

		<form name="Pelotoes" method="POST" action="Pelotoes-P.php" onSubmit="return ValidaPelotao()">
		
			<center>
				
				<h3>Cadastro de pelot&otilde;es</h3><br>
		
				<table border="0">
			
					<tr>
			
						<th align="right">
				
							Nome:
						
						</th>
				
						<th align="left">
				
							<input type="text" name="nomePelotao" title="Informe o pelot&atilde;o" size="20" maxlength="50">
				
						</th>
			
					</tr>
					
					<tr>
					
						<th align="right">
						
							Companhia
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
						
							
							
							//pega por post o componente codigo do formulario -F.
							@$codigoPelotao = $_POST['codigoPelotao'];
							@$nomeCompanhia = $_POST['nomeCompanhia'];
							@$nomePelotao  	= $_POST['nomePelotao'];
							
							//disponibiliza a classe conexão
							include_once("./classes/Conexao.class.php");
							include_once("./classes/Pelotoes.class.php");
							
							//instancia um objeto na classe de conexao
							$con = new Conexao();
	
							$Pelotao = new Pelotoes($codigoPelotao, $nomeCompanhia, $nomePelotao);
							
							$Pelotao->listarCompanhia();
						
						?>
					
					</tr>
				
				</table>
	
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Pelotoes.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Pelotoes-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
		
			</center>
		
		</form>
		
	</body>

</html>