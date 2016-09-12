<?php

	class Armas{
	
		private $codigoArma;
		private $numeroCalibre;
		private $nomeModelo;
		private $numeroSerieArma;
		
		public function __construct($codigoArma, $numeroCalibre, $nomeModelo, $numeroSerieArma){
		
			$this->codigoArma      = $codigoArma;
			$this->numeroCalibre   = $numeroCalibre;
			$this->nomeModelo      = $nomeModelo;
			$this->numeroSerieArma = $numeroSerieArma;
		
		}
		
		//codigoArma
		
		public function getCodigoArma(){
		
			return $this->codigoArma;
		
		}
		
		public function setCodigoArma($codigoArma){
		
			$this->codigoArma = $codigoArma;
		
		}
		
		//numeroCalibre
		
		public function getNumeroCalibre(){
		
			"SELECT codigoCalibre
			FROM Calibres
			WHERE codigoCalibre =". $this-> numeroCalibre;
		
		}
		
		public function setNumeroCalibre($numeroCalibre){
		
			$this->numeroCalibre = $numeroCalibre;
		
		}
		
		//nomeModelo
		
		public function getNomeModelo(){
		
			"SELECT codigoModelo
			FROM Modelos
			WHERE codigoModelo =". $this-> nomeModelo;
		
		}
		
		public function setNomeModelo($nomeModelo){
		
			$this->nomeModelo = $nomeModelo;
		
		}
		
		//numeroSerieArma
		
		public function getNumeroSerieArma(){
		
			return $this->numeroSerieArma;
		
		}
		
		public function setNumeroSerieArma($numeroSerieArma){
		
			$this->numeroSerieArma = $numeroSerieArma;
		
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
		
		//listarModelo - FK
		public function listarModelo(){
		
			$query = "SELECT *
					FROM Modelos
					ORDER BY nomeModelo";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"nomeModelo\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
				echo "<option value=\" " .$array['codigoModelo']. " \"";
				
				if( $array['codigoModelo'] == $this->nomeModelo) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['nomeModelo']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//incluirArmas
		
		public function incluirArma(){
		
			$query = "INSERT INTO Armas(
						codigoArma,
						codigoCalibre,
						codigoModelo,
						numeroSerieArma)
					VALUES('NULL',
					'".$this->numeroCalibre."',
					'".$this->nomeModelo."',
					'".$this->getNumeroSerieArma()."');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarArma
		
		public function alterarArma(){
		
			// altera o valor dos atributos no banco atraves de sql embutido
			$query = "UPDATE Armas
					SET numeroSerieArma = '" . $this->getNumeroSerieArma() . "',
					codigoCalibre = '".$this->numeroCalibre."',
					codigoModelo = '".$this->nomeModelo."' ".
					"WHERE codigoArma = " . $this->getCodigoArma();
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirArma
		
		public function excluirArma($codigoArma){
		
			//exclui o registro do banco pelo sql embutido
			$query = "DELETE FROM Armas
					WHERE codigoArma = '" . $codigoArma . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarArma
		
		public function listarArma(){
		
			//lista as Armas do banco atraves de sql embutido
			$query = "SELECT A.codigoArma, M.nomeModelo, M.codigoModelo, C.numeroCalibre, C.codigoCalibre, A.numeroSerieArma
					FROM Armas A
					INNER JOIN Modelos M ON M.codigoModelo = A.codigoModelo
					INNER JOIN Calibres C ON C.codigoCalibre = A.codigoCalibre
					ORDER BY nomeModelo, numeroCalibre";

			$res 	= mysql_query($query) or die(mysql_error()); 
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"7\" align=\"center\"> ARMAS</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Calibre</th><th>Modelo</th><th>N&uacute;mero S&eacute;rie</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoArma'] ."</td>";
				echo	"<td align=\"center\">".    $array['numeroCalibre'] ."</td>";
				echo	"<td align=\"center\">".    $array['nomeModelo'] ."</td>";
				echo	"<td align=\"center\"><b>". $array['numeroSerieArma'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Armas-A&chave=". $array['codigoArma'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Armas-P.php?acao=1&chave=". $array['codigoArma'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Armas-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		public function localizarArma($codigoArma){
		
			$query = "SELECT codigoArma, codigoCalibre, codigoModelo, numeroSerieArma
					FROM Armas
					WHERE codigoArma =" . $codigoArma;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoArma($row[0]);
			$this-> setNumeroCalibre($row[1]);
			$this-> setNomeModelo($row[2]);
			$this-> setNumeroSerieArma($row[3]);
			
		}
		
	}

?>