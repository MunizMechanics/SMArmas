<?php

	class Graduacoes{
	
		private $codigoGraduacao;
		private $nomeGraduacao;
		private $siglaGraduacao;
		
		public function __construct($codigoGraduacao, $nomeGraduacao, $siglaGraduacao){
		
			$this->codigoGraduacao = $codigoGraduacao;
			$this->nomeGraduacao = $nomeGraduacao;
			$this->siglaGraduacao = $siglaGraduacao;
		
		}
		
		//codigoGraduacao
		
		public function getCodigoGraduacao(){
		
			return $this->codigoGraduacao;
		
		}
		
		public function setCodigoGraduacao($codigoGraduacao){
		
			$this->codigoGraduacao = $codigoGraduacao;
		
		}
		
		//nomeGraduacao
		
		public function getNomeGraduacao(){
		
			return $this->nomeGraduacao;
		
		}
		
		public function setNomeGraduacao($nomeGraduacao){
		
			$this->nomeGraduacao = $nomeGraduacao;
		
		}
		
		//siglaGraduacao
		public function getSiglaGraduacao(){
		
			return $this->siglaGraduacao;
		
		}
		
		public function setSiglaGraduacao($siglaGraduacao){
		
			$this->siglaGraduacao = $siglaGraduacao;
		
		}
		
		//incluirGraduacao
		
		public function incluirGraduacao(){
		
			$query = "INSERT INTO Graduacoes(
						codigoGraduacao,
						nomeGraduacao,
						siglaGraduacao)
					VALUES('NULL',
					'" . $this->getNomeGraduacao() . "',
					'" . $this->getSiglaGraduacao() . "');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarGraduacao
		
		public function alterarGraduacao(){
		
			$query = "UPDATE Graduacoes
					SET nomeGraduacao = '" . $this->getNomeGraduacao() . "',
						siglaGraduacao = '" . $this->getSiglaGraduacao() . "'
					WHERE codigoGraduacao = '" . $this->getCodigoGraduacao() ."';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirGraduacao
		
		public function excluirGraduacao($codigoGraduacao){
		
			$query = "DELETE FROM Graduacoes
					WHERE codigoGraduacao = '" . $codigoGraduacao . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarGraduacao
		
		public function listarGraduacao(){
		
			//lista as OM do banco atraves de sql embutido
			$query = "SELECT *
					FROM Graduacoes
					ORDER BY nomeGraduacao";

			$res 	= mysql_query($query) or die(mysql_error()); 

			$nr = (int)mysql_num_rows($res);
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"5\" align=\"center\">GRADUA&Ccedil;&Otilde;ES</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Nome</th><th>Sigla</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoGraduacao'] ."</td>";
				echo	"<td align=\"center\"><b>".	$array['nomeGraduacao'] ."</b></td>";
				echo	"<td align=\"center\"><b>".	$array['siglaGraduacao'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Graduacoes-A&chave=". $array['codigoGraduacao'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Graduacoes-P.php?acao=1&chave=". $array['codigoGraduacao'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Graduacoes-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		// localizarGraduacao
		
		public function localizarGraduacao($codigoGraduacao){
		
			$query = "SELECT codigoGraduacao, nomeGraduacao, siglaGraduacao
					FROM Graduacoes
					WHERE codigoGraduacao =" . $codigoGraduacao;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoGraduacao($row[0]);
			$this-> setNomeGraduacao($row[1]);
			$this-> setSiglaGraduacao($row[2]);
		}
	
	}

?>