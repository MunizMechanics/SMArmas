<?php

	class TiposOrganizacoesMilitares{
	
		private $codigoTipoOrganizacaoMilitar;
		private $nomeTipoOrganizacaoMilitar;
		
		public function __construct($codigoTipoOrganizacaoMilitar, $nomeTipoOrganizacaoMilitar){
		
			$this->codigoTipoOrganizacaoMilitar = $codigoTipoOrganizacaoMilitar;
			$this->nomeTipoOrganizacaoMilitar   = $nomeTipoOrganizacaoMilitar;
		
		}
		
		//codigoTipoOM
		
		public function getCodigoTipoOrganizacaoMilitar(){
		
			return $this->codigoTipoOrganizacaoMilitar;
		
		}
		
		public function setCodigoTipoOrganizacaoMilitar($codigoTipoOrganizacaoMilitar){
		
			$this->codigoTipoOrganizacaoMilitar = $codigoTipoOrganizacaoMilitar;
		
		}
		
		//nomeTipoOM
		
		public function getNomeTipoOrganizacaoMilitar(){
		
			return $this->nomeTipoOrganizacaoMilitar;
		
		}
	
		public function setNomeTipoOrganizacaoMilitar($nomeTipoOrganizacaoMilitar){
		
			$this->nomeTipoOrganizacaoMilitar = $nomeTipoOrganizacaoMilitar;
		
		}
		
		//incluirOM
		
		public function incluirTipoOrganizacaoMilitar(){
		
			$query = "INSERT INTO TiposOrganizacoesMilitares(
						codigoTipoOrganizacaoMilitar,
						nomeTipoOrganizacaoMilitar)
					VALUES('NULL',
					'" . $this->getNomeTipoOrganizacaoMilitar() . "');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarTipoOM
		
		public function alterarTipoOrganizacaoMilitar(){
		
			// altera o valor dos atributos da unidade no banco atraves de sql embutido
			$query = "UPDATE TiposOrganizacoesMilitares
					SET nomeTipoOrganizacaoMilitar = '" . $this->getNomeTipoOrganizacaoMilitar() . "' 
					WHERE codigoTipoOrganizacaoMilitar = '" . $this->getCodigoTipoOrganizacaoMilitar() ."';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirTipoOM
		
		public function excluirTipoOrganizacaoMilitar($codigoTipoOrganizacaoMilitar){
		
			//exclui o registro do banco pelo sql embutido
			$query = "DELETE FROM TiposOrganizacoesMilitares
					WHERE codigoTipoOrganizacaoMilitar = '" . $codigoTipoOrganizacaoMilitar . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarTipoOM
		
		public function listarTipoOrganizacaoMilitar(){
		
			//lista as OM do banco atraves de sql embutido
			$query = "SELECT *
					FROM TiposOrganizacoesMilitares
					ORDER BY nomeTipoOrganizacaoMilitar";

			$res 	= mysql_query($query) or die(mysql_error()); 

			$nr = (int)mysql_num_rows($res);
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"4\" align=\"center\">TIPOS DE ORGANIZA&Ccedil;&Otilde;ES MILITARES</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Nome</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoTipoOrganizacaoMilitar'] ."</td>";
				echo	"<td align=\"center\"><b>".	$array['nomeTipoOrganizacaoMilitar'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=TiposOrganizacoesMilitares-A&chave=". $array['codigoTipoOrganizacaoMilitar'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=TiposOrganizacoesMilitares-P.php?acao=1&chave=". $array['codigoTipoOrganizacaoMilitar'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=TiposOrganizacoesMilitares-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		public function localizarTipoOrganizacaoMilitar($codigoTipoOrganizacaoMilitar){
		
			$query = "SELECT codigoTipoOrganizacaoMilitar, nomeTipoOrganizacaoMilitar
					FROM TiposOrganizacoesMilitares
					WHERE codigoTipoOrganizacaoMilitar =" . $codigoTipoOrganizacaoMilitar;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoTipoOrganizacaoMilitar($row[0]);
			$this-> setNomeTipoOrganizacaoMilitar($row[1]);
			
		}
		
	}

?>