<?php

	class Militares{
	
		private $codigoMilitar;
		private $nomePelotao;
		private $nomeGraduacao;
		private $nomeMilitar;
		private $armeiroMilitar;
		private $usuarioArmeiroMilitar;
		private $senhaArmeiroMilitar;
		
		public function __construct($codigoMilitar, $nomePelotao, $nomeGraduacao, $nomeMilitar, $armeiroMilitar, $usuarioArmeiroMilitar, $senhaArmeiroMilitar){
		
			$this->codigoMilitar         = $codigoMilitar;
			$this->nomePelotao           = $nomePelotao;
			$this->nomeGraduacao         = $nomeGraduacao;
			$this->nomeMilitar           = $nomeMilitar;
			$this->armeiroMilitar        = $armeiroMilitar;
			$this->usuarioArmeiroMilitar = $usuarioArmeiroMilitar;
			$this->senhaArmeiroMilitar   = $senhaArmeiroMilitar;
		
		}
		
		//codigoMilitar
		
		public function getCodigoMilitar(){
		
			return $this->codigoMilitar;
		
		}
		
		public function setCodigoMilitar($codigoMilitar){
		
			$this->codigoMilitar = $codigoMilitar;
		
		}
		
		//nomePelotao
		
		public function getNomePelotao(){
		
			"SELECT codigoPelotao
			FROM Pelotoes
			WHERE codigoPelotao =". $this-> nomePelotao;
		
		}
		
		public function setNomePelotao($nomePelotao){
		
			$this->nomePelotao = $nomePelotao;
		
		}
		
		//nomeGraduacao
		
		public function getNomeGraduacao(){
		
			"SELECT codigoGraduacao
			FROM Graduacoes
			WHERE codigoGraduacao =". $this-> nomeGraduacao;
		
		}
		
		public function setNomeGraduacao($nomeGraduacao){
		
			$this->nomeGraduacao = $nomeGraduacao;
		
		}
		
		//nomeMilitar
		
		public function getNomeMilitar(){
		
			return $this->nomeMilitar;
		
		}
		
		public function setNomeMilitar($nomeMilitar){
		
			$this->nomeMilitar = $nomeMilitar;
		
		}
		
		//armeiroMilitar
		
		public function getArmeiroMilitar(){
		
			return $this->armeiroMilitar;
		
		}
		
		public function setArmeiroMilitar($armeiroMilitar){
		
			$this->armeiroMilitar = $armeiroMilitar;
		
		}
		
		//usuarioArmeiroMilitar
		
		public function getUsuarioArmeiroMilitar(){
		
			return $this->usuarioArmeiroMilitar;
		
		}
		
		public function setUsuarioArmeiroMilitar($usuarioArmeiroMilitar){
		
			$this->usuarioArmeiroMilitar = $usuarioArmeiroMilitar;
		
		}
		
		//senhaArmeiroMilitar
		
		public function getSenhaArmeiroMilitar(){
		
			return $this->senhaArmeiroMilitar;
		
		}
		
		public function setSenhaArmeiroMilitar($senhaArmeiroMilitar){
		
			$this->senhaArmeiroMilitar = $senhaArmeiroMilitar;
		
		}
		
		//listarPelotao - FK
		public function listarPelotao(){
		
			$query = "SELECT *
					FROM Pelotoes
					ORDER BY nomePelotao";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"nomePelotao\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
				echo "<option value=\" " .$array['codigoPelotao']. " \"";
				
				if( $array['codigoPelotao'] == $this->nomePelotao) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['nomePelotao']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//listarGraduacao - FK
		public function listarGraduacao(){
		
			$query = "SELECT *
					FROM Graduacoes
					ORDER BY nomeGraduacao";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"nomeGraduacao\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
				echo "<option value=\" " .$array['codigoGraduacao']. " \"";
				
				if( $array['codigoGraduacao'] == $this->nomeGraduacao) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['nomeGraduacao']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//incluirMilitar
		
		public function incluirMilitar(){
		
			$query = "INSERT INTO Militares(
						codigoMilitar,
						codigoPelotao,
						codigoGraduacao,
						nomeMilitar,
						armeiroMilitar,
						usuarioArmeiroMilitar,
						senhaArmeiroMilitar)
					VALUES('NULL',
					'".$this->nomePelotao."',
					'".$this->nomeGraduacao."',
					'".$this->getNomeMilitar()."',
					'".$this->getArmeiroMilitar()."',
					'".$this->getUsuarioArmeiroMilitar()."',
					'".$this->getSenhaArmeiroMilitar()."');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//alterarMilitar
		
		public function alterarMilitar(){
		
			// altera o valor dos atributos no banco atraves de sql embutido
			$query = "UPDATE Militares
					SET nomeMilitar = '" . $this->getNomeMilitar() . "',
					armeiroMilitar = '" . $this->getArmeiroMilitar() . "',
					usuarioArmeiroMilitar = '" . $this->getUsuarioArmeiroMilitar() . "',
					senhaArmeiroMilitar = '" . $this->getSenhaArmeiroMilitar() . "',
					codigoPelotao = '".$this->nomePelotao."',
					codigoGraduacao = '".$this->nomeGraduacao."' ".
					"WHERE codigoMilitar = " . $this->getCodigoMilitar();
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//excluirMilitar
		
		public function excluirMilitar($codigoMilitar){
		
			//exclui o registro do banco pelo sql embutido
			$query = "DELETE FROM Militares
					WHERE codigoMilitar = '" . $codigoMilitar . "';";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarMilitar
		
		public function listarMilitar(){
		
			//lista os militares do banco atraves de sql embutido
			$query = "SELECT M.codigoMilitar, M.nomeMilitar, M.armeiroMilitar, M.usuarioArmeiroMilitar, M.senhaArmeiroMilitar, P.codigoPelotao, P.nomePelotao, G.codigoGraduacao, G.nomeGraduacao
					FROM Militares M
					INNER JOIN Pelotoes P ON P.codigoPelotao = M.codigoPelotao
					INNER JOIN Graduacoes G ON G.codigoGraduacao = M.codigoGraduacao
					ORDER BY nomePelotao, nomeGraduacao";

			$res 	= mysql_query($query) or die(mysql_error()); 
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"8\" align=\"center\">MILITARES</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Pelot&atilde;o</th><th>Gradua&ccedil;&atilde;o</th><th>Nome</th><th>Armeiro</th><th>Usuario</th><th colspan=\"2\">Op&ccedil;&otilde;es</th></tr>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">". $array['codigoMilitar'] ."</td>";
				echo	"<td align=\"center\">". $array['nomePelotao'] ."</td>";
				echo	"<td align=\"center\">". $array['nomeGraduacao'] ."</td>";
				echo	"<td align=\"center\">". $array['nomeMilitar'] ."</td>";
				echo    "<td align=\"center\">";
				
				if ($array['armeiroMilitar'] == 0){
				
					echo "Sim";
				
				}else{
				
					echo "Nao";
				
				}
				echo "</td>";
				echo	"<td align=\"center\">". $array['usuarioArmeiroMilitar'] ."</td>";
				
				//alterar
				echo	"<td align=\"center\"><a href=Menu.php?pag=Militares-A&chave=". $array['codigoMilitar'] ."><img src=\"./imagens/editar.png\"  title=\"Alterar registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				//excluir
				echo	"<td align=\"center\"><a href=Militares-P.php?acao=1&chave=". $array['codigoMilitar'] ."><img src=\"./imagens/excluir.png\"  title=\"Excluir registro\" align=\"center\" height=\"30\" width=\"30\" border=\"0\"/></a></td>";
				
				echo "</tr>";
			}		
			
				echo "</table>";
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Militares-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
			echo "</div>";
		
		}
		
		public function localizarMilitar($codigoMilitar){
		
			$query = "SELECT codigoMilitar, codigoPelotao, codigoGraduacao, nomeMilitar, armeiroMilitar, usuarioArmeiroMilitar, senhaArmeiroMilitar
					FROM Militares
					WHERE codigoMilitar =" . $codigoMilitar;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoMilitar($row[0]);
			$this-> setNomePelotao($row[1]);
			$this-> setNomeGraduacao($row[2]);
			$this-> setNomeMilitar($row[3]);
			$this-> setArmeiroMilitar($row[4]);
			$this-> setUsuarioArmeiroMilitar($row[5]);
			$this-> setSenhaArmeiroMilitar($row[6]);
			
		}
		
	}

?>