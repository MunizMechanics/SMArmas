<?php

	class Marcas{
	
		private $codigoMarca;
		private $nomeMarca;
		
		public function __construct($codigoMarca, $nomeMarca){
		
			$this->codigoMarca = $codigoMarca;
			$this->nomeMarca = $nomeMarca;
		
		}
		
		//codigoMarca
		
		public function getCodigoMarca(){
		
			return $this->codigoMarca;
		
		}
		
		public function setCodigoMarca($codigoMarca){
		
			$this->codigoMarca = $codigoMarca;
		
		}
		
		//nomeMarca
		
		public function getNomeMarca(){
		
			return $this->nomeMarca;
		
		}
		
		public function setNomeMarca($nomeMarca){
		
			$this->nomeMarca = $nomeMarca;
		
		}
		
		//incluirMarca
		
		public function incluirMarca(){
		
			$query = "INSERT INTO Marcas(
						codigoMarca,
						nomeMarca)
					VALUES('NULL',
					'" . $this->getNomeMarca() . "');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarMarca
		
		public function alterarMarca(){
		
			$query = "UPDATE Marcas
					SET nomeMarca = '" . $this->getNomeMarca() . "' 
					WHERE codigoMarca = '" . $this->getCodigoMarca() ."';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirMarca
		
		public function excluirMarca($codigoMarca){
		
			$query = "DELETE FROM Marcas
					WHERE codigoMarca = '" . $codigoMarca . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarMarca
		
		public function listarMarca(){
		
			//lista as OM do banco atraves de sql embutido
			$query = "SELECT *
					FROM Marcas
					ORDER BY nomeMarca";

			$res 	= mysql_query($query) or die(mysql_error()); 

			$nr = (int)mysql_num_rows($res);
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"4\" align=\"center\">MARCAS</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Nome</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoMarca'] ."</td>";
				echo	"<td align=\"center\"><b>".	$array['nomeMarca'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Marcas-A&chave=". $array['codigoMarca'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Marcas-P.php?acao=1&chave=". $array['codigoMarca'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Marcas-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		// localizarMarca
		
		public function localizarMarca($codigoMarca){
		
			$query = "SELECT codigoMarca, nomeMarca
					FROM Marcas
					WHERE codigoMarca =" . $codigoMarca;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoMarca($row[0]);
			$this-> setNomeMarca($row[1]);
			
		}
	
	}

?>