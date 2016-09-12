<?php

	class Companhias{
	
		private $codigoCompanhia;
		private $nomeOrganizacaoMilitar;
		private $nomeCompanhia;
		
		public function __construct($codigoCompanhia, $nomeOrganizacaoMilitar, $nomeCompanhia){
		
			$this->codigoCompanhia        = $codigoCompanhia;
			$this->nomeOrganizacaoMilitar = $nomeOrganizacaoMilitar;
			$this->nomeCompanhia          = $nomeCompanhia;
		
		}
		
		//codigoCompanhia
		
		public function getCodigoCompanhia(){
		
			return $this->codigoCompanhia;
		
		}
		
		public function setCodigoCompanhia($codigoCompanhia){
		
			$this->codigoCompanhia = $codigoCompanhia;
		
		}
		
		//codigoOrganizacaoMilitar
		
		public function getNomeOrganizacaoMilitar(){
		
			"SELECT codigoOrganizacaoMilitar
			FROM OrganizacoesMilitares
			WHERE codigoOrganizacaoMilitar =". $this-> nomeOrganizacaoMilitar;
		
		}
		
		public function setNomeOrganizacaoMilitar($nomeOrganizacaoMilitar){
		
			$this->nomeOranizacaoMilitar = $nomeOrganizacaoMilitar;
		
		}
		
		//nomeCompanhia
		
		public function getNomeCompanhia(){
		
			return $this->nomeCompanhia;
		
		}
		
		public function setNomeCompanhia($nomeCompanhia){
		
			$this->nomeCompanhia = $nomeCompanhia;
		
		}
		
		//listarOM - FK
		public function listarOrganizacaoMilitar(){
		
			$query = "SELECT *
					FROM OrganizacoesMilitares
					ORDER BY nomeOrganizacaoMilitar";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"nomeOrganizacaoMilitar\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
				echo "<option value=\" " .$array['codigoOrganizacaoMilitar']. " \"";
				
				if( $array['codigoOrganizacaoMilitar'] == $this->nomeOrganizacaoMilitar) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['nomeOrganizacaoMilitar']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//incluirCompanhias
		
		public function incluirCompanhia(){
		
			$query = "INSERT INTO Companhias(
						codigoCompanhia,
						codigoOrganizacaoMilitar,
						nomeCompanhia)
					VALUES('NULL',
					'".$this->nomeOrganizacaoMilitar."',
					'".$this->getNomeCompanhia()."');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarCompanhia
		
		public function alterarCompanhia(){
		
			// altera o valor dos atributos no banco atraves de sql embutido
			$query = "UPDATE Companhias
					SET nomeCompanhia = '" . $this->getNomeCompanhia() . "',
					codigoOrganizacaoMilitar = '".$this->nomeOrganizacaoMilitar."' ".
					"WHERE codigoCompanhia = " . $this->getCodigoCompanhia();
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirCompanhia
		
		public function excluirCompanhia($codigoCompanhia){
		
			//exclui o registro do banco pelo sql embutido
			$query = "DELETE FROM Companhias
					WHERE codigoCompanhia = '" . $codigoCompanhia . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarCompanhia
		
		public function listarCompanhia(){
		
			//lista as Companhia do banco atraves de sql embutido
			$query = "SELECT C.codigoCompanhia, OM.nomeOrganizacaoMilitar, OM.codigoOrganizacaoMilitar, C.nomeCompanhia
					FROM Companhias C
					INNER JOIN OrganizacoesMilitares OM ON OM.codigoOrganizacaoMilitar = C.codigoOrganizacaoMilitar
					ORDER BY nomeOrganizacaoMilitar";

			$res 	= mysql_query($query) or die(mysql_error()); 
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"5\" align=\"center\"> COMPANHIAS</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>OM</th><th>Nome</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoCompanhia'] ."</td>";
				echo	"<td align=\"center\">".    $array['nomeOrganizacaoMilitar'] ."</td>";
				echo	"<td align=\"center\"><b>".	$array['nomeCompanhia'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Companhias-A&chave=". $array['codigoCompanhia'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Companhias-P.php?acao=1&chave=". $array['codigoCompanhia'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Companhias-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		public function localizarCompanhia($codigoCompanhia){
		
			$query = "SELECT codigoCompanhia, codigoOrganizacaoMilitar, nomeCompanhia
					FROM Companhias
					WHERE codigoCompanhia =" . $codigoCompanhia;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoCompanhia($row[0]);
			$this-> setNomeOrganizacaoMilitar($row[1]);
			$this-> setNomeCompanhia($row[2]);
			
		}
		
	}

?>