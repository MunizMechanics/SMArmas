<?php

	class Calibres{
	
		private $codigoCalibre;
		private $numeroCalibre;
		
		public function __construct($codigoCalibre, $numeroCalibre){
		
			$this->codigoCalibre = $codigoCalibre;
			$this->numeroCalibre = $numeroCalibre;
		
		}
		
		//codigoCalibre
		
		public function getCodigoCalibre(){
		
			return $this->codigoCalibre;
		
		}
		
		public function setCodigoCalibre($codigoCalibre){
		
			$this->codigoCalibre = $codigoCalibre;
		
		}
		
		//numeroCalibre
		
		public function getNumeroCalibre(){
		
			return $this->numeroCalibre;
		
		}
		
		public function setNumeroCalibre($numeroCalibre){
		
			$this->numeroCalibre = $numeroCalibre;
		
		}
		
		//incluirCalibre
		
		public function incluirCalibre(){
		
			$query = "INSERT INTO Calibres(
						codigoCalibre,
						numeroCalibre)
					VALUES('NULL',
					'" . $this->getNumeroCalibre() . "');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarCalibre
		
		public function alterarCalibre(){
		
			$query = "UPDATE Calibres
					SET numeroCalibre = '" . $this->getNumeroCalibre() . "' 
					WHERE codigoCalibre = '" . $this->getCodigoCalibre() ."';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirCalibre
		
		public function excluirCalibre($codigoCalibre){
		
			$query = "DELETE FROM Calibres
					WHERE codigoCalibre = '" . $codigoCalibre . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarCalibre
		
		public function listarCalibre(){
		
			//lista as OM do banco atraves de sql embutido
			$query = "SELECT *
					FROM Calibres
					ORDER BY numeroCalibre";

			$res 	= mysql_query($query) or die(mysql_error()); 

			$nr = (int)mysql_num_rows($res);
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"4\" align=\"center\">CALIBRES</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>N&uacute;mero</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoCalibre'] ."</td>";
				echo	"<td align=\"center\"><b>".	$array['numeroCalibre'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Calibres-A&chave=". $array['codigoCalibre'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Calibres-P.php?acao=1&chave=". $array['codigoCalibre'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Calibres-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		public function localizarCalibre($codigoCalibre){
		
			$query = "SELECT codigoCalibre, numeroCalibre
					FROM Calibres
					WHERE codigoCalibre =" . $codigoCalibre;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoCalibre($row[0]);
			$this-> setNumeroCalibre($row[1]);
			
		}
	
	}

?>