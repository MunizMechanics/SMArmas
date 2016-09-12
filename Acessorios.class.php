<?php

	class Acessorios{
	
		private $codigoAcessorio;
		private $nomeAcessorio;
		
		public function __construct($codigoAcessorio, $nomeAcessorio){
		
			$this->codigoAcessorio = $codigoAcessorio;
			$this->nomeAcessorio = $nomeAcessorio;
		
		}
		
		//codigoAcessorio
		
		public function getCodigoAcessorio(){
		
			return $this->codigoAcessorio;
		
		}
		
		public function setCodigoAcessorio($codigoAcessorio){
		
			$this->codigoAcessorio = $codigoAcessorio;
		
		}
		
		//nomeAcessorio
		
		public function getNomeAcessorio(){
		
			return $this->nomeAcessorio;
		
		}
		
		public function setNomeAcessorio($nomeAcessorio){
		
			$this->nomeAcessorio = $nomeAcessorio;
		
		}
		
		//incluirAcessorio
		
		public function incluirAcessorio(){
		
			$query = "INSERT INTO Acessorios(
						codigoAcessorio,
						nomeAcessorio)
					VALUES('NULL',
					'" . $this->getNomeAcessorio() . "');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarAcessorio
		
		public function alterarAcessorio(){
		
			$query = "UPDATE Acessorios
					SET nomeAcessorio = '" . $this->getNomeAcessorio() . "' 
					WHERE codigoAcessorio = '" . $this->getCodigoAcessorio() ."';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirAcessorio
		
		public function excluirAcessorio($codigoAcessorio){
		
			$query = "DELETE FROM Acessorios
					WHERE codigoAcessorio = '" . $codigoAcessorio . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarAcessorio
		
		public function listarAcessorio(){
		
			//lista as OM do banco atraves de sql embutido
			$query = "SELECT *
					FROM Acessorios
					ORDER BY nomeAcessorio";

			$res 	= mysql_query($query) or die(mysql_error()); 

			$nr = (int)mysql_num_rows($res);
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"4\" align=\"center\">ACESS&Oacute;RIOS</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Nome</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoAcessorio'] ."</td>";
				echo	"<td align=\"center\">".	$array['nomeAcessorio'] ."</td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Acessorios-A&chave=". $array['codigoAcessorio'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Acessorios-P.php?acao=1&chave=". $array['codigoAcessorio'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Acessorios-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		// localizarAcessorio
		
		public function localizarAcessorio($codigoAcessorio){
		
			$query = "SELECT codigoAcessorio, nomeAcessorio
					FROM Acessorios
					WHERE codigoAcessorio =" . $codigoAcessorio;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoAcessorio($row[0]);
			$this-> setNomeAcessorio($row[1]);
			
		}
	
	}

?>