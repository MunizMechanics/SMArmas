<?php

	class TiposMovimentacoes{
	
		private $codigoTipoMovimentacao;
		private $nomeTipoMovimentacao;
		
		public function __construct($codigoTipoMovimentacao, $nomeTipoMovimentacao){
		
			$this->codigoTipoMovimentacao = $codigoTipoMovimentacao;
			$this->nomeTipoMovimentacao   = $nomeTipoMovimentacao;
		
		}
		
		//codigoTipoMovimentacao
		
		public function getCodigoTipoMovimentacao(){
		
			return $this->codigoTipoMovimentacao;
		
		}
		
		public function setCodigoTipoMovimentacao($codigoTipoMovimentacao){
		
			$this->codigoTipoMovimentacao = $codigoTipoMovimentacao;
		
		}
		
		//nomeTipoMovimentacao
		
		public function getNomeTipoMovimentacao(){
		
			return $this->nomeTipoMovimentacao;
		
		}
	
		public function setNomeTipoMovimentacao($nomeTipoMovimentacao){
		
			$this->nomeTipoMovimentacao = $nomeTipoMovimentacao;
		
		}
		
		//incluirMovimentacao
		
		public function incluirTipoMovimentacao(){
		
			$query = "INSERT INTO TiposMovimentacoes(
						codigoTipoMovimentacao,
						nomeTipoMovimentacao)
					VALUES('NULL',
					'" . $this->getNomeTipoMovimentacao() . "');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarTipoMovimentacao
		
		public function alterarTipoMovimentacao(){
		
			// altera o valor dos atributos da unidade no banco atraves de sql embutido
			$query = "UPDATE TiposMovimentacoes
					SET nomeTipoMovimentacao = '" . $this->getNomeTipoMovimentacao() . "' 
					WHERE codigoTipoMovimentacao = '" . $this->getCodigoTipoMovimentacao() ."';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirTipoMovimentacao
		
		public function excluirTipoMovimentacao($codigoTipoMovimentacao){
		
			//exclui o registro do banco pelo sql embutido
			$query = "DELETE FROM TiposMovimentacoes
					WHERE codigoTipoMovimentacao = '" . $codigoTipoMovimentacao . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarTipoMovimentacao
		
		public function listarTipoMovimentacao(){
		
			//lista as OM do banco atraves de sql embutido
			$query = "SELECT *
					FROM TiposMovimentacoes
					ORDER BY nomeTipoMovimentacao";

			$res 	= mysql_query($query) or die(mysql_error()); 

			$nr = (int)mysql_num_rows($res);
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<table border=\"5\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"4\" align=\"center\">Tipos de OM</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Nome</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr>";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">". $array['codigoTipoMovimentacao'] ."</td>";
				echo	"<td><b>".				$array['nomeTipoMovimentacao'] ."</b></td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=TiposMovimentacoes-P.php?acao=1&chave=". $array['codigoTipoMovimentacao'] ."><img src=\"./imagens/editar.bmp\"  title=\"Alterar registro\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=TiposMovimentacoes-P.php?acao=2&chave=". $array['codigoTipoMovimentacao'] ."><img src=\"./imagens/excluir.bmp\"  title=\"Excluir registro\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
			echo "</div>";
		
			//voltar
			echo "<td align=\"center\"><a href=\"Menu.php?pag=TiposMovimentacoes-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
		
		}
		
		public function localizarTipoMovimentacao($codigoTipoMovimentacao){
		
			$query = "SELECT codigoTipoMovimentacao, nomeTipoMovimentacao
					FROM TiposMovimentacoes
					WHERE codigoTipoMovimentacao =" . $codigoTipoMovimentacao;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoTipoMovimentacao($row[0]);
			$this-> setNomeTipoMovimentacao($row[1]);
			
		}
		
	}

?>