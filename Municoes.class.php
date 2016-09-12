<?php

	class Municoes{
	
		private $codigoMunicao;
		private $numeroCalibre;
		private $numeroSerieMunicao;
		
		public function __construct($codigoMunicao, $numeroCalibre, $numeroSerieMunicao){
		
			$this->codigoMunicao      = $codigoMunicao;
			$this->numeroCalibre      = $numeroCalibre;
			$this->numeroSerieMunicao = $numeroSerieMunicao;
		
		}
		
		//codigoMunicao
		
		public function getCodigoMunicao(){
		
			return $this->codigoMunicao;
		
		}
		
		public function setCodigoMunicao($codigoMunicao){
		
			$this->codigoMunicao = $codigoMunicao;
		
		}
		
		//numeroSerieMunicao
		
		public function getNumeroSerieMunicao(){
		
			return $this->numeroSerieMunicao;
		
		}
	
		public function setNumeroSerieMunicao($numeroSerieMunicao){
		
			$this->numeroSerieMunicao = $numeroSerieMunicao;
		
		}
		
		//numeroCalibre
		
		public function getCodigoCalibre(){
		
			"SELECT codigoCalibre
			FROM Calibres
			WHERE codigoCalibre=". $this->numeroCalibre;
		
		}
		public function setNumeroCalibre($numeroCalibre){
		
			$this-> numeroCalibre = $numeroCalibre;
		
		}
		
		//listarCalibre - FK
		public function listarCalibre(){
		
			$query = "SELECT *
					FROM Calibres
					ORDER BY numeroCalibre";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"numeroCalibre\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
				echo "<option value=\" " .$array['codigoCalibre']. " \"";
				
				if( $array['codigoCalibre'] == $this->numeroCalibre) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['numeroCalibre']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//incluirMunicao
		
		public function incluirMunicao(){
		
			$query = "INSERT INTO Municoes(
						codigoMunicao,
						codigoCalibre,
						numeroSerieMunicao)
					VALUES('NULL',
					'".$this->numeroCalibre."',
					'".$this->getNumeroSerieMunicao()."');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarMunicao
		
		public function alterarMunicao(){
		
			// altera o valor dos atributos no banco atraves de sql embutido
			$query = "UPDATE Municoes
					SET numeroSerieMunicao = '" . $this->getNumeroSerieMunicao() . "',
					codigoCalibre = '".$this->numeroCalibre."' ".
					"WHERE codigoMunicao = " . $this->getCodigoMunicao();
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirMunicao
		
		public function excluirMunicao($codigoMunicao){
		
			//exclui o registro do banco pelo sql embutido
			$query = "DELETE FROM Municoes
					WHERE codigoMunicao = '" . $codigoMunicao . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarMunicao
		
		public function listarMunicao(){
		
			//lista as Munições do banco atraves de sql embutido
			$query = "SELECT M.codigoMunicao, C.numeroCalibre, C.codigoCalibre, M.numeroSerieMunicao
					FROM Municoes M
					INNER JOIN Calibres C ON C.codigoCalibre = M.codigoCalibre
					ORDER BY numeroCalibre";

			$res 	= mysql_query($query) or die(mysql_error()); 
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"5\" align=\"center\"> MUNI&Ccedil;&Otilde;ES</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Calibre</th><th>N&uacute;mero de S&eacute;rie</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoMunicao'] ."</td>";
				echo	"<td align=\"center\">".    $array['numeroCalibre'] ."</td>";
				echo	"<td align=\"center\"><b>". $array['numeroSerieMunicao'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Municoes-A&chave=". $array['codigoMunicao'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Municoes-P.php?acao=1&chave=". $array['codigoMunicao'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Municoes-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		public function localizarMunicao($codigoMunicao){
		
			$query = "SELECT codigoMunicao, codigoCalibre, numeroSerieMunicao
					FROM Municoes
					WHERE codigoMunicao =" . $codigoMunicao;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoMunicao($row[0]);
			$this-> setNumeroCalibre($row[1]);
			$this-> setNumeroSerieMunicao($row[2]);
			
		}
		
	}

?>