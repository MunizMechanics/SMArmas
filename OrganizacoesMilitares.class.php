<?php

	class OrganizacoesMilitares{
	
		private $codigoOrganizacaoMilitar;
		private $nomeTipoOrganizacaoMilitar;
		private $nomeOrganizacaoMilitar;
		
		public function __construct($codigoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar, $nomeOrganizacaoMilitar){
		
			$this->codigoOrganizacaoMilitar     = $codigoOrganizacaoMilitar;
			$this->nomeTipoOrganizacaoMilitar   = $nomeTipoOrganizacaoMilitar;
			$this->nomeOrganizacaoMilitar       = $nomeOrganizacaoMilitar;
		
		}
		
		//codigoOrganizacaoMilitar
		
		public function getCodigoOrganizacaoMilitar(){
		
			return $this->codigoOrganizacaoMilitar;
		
		}
		
		public function setCodigoOrganizacaoMilitar($codigoOrganizacaoMilitar){
		
			$this->codigoOrganizacaoMilitar = $codigoOrganizacaoMilitar;
		
		}
		
		//nomeOM
		
		public function getNomeOrganizacaoMilitar(){
		
			return $this->nomeOrganizacaoMilitar;
		
		}
	
		public function setNomeOrganizacaoMilitar($nomeOrganizacaoMilitar){
		
			$this->nomeOrganizacaoMilitar = $nomeOrganizacaoMilitar;
		
		}
		
		//codigoTipoOrganizacaoMilitar
		
		public function getCodigoTipoOrganizacaoMilitar(){
		
			"SELECT codigoTipoOrganizacaoMilitar
			FROM TiposOrganizacoesMilitar
			WHERE codigoTipoOrganizacaoMilitar=". $this->nomeTipoOrganizacaoMilitar;
		
		}
		public function setNomeTipoOrganizacaoMilitar($nomeTipoOrganizacaoMilitar){
		
			$this-> nomeTipoOrganizacaoMilitar = $nomeTipoOrganizacaoMilitar;
		
		}
		
		//listarTipoOM - FK
		public function listarTipoOrganizacaoMilitar(){
		
			$query = "SELECT *
					FROM TiposOrganizacoesMilitares
					ORDER BY nomeTipoOrganizacaoMilitar";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"nomeTipoOrganizacaoMilitar\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
					
				echo "<option value=\" " .$array['codigoTipoOrganizacaoMilitar']. " \"";
				
				if( $array['codigoTipoOrganizacaoMilitar'] == $this->nomeTipoOrganizacaoMilitar) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['nomeTipoOrganizacaoMilitar']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//incluirOM
		
		public function incluirOrganizacaoMilitar(){
		
			$query = "INSERT INTO OrganizacoesMilitares(
						codigoOrganizacaoMilitar,
						codigoTipoOrganizacaoMilitar,
						nomeOrganizacaoMilitar)
					VALUES('NULL',
					'".$this->nomeTipoOrganizacaoMilitar."',
					'".$this->getNomeOrganizacaoMilitar()."');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarOM
		
		public function alterarOrganizacaoMilitar(){
		
			// altera o valor dos atributos no banco atraves de sql embutido
			$query = "UPDATE OrganizacoesMilitares
					SET nomeOrganizacaoMilitar = '" . $this->getNomeOrganizacaoMilitar() . "',
					codigoTipoOrganizacaoMilitar = '".$this->nomeTipoOrganizacaoMilitar."' ".
					"WHERE codigoOrganizacaoMilitar = " . $this->getCodigoOrganizacaoMilitar();
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirOM
		
		public function excluirOrganizacaoMilitar($codigoOrganizacaoMilitar){
		
			//exclui o registro do banco pelo sql embutido
			$query = "DELETE FROM OrganizacoesMilitares
					WHERE codigoOrganizacaoMilitar = '" . $codigoOrganizacaoMilitar . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarOM
		
		public function listarOrganizacaoMilitar(){
		
			//lista as OM do banco atraves de sql embutido
			$query = "SELECT OM.codigoOrganizacaoMilitar, TOM.nomeTipoOrganizacaoMilitar, TOM.codigoTipoOrganizacaoMilitar, OM.nomeOrganizacaoMilitar
					FROM OrganizacoesMilitares OM
					INNER JOIN TiposOrganizacoesMilitares TOM ON TOM.codigoTipoOrganizacaoMilitar = OM.codigoTipoOrganizacaoMilitar
					ORDER BY nomeTipoOrganizacaoMilitar";

			$res 	= mysql_query($query) or die(mysql_error()); 
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"5\" align=\"center\"> ORGANIZA&Ccedil;&Otilde;ES MILITARES</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Tipo de OM</th><th>Nome</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoOrganizacaoMilitar'] ."</td>";
				echo	"<td align=\"center\">".    $array['nomeTipoOrganizacaoMilitar'] ."</td>";
				echo	"<td align=\"center\"><b>". $array['nomeOrganizacaoMilitar'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=OrganizacoesMilitares-A&chave=". $array['codigoOrganizacaoMilitar'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=OrganizacoesMilitares-P.php?acao=1&chave=". $array['codigoOrganizacaoMilitar'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=OrganizacoesMilitares-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
				
			echo "</div>";
		
			
		
		}
		
		public function localizarOrganizacaoMilitar($codigoOrganizacaoMilitar){
		
			$query = "SELECT codigoOrganizacaoMilitar, codigoTipoOrganizacaoMilitar, nomeOrganizacaoMilitar
					FROM OrganizacoesMilitares
					WHERE codigoOrganizacaoMilitar =" . $codigoOrganizacaoMilitar;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoOrganizacaoMilitar($row[0]);
			$this-> setNomeTipoOrganizacaoMilitar($row[1]);
			$this-> setNomeOrganizacaoMilitar($row[2]);
			
		}
		
	}

?>