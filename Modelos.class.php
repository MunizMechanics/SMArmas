<?php

	class Modelos{
	
		private $codigoModelo;
		private $nomeMarca;
		private $nomeModelo;
		
		public function __construct($codigoModelo, $nomeMarca, $nomeModelo){
		
			$this->codigoModelo = $codigoModelo;
			$this->nomeMarca    = $nomeMarca;
			$this->nomeModelo   = $nomeModelo;
		
		}
		
		//codigoModelo
		
		public function getCodigoModelo(){
		
			return $this->codigoModelo;
		
		}
		
		public function setCodigoModelo($codigoModelo){
		
			$this->codigoModelo = $codigoModelo;
		
		}
		
		//nomeModelo
		
		public function getNomeModelo(){
		
			return $this->nomeModelo;
		
		}
	
		public function setNomeModelo($nomeModelo){
		
			$this->nomeModelo = $nomeModelo;
		
		}
		
		//codigoMarca
		
		public function getCodigoMarca(){
		
			"SELECT codigoMarca
			FROM Marcas
			WHERE codigoMarca=". $this->nomeMarca;
		
		}
		public function setNomeMarca($nomeMarca){
		
			$this-> nomeMarca = $nomeMarca;
		
		}
		
		//listarMarca - FK
		public function listarMarca(){
		
			$query = "SELECT *
					FROM Marcas
					ORDER BY nomeMarca";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"nomeMarca\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
					
				echo "<option value=\" " .$array['codigoMarca']. " \"";
				
				if( $array['codigoMarca'] == $this->nomeMarca) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['nomeMarca']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//incluirModelo
		
		public function incluirModelo(){
		
			$query = "INSERT INTO Modelos(
						codigoModelo,
						codigoMarca,
						nomeModelo)
					VALUES('NULL',
					'".$this->nomeMarca."',
					'".$this->getNomeModelo()."');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarModelo
		
		public function alterarModelo(){
		
			// altera o valor dos atributos no banco atraves de sql embutido
			$query = "UPDATE Modelos
					SET nomeModelo = '" . $this->getNomeModelo() . "',
					codigoMarca = '".$this->nomeMarca."' ".
					"WHERE codigoModelo = " . $this->getCodigoModelo();
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirModelo
		
		public function excluirModelo($codigoModelo){
		
			//exclui o registro do banco pelo sql embutido
			$query = "DELETE FROM Modelos
					WHERE codigoModelo = '" . $codigoModelo . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarModelo
		
		public function listarModelo(){
		
			//lista os modelos do banco atraves de sql embutido
			$query = "SELECT M.codigoModelo, MA.nomeMarca, MA.codigoMarca, M.nomeModelo
					FROM Modelos M
					INNER JOIN Marcas MA ON MA.codigoMarca = M.codigoMarca
					ORDER BY nomeMarca";

			$res 	= mysql_query($query) or die(mysql_error()); 
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"5\" align=\"center\">MODELOS</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Marcas</th><th>Nome</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoModelo'] ."</td>";
				echo	"<td align=\"center\">".    $array['nomeMarca'] ."</td>";
				echo	"<td align=\"center\"><b>". $array['nomeModelo'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Modelos-A&chave=". $array['codigoModelo'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Modelos-P.php?acao=1&chave=". $array['codigoModelo'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Modelos-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		public function localizarModelo($codigoModelo){
		
			$query = "SELECT codigoModelo, codigoMarca, nomeModelo
					FROM Modelos
					WHERE codigoModelo =" . $codigoModelo;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoModelo($row[0]);
			$this-> setNomeMarca($row[1]);
			$this-> setNomeModelo($row[2]);
			
		}
		
	}

?>