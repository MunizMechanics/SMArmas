<?php

	class Pelotoes{
	
		private $codigoPelotao;
		private $nomeCompanhia;
		private $nomePelotao;
		
		public function __construct($codigoPelotao, $nomeCompanhia, $nomePelotao){
		
			$this->codigoPelotao = $codigoPelotao;
			$this->nomeCompanhia = $nomeCompanhia;
			$this->nomePelotao   = $nomePelotao;
		
		}
		
		//codigoPelotao
		
		public function getCodigoPelotao(){
		
			return $this->codigoPelotao;
		
		}
		
		public function setCodigoPelotao($codigoPelotao){
		
			$this->codigoPelotao = $codigoPelotao;
		
		}
		
		//codigoCompanhia
		
		public function getNomeCompanhia(){
		
			"SELECT codigoCompanhia
			FROM Companhias
			WHERE codigoCompanhia =". $this-> nomeCompanhia;
		
		}
		
		public function setNomeCompanhia($nomeCompanhia){
		
			$this->nomeCompanhia = $nomeCompanhia;
		
		}
		
		//nomePelotao
		
		public function getNomePelotao(){
		
			return $this->nomePelotao;
		
		}
		
		public function setNomePelotao($nomePelotao){
		
			$this->nomePelotao = $nomePelotao;
		
		}
		
		//listarCompanhia - FK
		public function listarCompanhia(){
		
			$query = "SELECT *
					FROM Companhias
					ORDER BY nomeCompanhia";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"nomeCompanhia\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
				echo "<option value=\" " .$array['codigoCompanhia']. " \"";
				
				if( $array['codigoCompanhia'] == $this->nomeCompanhia) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['nomeCompanhia']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//incluirPelotao
		
		public function incluirPelotao(){
		
			$query = "INSERT INTO Pelotoes(
						codigoPelotao,
						codigoCompanhia,
						nomePelotao)
					VALUES('NULL',
					'".$this->nomeCompanhia."',
					'".$this->getNomePelotao()."');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarPelotao
		
		public function alterarPelotao(){
		
			// altera o valor dos atributos no banco atraves de sql embutido
			$query = "UPDATE Pelotoes
					SET nomePelotao = '" . $this->getNomePelotao() . "',
					codigoCompanhia = '".$this->nomeCompanhia."' ".
					"WHERE codigoPelotao = " . $this->getCodigoPelotao();
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirPelotao
		
		public function excluirPelotao($codigoPelotao){
		
			//exclui o registro do banco pelo sql embutido
			$query = "DELETE FROM Pelotoes
					WHERE codigoPelotao = '" . $codigoPelotao . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarPelotao
		
		public function listarPelotao(){
		
			//lista os Pelotoes do banco atraves de sql embutido
			$query = "SELECT P.codigoPelotao, C.nomeCompanhia, C.codigoCompanhia, P.nomePelotao
					FROM Pelotoes P
					INNER JOIN Companhias C ON C.codigoCompanhia = P.codigoCompanhia
					ORDER BY nomeCompanhia";

			$res 	= mysql_query($query) or die(mysql_error()); 
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"5\" align=\"center\"> PELOT&Otilde;ES</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Companhia</th><th>Nome</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoPelotao'] ."</td>";
				echo	"<td align=\"center\">".    $array['nomeCompanhia'] ."</td>";
				echo	"<td align=\"center\"><b>".	$array['nomePelotao'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Pelotoes-A&chave=". $array['codigoPelotao'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Pelotoes-P.php?acao=1&chave=". $array['codigoPelotao'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Pelotoes-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		public function localizarPelotao($codigoPelotao){
		
			$query = "SELECT codigoPelotao, codigoCompanhia, nomePelotao
					FROM Pelotoes
					WHERE codigoPelotao =" . $codigoPelotao;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoPelotao($row[0]);
			$this-> setNomeCompanhia($row[1]);
			$this-> setNomePelotao($row[2]);
			
		}
		
	}

?>