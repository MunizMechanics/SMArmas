<!--
=============================================================
programa: Militares-F.php
função: Formulario de entrada de dados dos militares
data: 30/04/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
		
		<!--Declaração de conjunto de caracteres -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		
		<title>
		
			Cadastro de militares
		
		</title>
	
		<link rel="stylesheet" type="text/css" href="Menu.css">
		
		<script type="text/javascript" src="javascript/ValidaMilitar.js"></script>
	 
	</head>
	
	<body onLoad="return mostrar()">		

		<form name="Militares" method="POST" action="Militares-P.php" onSubmit="return ValidaMilitar()">
		
			<center>
				
				<h3>Cadastro de militares</h3><br>
		
				<table border="0">
					
					<tr>
					
						<th align="right">
						
							Pelot&atilde;o
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
						
							//pega por post o componente codigo do formulario -F.
							@$codigoMilitar 	    = $_POST['codigoMilitar'];
							@$nomePelotao           = $_POST['nomePelotao'];  //FK
							@$nomeGraduacao         = $_POST['nomeGraduacao'];  //FK
							@$nomeMilitar           = $_POST['nomeMilitar'];
							@$armeiroMilitar        = $_POST['armeiroMilitar'];
							@$usuarioArmeiroMilitar = $_POST['usuarioArmeiroMilitar'];
							@$senhaArmeiroMilitar   = $_POST['senhaArmeiroMilitar'];
							
							//disponibiliza a classe conexão
							include_once("./classes/Conexao.class.php");
							include_once("./classes/Militares.class.php");
							
							//instancia um objeto na classe de conexao
							$con = new Conexao();

							$Militar = new Militares($codigoMilitar, $nomePelotao, $nomeGraduacao, $nomeMilitar, $armeiroMilitar, $usuarioArmeiroMilitar, $senhaArmeiroMilitar);
											
							$Militar->listarPelotao();
						
						?>
					
					</tr>
					
					<tr>
					
						<th align="right">
						
							Gradua&ccedil;&atilde;o
						
						</th>
					
						<?php @header("Content-Type:text/html; charset = ISO-8859-1", true);
							
							$Militar->listarGraduacao();
						
						?>
					
					</tr>
					
					<tr>
					
						<th align="right">
						
							Nome:
						
						</th>
						
						<th align="left">
					
							<input type="text" name="nomeMilitar" title="Informe seu nome de guerra" size="30" maxlength="50">
					
						</th>
					
					</tr>
					
					<tr>
			
						<th align="right">
						
							Armeiro
						
						</th>
						
						<th align="left">
						
							<script type="text/javascript">
								
									function mostrar(condicao){
									if (condicao == 'sim'){
										document.getElementById('armeiro').style.display = "inline";
									}else{
										document.getElementById('armeiro').style.display = "none";
										}
									}
								</script>
						
							<input type="radio" name="armeiroMilitar" value="0" id="sim" onchange="return mostrar('sim')"><label>Sim<label>
							<input type="radio" name="armeiroMilitar" value="1" id="nao" onchange="return mostrar('nao')" checked><label>N&atilde;o</label>
								
						
						</th>
			
					</tr>
			
				</table>
			
				<?php
					
					echo "<table id=\"armeiro\" border=\"0\">";
					
						echo "<tr>";
						
							echo "<th>";
							
								echo "Usu&aacute;rio";
							
							echo "</th>";
						
							echo "<th>";
							
								echo "<input type=\"text\" name=\"usuarioArmeiroMilitar\"  title=\"Informe o usu&aacute;rio de login\" size=\"20\" maxlength=\"50\">";
							
							echo "</th>";
						
						echo "</tr>";
						
						echo "<tr>";
						
							echo "<th>";
							
								echo "Senha";
							
							echo "</th>";
						
							echo "<th>";
							
								echo "<input type=\"password\" name=\"senhaArmeiroMilitar\" title=\"Informe a senha de login\" size=\"20\" maxlength=\"32\">";
							
							echo "</th>";
						
						echo "</tr>";
					
					echo "</table>";
						
				?>
			
				<br>
		
				<table border="0">
				
					<tr>
				
						<th>
							
							<input type="image" src="./imagens/salvar.png" height="30" width="30" title="Salvar" value="submit">
						
						</th>
						
						<th>
						
							<img src="./imagens/limpar.png" height="32" width="32" title="Limpar" onclick="document.Militares.reset()" style="cursor:hand">
						
						</th>
						
						<th>
						
							<a href="Menu.php?pag=Militares-C">

								<img src="./imagens/lupa.png"  title="Consultar" height="30" width="30"/>
						
							</a>
						
						</th>
						
					</tr>
			
				</table>
		
			</center>
		
		</form>
		
	</body>

</html>