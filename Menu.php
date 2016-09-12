<?php
	ob_start();
	include_once("classes/Conexao.class.php");
	$con = new Conexao();
	
	
	
	session_start();

	
	
?>

<!--
=============================================================
programa: Menu.php
função: Menu do sistema
data: 01/06/2013
autor: Anderson Lucas Farias Muniz 
Docente: Alexandre Faccioni Barcellos
=============================================================
-->

<html>

	<head>
	
		<title>
		
			Menu
		
		</title>
		
		<link rel="stylesheet" type="text/css" href="menu.css">
		
		<script type="text/javascript" src="javascript/ValidaAcessorio.js"></script>
		<script type="text/javascript" src="javascript/ValidaArma.js"></script>
		<script type="text/javascript" src="javascript/ValidaCalibre.js"></script>
		<script type="text/javascript" src="javascript/ValidaCompanhia.js"></script>
		<script type="text/javascript" src="javascript/ValidaGraduacao.js"></script>
		<script type="text/javascript" src="javascript/ValidaMarca.js"></script>
		<script type="text/javascript" src="javascript/ValidaMilitar.js"></script>
		<script type="text/javascript" src="javascript/ValidaModelo.js"></script>
		<script type="text/javascript" src="javascript/ValidaMunicao.js"></script>
		<script type="text/javascript" src="javascript/ValidaOrganizacaoMilitar.js"></script>
		<script type="text/javascript" src="javascript/ValidaPelotao.js"></script>
		<script type="text/javascript" src="javascript/ValidaTipoOrganizacaoMilitar.js"></script>
	
	
	</head>
	
	<body>
	
		<div id="geral">
	
			<div id="topo">
				
				<div id="logo">
				
					<div id="image">
					
						<div id="usuario">
						
						<?php
							echo "<br>";
							echo $_SESSION['graduacao'];
							echo "<br>";
							echo $_SESSION['nome'];
						?>
							
						</div>
				
					</div>
					
				</div>
				
			</div>
	
			<div id="principal">
								
				<div id='cssmenu'>
					
					<ul>
						<li class='active'><a href='Menu.php'><span>Inicio</span></a></li>
					  
						<li class='has-sub'><a href='#'><span>Cadastros</span></a>
							
							<ul>
								
								<li><a href='Menu.php?pag=Acessorios-F'><span>Acess&oacute;rios</span></a></li>
								<li><a href='Menu.php?pag=Armas-F'><span>Armas</span></a></li>
								<li><a href='Menu.php?pag=Calibres-F'><span>Calibres</span></a></li>
								<li><a href='Menu.php?pag=Companhias-F'><span>Companhias</span></a></li>
								<li><a href='Menu.php?pag=Graduacoes-F'><span>Gradua&ccedil;&otilde;es</span></a></li>
								<li><a href='Menu.php?pag=Marcas-F'><span>Marcas</span></a></li>
								<li><a href='Menu.php?pag=Militares-F'><span>Militares</span></a></li>
								<li><a href='Menu.php?pag=Modelos-F'><span>Modelos</span></a></li>
								<li><a href='Menu.php?pag=Municoes-F'><span>Muni&ccedil;&otilde;es</span></a></li>
								<li><a href='Menu.php?pag=OrganizacoesMilitares-F'><span>Organiza&ccedil;&otilde;es militares</span></a></li>
								<li><a href='Menu.php?pag=Pelotoes-F'><span>Pelot&otilde;es</span></a></li>
								<li class='last'><a href='Menu.php?pag=TiposOrganizacoesMilitares-F'><span>Tipos de organiza&ccedil;&otilde;es militares</span></a></li>
							
							</ul>
						
						</li>
					   
						<li class='has-sub'><a href='#'><span>Consultas</span></a>
							<ul>
								
								<li><a href='Menu.php?pag=Acessorios-C'><span>Acess&oacute;rios</span></a></li>
								<li><a href='Menu.php?pag=Armas-C'><span>Armas</span></a></li>
								<li><a href='Menu.php?pag=Calibres-C'><span>Calibres</span></a></li>
								<li><a href='Menu.php?pag=Companhias-C'><span>Companhias</span></a></li>
								<li><a href='Menu.php?pag=Graduacoes-C'><span>Gradua&ccedil;&otilde;es</span></a></li>
								<li><a href='Menu.php?pag=Marcas-C'><span>Marcas</span></a></li>
								<li><a href='Menu.php?pag=Militares-C'><span>Militares</span></a></li>
								<li><a href='Menu.php?pag=Modelos-C'><span>Modelos</span></a></li>
								<li><a href='Menu.php?pag=Municoes-C'><span>Muni&ccedil;&otilde;es</span></a></li>
								<li><a href='Menu.php?pag=OrganizacoesMilitares-C'><span>Organiza&ccedil;&otilde;es militares</span></a></li>
								<li><a href='Menu.php?pag=Pelotoes-C'><span>Pelot&otilde;es</span></a></li>
								<li class='last'><a href='Menu.php?pag=TiposOrganizacoesMilitares-C'><span>Tipos de organiza&ccedil;&otilde;es militares</span></a></li>
							
							</ul>
						
						</li>
					   
						<li><a href='Menu.php?pag=Movimentacoes-F'><span>Movimenta&ccedil;&otilde;es</span></a></li>
						   
						<li class='has-sub'><a href='#'><span>Ajuda</span></a>
						
							<ul>
							
								<li><a href='#'><span>Sobre</span></a></li>
								<li><a href='#'><span>Manual</span></a></li>
							
							</ul>
						
						</li>
						   
						<li><a href='Index.html'><span>Deslogar</span></a></li>
					
					</ul>
				
				</div>
				
				<div id="conteudo">
				
					<?php
					
						switch (@$_GET['pag']){
						
							// OrganizacoesMilitares
						
							case 'OrganizacoesMilitares-F':
								
								include('OrganizacoesMilitares-F.php');
							
							break;
							
							case 'OrganizacoesMilitares-C':
								
								include('OrganizacoesMilitares-C.php');
							
							break;
							
							case 'OrganizacoesMilitares-A':
								
								$codigoOrganizacaoMilitar   = 0;
								$nomeTipoOrganizacaoMilitar = NULL;
								$nomeOrganizacaoMilitar 	= NULL;
							
								include_once("./classes/Conexao.class.php");
								include_once("./classes/OrganizacoesMilitares.class.php");
								
								$con = new Conexao();
								$OrganizacaoMilitar = new OrganizacoesMilitares($codigoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar, $nomeOrganizacaoMilitar);
							
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$OrganizacaoMilitar->localizarOrganizacaoMilitar($chave);
								
								//codigoOrganizacaoMilitar
								echo "<form name=\"OrganizacoesMilitares\" action=\"OrganizacoesMilitares-A.php\" method=\"POST\" onSubmit=\"return ValidaOrganizacaoMilitar()\">";
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE ORGANIZA&Ccedil;&Otilde;ES MILITARES</th></tr>";
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $OrganizacaoMilitar->getCodigoOrganizacaoMilitar() . "</strong></font><input type=\"hidden\" name=\"codigoOrganizacaoMilitar\" value=\"". $OrganizacaoMilitar->getCodigoOrganizacaoMilitar() ."\"/></td></tr>";
								
								//nomeTipoOrganizacaoMilitar
								echo "<tr>";
								echo "<td align=\"right\">Tipo de OM</td>";
								
								echo $OrganizacaoMilitar->listarTipoOrganizacaoMilitar();
								
								echo "</tr>";
								
								//nomeOrganizacaoMilitar
								echo "<tr><td align=\"right\"><label>Nome</label></td><td><input type=\"text\" name=\"nomeOrganizacaoMilitar\" size=\"20\" value=\"" . $OrganizacaoMilitar->getNomeOrganizacaoMilitar() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=OrganizacoesMilitares-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// TiposOrganizacoesMilitares
							case 'TiposOrganizacoesMilitares-F':
							
								include('TiposOrganizacoesMilitares-F.php');
							
							break;
							
							case 'TiposOrganizacoesMilitares-C':
							
								include('TiposOrganizacoesMilitares-C.php');
							
							break;
							
							case 'TiposOrganizacoesMilitares-A':
							
								$codigoTipoOrganizacaoMilitar   = 0;
								$nomeTipoOrganizacaoMilitar 	= NULL;
							
								include_once("./classes/Conexao.class.php");
								include_once("./classes/TiposOrganizacoesMilitares.class.php");
								
								$con = new Conexao();
								$TipoOrganizacaoMilitar = new TiposOrganizacoesMilitares($codigoTipoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar);
								
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$TipoOrganizacaoMilitar->localizarTipoOrganizacaoMilitar($chave);

									
								//codigoTipoOrganizacaoMilitar
								echo "<form name=\"TiposOrganizacoesMilitares\" action=\"Menu.php?pag=TiposOrganizacoesMilitares-A\" method=\"POST\" onSubmit=\"return ValidaTipoOrganizacaoMilitar()\">";
								
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\">";
								
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE TIPOS DE ORGANIZA&Ccedil;&Otilde;ES MILITARES</th></tr>";
								
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $TipoOrganizacaoMilitar->getCodigoTipoOrganizacaoMilitar() . "</strong></font><input type=\"hidden\" name=\"codigoTipoOrganizacaoMilitar\" value=\"". $TipoOrganizacaoMilitar->getCodigoTipoOrganizacaoMilitar() ."\"/></td></tr>";
								
								//nomeTipoOrganizacaoMilitar
								
								echo "<tr><td align=\"right\"><label>Nome</label></td><td><input type=\"text\" name=\"nomeTipoOrganizacaoMilitar\" size=\"20\" value=\"" . $TipoOrganizacaoMilitar->getNomeTipoOrganizacaoMilitar() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=TiposOrganizacoesMilitares-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// Calibres
							case 'Calibres-F':
							
								include('Calibres-F.php');
							
							break;
							
							case 'Calibres-C':
							
								include('Calibres-C.php');
							
							break;
							
							case 'Calibres-A':
							
								$codigoCalibre = 0;
								$numeroCalibre = NULL;
							
								include_once("./classes/Conexao.class.php");
								include_once("./classes/Calibres.class.php");
								
								$con = new Conexao();
								$Calibre = new Calibres($codigoCalibre, $numeroCalibre);
								
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Calibre->localizarCalibre($chave);

									
								//codigoCalibre
								echo "<form name=\"Calibres\" action=\"Calibres-A.php\" method=\"POST\" onSubmit=\"return ValidaCalibre()\">";
								
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE CALIBRES</th></tr>";
								
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $Calibre->getCodigoCalibre() . "</strong></font><input type=\"hidden\" name=\"codigoCalibre\" value=\"". $Calibre->getCodigoCalibre() ."\"/></td></tr>";
								
								//numeroCalibre
								
								echo "<tr><td align=\"right\"><label>Nome</label></td><td><input type=\"text\" name=\"numeroCalibre\" size=\"20\" value=\"" . $Calibre->getNumeroCalibre() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Calibres-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// Marcas
							case 'Marcas-F':
							
								include('Marcas-F.php');
							
							break;
						
							case 'Marcas-C':
							
								include('Marcas-C.php');
							
							break;
							
							case 'Marcas-A':
							
								$codigoMarca = 0;
								$nomeMarca   = NULL;
							
								include_once("./classes/Conexao.class.php");
								include_once("./classes/Marcas.class.php");
								
								$con = new Conexao();
								$Marca = new Marcas($codigoMarca, $nomeMarca);
								
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Marca->localizarMarca($chave);

									
								//codigoMarca
								echo "<form name=\"Marcas\" action=\"Marcas-A.php\" method=\"POST\" onSubmit=\"return ValidaMarca()\">";
								
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE MARCAS</th></tr>";
								
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $Marca->getCodigoMarca() . "</strong></font><input type=\"hidden\" name=\"codigoMarca\" value=\"". $Marca->getCodigoMarca() ."\"/></td></tr>";
								
								//nomeMarca
								
								echo "<tr><td align=\"right\"><label>Nome</label></td><td><input type=\"text\" name=\"nomeMarca\" size=\"20\" value=\"" . $Marca->getNomeMarca() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Marcas-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// Municoes
							case 'Municoes-F':
							
								include('Municoes-F.php');
							
							break;
							
							case 'Municoes-C':
							
								include('Municoes-C.php');
							
							break;
							
							case 'Municoes-A':
							
								$codigoMunicao      = 0;
								$numeroCalibre      = NULL;
								$numeroSerieMunicao = NULL;
								
								include_once ("classes/Conexao.class.php");
								include_once ("classes/Municoes.class.php");
								
								$con = new Conexao();
								$Municao = new Municoes($codigoMunicao, $numeroSerieMunicao, $numeroCalibre);
								
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Municao->localizarMunicao($chave);
								
								//codigoMunicao
								echo "<form name=\"Municao\" action=\"Municoes-A.php\" method=\"POST\" onSubmit=\"return ValidaMunicao()\">";
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE MUNI&Ccedil;&Otilde;ES</th></tr>";
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $Municao->getCodigoMunicao() . "</strong></font><input type=\"hidden\" name=\"codigoMunicao\" value=\"". $Municao->getCodigoMunicao() ."\"/></td></tr>";
								
								//numeroCalibre
								echo "<tr>";
								echo "<td align=\"right\">Calibre</td>";
								
								echo $Municao->listarCalibre();
								
								echo "</tr>";
								
								//numeroSerieMunicao
								echo "<tr><td align=\"right\"><label>Numero</label></td><td><input type=\"text\" name=\"numeroSerieMunicao\" size=\"20\" value=\"" . $Municao->getNumeroSerieMunicao() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Municoes-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// Companhias
							case 'Companhias-F':
							
								include('Companhias-F.php');
							
							break;
							
							case 'Companhias-C':
							
								include('Companhias-C.php');
							
							break;
						
							case 'Companhias-A':
							
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
							
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Companhia->localizarCompanhia($chave);
								
								//codigoCompanhia
								echo "<form name=\"Companhias\" action=\"Companhias-A.php\" method=\"POST\" onSubmit=\"return ValidaCompanhia()\">";
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE COMPANHIAS</th></tr>";
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $Companhia->getCodigoCompanhia() . "</strong></font><input type=\"hidden\" name=\"codigoCompanhia\" value=\"". $Companhia->getCodigoCompanhia() ."\"/></td></tr>";
								
								//nomeOrganizacaoMilitar
								echo "<tr>";
								echo "<td align=\"right\">OM</td>";
								
								echo $Companhia->listarOrganizacaoMilitar();
								
								echo "</tr>";
								
								//nomeCompanhia
								echo "<tr><td align=\"right\"><label>Nome</label></td><td><input type=\"text\" name=\"nomeCompanhia\" size=\"20\" value=\"" . $Companhia->getNomeCompanhia() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Companhias-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// Graduacoes
							case 'Graduacoes-F':
							
								include('Graduacoes-F.php');
							
							break;
						
							case 'Graduacoes-C':
							
								include('Graduacoes-C.php');
							
							break;
						
							case 'Graduacoes-A':
							
								@$codigoGraduacao = $_POST['codigoGraduacao'];
								@$nomeGraduacao = $_POST['nomeGraduacao'];
								@$siglaGraduacao = $_POST['siglaGraduacao'];
							
								include_once("./classes/Conexao.class.php");
								include_once("./classes/Graduacoes.class.php");
								
								$con = new Conexao();
								$Graduacao = new Graduacoes($codigoGraduacao, $nomeGraduacao, $siglaGraduacao);
								
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Graduacao->localizarGraduacao($chave);

									
								//codigoGraduacao
								echo "<form name=\"Graduacoes\" action=\"Graduacoes-A.php\" method=\"POST\" onSubmit=\"return ValidaGraduacao()\">";
								
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE GRADUA&Ccedil;&Otilde;ES</th></tr>";
								
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $Graduacao->getCodigoGraduacao() . "</strong></font><input type=\"hidden\" name=\"codigoGraduacao\" value=\"". $Graduacao->getCodigoGraduacao() ."\"/></td></tr>";
								
								//nomeGraduacao
								
								echo "<tr><td align=\"right\">Nome</td><td><input type=\"text\" name=\"nomeGraduacao\" size=\"20\" value=\"" . $Graduacao->getNomeGraduacao() ."\"/></td></tr>";
								
								//nomeSigla
								echo "<tr><td align=\"right\">Sigla</td><td><input type=\"text\" name=\"siglaGraduacao\" size=\"3\" value=\"" . $Graduacao->getSiglaGraduacao() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Graduacoes-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// Pelotoes
							case 'Pelotoes-F':
							
								include('Pelotoes-F.php');
							
							break;
						
							case 'Pelotoes-C':
							
								include('Pelotoes-C.php');
							
							break;
							
							case 'Pelotoes-A':
							
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
							
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Pelotao->localizarPelotao($chave);
								
								//codigoPelotao
								echo "<form name=\"Pelotoes\" action=\"Pelotoes-A.php\" method=\"POST\" onSubmit=\"return ValidaPelotao()\">";
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE PELOT&Otilde;ES</th></tr>";
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $Pelotao->getCodigoPelotao() . "</strong></font><input type=\"hidden\" name=\"codigoPelotao\" value=\"". $Pelotao->getCodigoPelotao() ."\"/></td></tr>";
								
								//nomeCompanhia
								echo "<tr>";
								echo "<td align=\"right\">OM</td>";
								
								echo $Pelotao->listarCompanhia();
								
								echo "</tr>";
								
								//nomePelotao
								echo "<tr><td align=\"right\"><label>Nome</label></td><td><input type=\"text\" name=\"nomePelotao\" size=\"20\" value=\"" . $Pelotao->getNomePelotao() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Pelotoes-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// Acessorios
							case 'Acessorios-F':
							
								include('Acessorios-F.php');
							
							break;
						
							case 'Acessorios-C':
							
								include('Acessorios-C.php');
							
							break;
							
							case 'Acessorios-A':
							
								$codigoAcessorio = 0;
								$nomeAcessorio   = NULL;
							
								include_once("./classes/Conexao.class.php");
								include_once("./classes/Acessorios.class.php");
								
								$con = new Conexao();
								$Acessorio = new Acessorios($codigoAcessorio, $nomeAcessorio);
							
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Acessorio->localizarAcessorio($chave);

									
								//codigoAcessorio
								echo "<form name=\"Acessorios\" action=\"Acessorios-A.php\" method=\"POST\" onSubmit=\"return ValidaAcessorio()\">";
								
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE ACESS&Oacute;RIOS</th></tr>";
								
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $Acessorio->getCodigoAcessorio() . "</strong></font><input type=\"hidden\" name=\"codigoAcessorio\" value=\"". $Acessorio->getCodigoAcessorio() ."\"/></td></tr>";
								
								//nomeAcessorio
								
								echo "<tr><td align=\"right\"><label>Nome</label></td><td><input type=\"text\" name=\"nomeAcessorio\" size=\"20\" value=\"" . $Acessorio->getNomeAcessorio() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Acessorios-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// Armas
							case 'Armas-F':
							
								include('Armas-F.php');
							
							break;
						
							case 'Armas-C':
							
								include('Armas-C.php');
							
							break;
							
							case 'Armas-A':
							
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
								
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Arma->localizarArma($chave);
								
								//codigoArma
								echo "<form name=\"Armas\" action=\"Armas-A.php\" method=\"POST\" onSubmit=\"return ValidaArma()\">";
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE ARMAS</th></tr>";
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $Arma->getCodigoArma() . "</strong></font><input type=\"hidden\" name=\"codigoArma\" value=\"". $Arma->getCodigoArma() ."\"/></td></tr>";
								
								//numeroCalibre
								echo "<tr>";
								echo "<td align=\"right\">Calibre</td>";
								
								echo $Arma->listarCalibre();
								
								echo "</tr>";
								
								//nomeModelo
								echo "<tr>";
								echo "<td align=\"right\">Modelo</td>";
								
								echo $Arma->listarModelo();
								
								echo "</tr>";
								
								//numeroSerieArma
								echo "<tr><td align=\"right\"><label>N&uacute;mero de s&eacute;rie</label></td><td><input type=\"text\" name=\"numeroSerieArma\" size=\"20\" value=\"" . $Arma->getNumeroSerieArma() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Armas-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
							
							// Modelos
							case 'Modelos-F':
							
								include('Modelos-F.php');
							
							break;
						
							case 'Modelos-C':
							
								include('Modelos-C.php');
							
							break;
							
							case 'Modelos-A':
							
								@$codigoModelo = $_POST['codigoModelo'];
								@$nomeMarca    = $_POST['nomeMarca'];
								@$nomeModelo   = $_POST['nomeModelo'];
								
								//disponibiliza a classe conexão
								include_once("./classes/Conexao.class.php");
								include_once("./classes/Modelos.class.php");
								
								//instancia um objeto na classe de conexao
								$con = new Conexao();
								
								$Modelo = new Modelos($codigoModelo, $nomeMarca, $nomeModelo);
								
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Modelo->localizarModelo($chave);
								
								//codigoModelo
								echo "<form name=\"Modelos\" action=\"Modelos-A.php\" method=\"POST\" onSubmit=\"return ValidaModelo()\">";
								echo "<table id=\"tabeladados\" border=\"1\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE MODELOS</th></tr>";
								echo "<tr><td align=\"right\"><label>C&oacute;digo</label></td><td align=\"center\"><strong><font color=\"blue\">". $Modelo->getCodigoModelo() . "</strong></font><input type=\"hidden\" name=\"codigoModelo\" value=\"". $Modelo->getCodigoModelo() ."\"/></td></tr>";
								
								//nomeMarca
								echo "<tr>";
								echo "<td align=\"right\">Tipo de OM</td>";
								
								echo $Modelo->listarMarca();
								
								echo "</tr>";
								
								//nomeModelo
								echo "<tr><td align=\"right\"><label>Nome</label></td><td><input type=\"text\" name=\"nomeModelo\" size=\"20\" value=\"" . $Modelo->getNomeModelo() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Modelos-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></form>";
							
							break;
						
							// Movimentacoes
							case 'Movimentacoes-F':
							
								include('Movimentacoes-F.php');
							
							break;
							
							case 'Movimentacoes-C':
							
								include('Movimentacoes-C.php');
							
							break;
					
							// Militares
							case 'Militares-F':
							
								include('Militares-F.php');
							
							break;
							
							case 'Militares-C':
							
								include('Militares-C.php');
							
							break;
							
							case 'Militares-A':
							
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
								
								if (isset($_GET['chave'])){
			
									$chave = $_GET['chave'];
								
								}
							
								$Militar->localizarMilitar($chave);
								
								echo "<form name=\"Militares\" action=\"Militares-A.php\" method=\"POST\" onSubmit=\"return ValidaMilitar()\">";
								echo "<center>";
								echo "<table id=\"tabeladados\" border=\"0\" celpadding=\"2px\" cellspacing=\"2px\" width=\"400\">";
								echo "<tr><th colspan=\"4\" align=\"center\">ALTERA&Ccedil;&Atilde;O DE MILITARES</th></tr>";
								
								echo "<tr><td align=\"right\"><label>C&oacute;digo:</label></td><td align=\"left\"><strong><font color=\"blue\">". $Militar->getCodigoMilitar() . "</strong></font><input type=\"hidden\" name=\"codigoMilitar\" value=\"". $Militar->getCodigoMilitar() ."\"/></td></tr>";
								
								//nomePelotao
								echo "<tr>";
								echo "<td align=\"right\">Pelot&aacute;o:</td>";
								
								echo $Militar->listarPelotao();
								
								echo "</tr>";
								
								//nomeGraduacao
								echo "<tr>";
								echo "<td align=\"right\">Gradua&ccedil;&atilde;o:</td>";
								
								echo $Militar->listarGraduacao();
								
								echo "</tr>";
								
								//nomeMilitar
								echo "<tr><td align=\"right\"><label>Nome:</label></td><td><input type=\"text\" name=\"nomeMilitar\" size=\"20\" value=\"" . $Militar->getNomeMilitar() ."\"/></td></tr>";
								
								//armeiroMilitar
								echo "<tr><td align=\"right\"><label>Armeiro:</label></td>";
											
								echo "<th align=\"left\">";
											
									echo "<script type=\"text/javascript\">";
													
										
													
										function mostrar($condicao){
										if ($condicao == 'sim'){
											document.getElementById('armeiro').style.display == "inline";
										}else{
											document.getElementById('armeiro').style.display == "none";
											}
										}
										
									echo "</script>";
											
									if ($Militar->getArmeiroMilitar() == 0){
											
										echo "<input type=\"radio\" name=\"armeiroMilitar\" value=\"0\" id=\"sim\" onchange=\"return mostrar('sim')\" checked><label>Sim<label>";
										echo "<input type=\"radio\" name=\"armeiroMilitar\" value=\"1\" id=\"nao\" onchange=\"return mostrar('nao')\"><label>N&atilde;o</label>";
									
									}else{
									
										echo "<input type=\"radio\" name=\"armeiroMilitar\" value=\"0\" id=\"sim\" onchange=\"return mostrar('sim')\"><label>Sim<label>";
										echo "<input type=\"radio\" name=\"armeiroMilitar\" value=\"1\" id=\"nao\" onchange=\"return mostrar('nao')\" checked><label>N&atilde;o</label>";
									
									}
									
											
									echo "</th>";
								
								//usuarioArmeiroMilitar
								echo "<tr><td align=\"right\"><label>Usu&aacute;rio:</label></td><td><input type=\"text\" name=\"usuarioArmeiroMilitar\" size=\"20\" value=\"" . $Militar->getUsuarioArmeiroMilitar() ."\"/></td></tr>";
								
								//senhaArmeiroMilitar
								echo "<tr><td align=\"right\"><label>Senha:</label></td><td><input type=\"password\" name=\"senhaArmeiroMilitar\" size=\"20\" value=\"" . $Militar->getSenhaArmeiroMilitar() ."\"/></td></tr>";
								
								echo "<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" name=\"btnSalvar\" value=\"Salvar\"/><input type=\"reset\"  name=\"btnLimpar\" value=\"Limpar\"/><a href=\"Menu.php?pag=Militares-F\"> <img src=\"./imagens/voltar.bmp\" title=\"Voltar\" align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
								echo "</table></center></form>";
							
							break;
						
						}
					
					
					?>
			
				</div>
				
			</div>
			
			<div id="rodape">
			
				<br>
			
				Desenvolvido por Anderson Muniz

			</div>
			
		</div>
	</body>

</html>