<?php

	class Movimentacoes{
	
		private $codigoMovimentacao;
		private $numeroSerieArma;
		private $numeroSerieMunicao;
		private $nomeAcessorio;
		private $nomeMilitar;
		private $dataHoraMovimentacao;
		private $observacaoMovimentacao;
		private $tipoMovimentacao;
		private $militarEntregaMovimentacao;
		private $dataHoraDevolucaoMovimentacao;
		private $militarDevolveMovimentacao;
		
		public function __construct($codigoMovimentacao, $numeroSerieArma, $numeroSerieMunicao, $nomeAcessorio, $nomeMilitar, $dataHoraMovimentacao, $observacaoMovimentacao, $tipoMovimentacao, $militarEntregaMovimentacao){
		
			$this->codigoMovimentacao         = $codigoMovimentacao;
			$this->numeroSerieArma            = $numeroSerieArma;
			$this->numeroSerieMunicao         = $numeroSerieMunicao;
			$this->nomeAcessorio              = $nomeAcessorio;
			$this->nomeMilitar                = $nomeMilitar;
			$this->dataHoraMovimentacao       = $dataHoraMovimentacao;
			$this->observacaoMovimentacao     = $observacaoMovimentacao;
			$this->tipoMovimentacao           = $tipoMovimentacao;
			$this->militarEntregaMovimentacao = $militarEntregaMovimentacao;
			
		}
		
		//codigoMovimentacao
		
		public function getCodigoMovimentacao(){
		
			return $this->codigoMovimentacao;
		
		}
		
		public function setCodigoMovimentacao($codigoMovimentacao){
		
			$this->codigoMovimentacao = $codigoMovimentacao;
		
		}
		
		//dataHoraMovimentacao
		
		public function getDataHoraMovimentacao(){
		
			return $this->dataHoraMovimentacao;
		
		}
	
		public function setDataHoraMovimentacao($dataHoraMovimentacao){
		
			$this->dataHoraMovimentacao = $dataHoraMovimentacao;
		
		}
		
		//dataHoraDevolucaoMovimentacao
		
		public function getDataHoraDevolucaoMovimentacao(){
		
			return $this->dataHoraDevolucaoMovimentacao;
		
		}
	
		public function setDataHoraDevolucaoMovimentacao($dataHoraDevolucaoMovimentacao){
		
			$this->dataHoraDevolucaoMovimentacao = $dataHoraDevolucaoMovimentacao;
		
		}
		
		//numeroSerieMunicao
		
		public function getCodigoMunicao(){
		
			$query = "SELECT codigoMunicao 
					  FROM Municoes
					  WHERE codigoMunicao=". $this->numeroSerieMunicao;
					  
		}
		
		
		public function setCodigoMunicao($numeroSerieMunicao){
		
			$this-> numeroSerieMunicao = $numeroSerieMunicao;
		
		}
		
		//listarNumeroSerieMunicao - FK
		public function listarMunicao(){
		
			$query = "SELECT *
					FROM Municoes
					ORDER BY numeroSerieMunicao";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"numeroSerieMunicao\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
					
				echo "<option value=\" " .$array['codigoMunicao']. " \"";
				
				if( $array['codigoMunicao'] == $this->numeroSerieMunicao) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['numeroSerieMunicao']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//nomeAcessorio
		
		public function getCodigoAcessorio(){
		
			"SELECT codigoAcessorio
			FROM Acessorios
			WHERE codigoAcessorio=". $this->nomeAcessorio;
		
		}
		public function setCodigoAcessorio($nomeAcessorio){
		
			$this-> nomeAcessorio = $nomeAcessorio;
		
		}
		
		//nomeAcessorio - FK
		public function listarAcessorio(){
		
			$query = "SELECT *
					FROM Acessorios
					ORDER BY nomeAcessorio";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"nomeAcessorio\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
					
				echo "<option value=\" " .$array['codigoAcessorio']. " \"";
				
				if( $array['codigoAcessorio'] == $this->nomeAcessorio) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['nomeAcessorio']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//nomeMilitar
		
		public function getCodigoMilitar(){
		
			"SELECT codigoMilitar
			FROM Militares
			WHERE codigoMilitar=". $this->nomeMilitar;
		
		}
		public function setCodigoMilitar($nomeMilitar){
		
			$this-> nomeMilitar = $nomeMilitar;
		
		}
		
		//nomeMilitar - FK
		public function listarMilitar(){
		
			$query = "SELECT *
					FROM Militares
					ORDER BY nomeMilitar";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"nomeMilitar\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
				//mostrar todos os itens cadastrados no banco de dados
					
				echo "<option value=\" " .$array['codigoMilitar']. " \"";
				
				if( $array['codigoMilitar'] == $this->nomeMilitar) {
					
					echo "selected=\"selected\"";
				}
				
				echo ">" .$array['nomeMilitar']. "</option>";
				
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//numeroSerieArma
		
		public function getCodigoArma(){
		
			"SELECT codigoArma
			FROM Armas
			WHERE codigoArma=". $this->numeroSerieArma;
		
		}
		public function setCodigoArma($numeroSerieArma){
		
			$this-> numeroSerieArma = $numeroSerieArma;
		
		}
		
		//numeroSerieArma - FK
		public function listarArma(){
		
			$query = "SELECT *
					FROM Armas
					ORDER BY numeroSerieArma";
					
			$res 	= mysql_query($query) or die(mysql_error());
		
			echo "<td>";
			
			echo "<select name=\"numeroSerieArma\" size=\"1\">"; // inicio do select 
			
			echo "<option value=\"0\"> Selecione </option>";
			
			while($array = mysql_fetch_array($res)) {
			
				$query2 = "SELECT tipoMovimentacao
						   FROM Movimentacoes
						   WHERE codigoArma = ".$array['codigoArma'];
				
				$res2 = mysql_query($query2) or die(mysql_error());
				
				$nr = mysql_num_rows($res2);
				
				if($nr != 0){
				
					while($array2 = mysql_fetch_array($res2)) {
						if($array2['tipoMovimentacao'] == 0){
							$controle = 1;
						}
					}
				}
			
				//mostrar todos os itens cadastrados no banco de dados
				
				if($controle != 1){
					echo "<option value=\" " .$array['codigoArma']. " \"";
					
					if( $array['codigoArma'] == $this->numeroSerieArma) {
						
						echo "selected=\"selected\"";
					}
					
					echo ">" .$array['numeroSerieArma']. "</option>";
				}
			}
			
			echo "</select>"; //final do select 			
		
			echo "</td>";
		
		}
		
		//observacaoMovimentacao
		
		public function getObservacaoMovimentacao(){
		
			return $this->observacaoMovimentacao;
		
		}
		public function setObservacaoMovimentacao($observacaoMovimentacao){
		
			$this-> observacaoMovimentacao = $observacaoMovimentacao;
		
		}
		
		//tipoMovimentacao
		
		public function getTipoMovimentacao(){
		
			return $this->tipoMovimentacao;
		
		}
		public function setTipoMovimentacao($tipoMovimentacao){
		
			$this-> tipoMovimentacao = $tipoMovimentacao;
		
		}
		
		//militarEntregaMovimentacao
		
		public function getMilitarEntregaMovimentacao(){
		
			return $this->militarEntregaMovimentacao;
		
		}
		public function setMilitarEntregaMovimentacao($militarEntregaMovimentacao){
		
			$this-> militarEntregaMovimentacao = $militarEntregaMovimentacao;
		
		}
		
		//militarDevolveMovimentacao
		
		public function getMilitarDevolveMovimentacao(){
		
			return $this->militarDevolveMovimentacao;
		
		}
		public function setMilitarDevolveMovimentacao($militarDevolveMovimentacao){
		
			$this-> militarDevolveMovimentacao = $militarDevolveMovimentacao;
		
		}
		
		//incluirMovimentacao
		
		public function incluirMovimentacao(){
		
			$query = "INSERT INTO Movimentacoes(
						codigoMovimentacao,
						codigoArma,
						codigoMunicao,
						codigoAcessorio,
						codigoMilitar,
						dataHoraMovimentacao,
						observacaoMovimentacao,
						tipoMovimentacao,
						militarEntregaMovimentacao)
					VALUES('NULL',
					'".$this->numeroSerieArma."',
					'".$this->numeroSerieMunicao."',
					'".$this->nomeAcessorio."',
					'".$this->nomeMilitar."',
					'".$this->getDataHoraMovimentacao()."',
					'".$this->getObservacaoMovimentacao()."',
					'".$this->getTipoMovimentacao()."',
					'".$this->getMilitarEntregaMovimentacao()."');";
					
			// echo $query;
			
			mysql_query($query) or die(mysql_error());
		
		}
		
		//listarMovimentacao
		
		public function listarMovimentacao(){
		
			//lista as movimentacoes do banco atraves de sql embutido
			$query = "SELECT MO.codigoMovimentacao, MU.codigoMunicao, MU.numeroSerieMunicao, AC.codigoAcessorio, AC.nomeAcessorio, MI.codigoMilitar, MI.nomeMilitar, AR.codigoArma, AR.numeroSerieArma, MO.dataHoraMovimentacao, MO.observacaoMovimentacao, MO.tipoMovimentacao, MO.militarEntregaMovimentacao
					FROM Movimentacoes MO
					INNER JOIN Municoes MU ON MU.codigoMunicao = MO.codigoMunicao
					INNER JOIN Acessorios AC ON AC.codigoAcessorio = MO.codigoAcessorio
					INNER JOIN Militares MI ON MI.codigoMilitar = MO.codigoMilitar
					INNER JOIN Armas AR ON AR.codigoArma = MO.codigoArma
					ORDER BY codigoMovimentacao";

			$res 	= mysql_query($query) or die(mysql_error()); 
			
			//monta uma tabela com os valores retornados do result set
			
			echo "<div id=\"cont\">";
			echo "<center>";
			echo "<table border=\"0\" align=\"center\" cellpading=\"5px\" cellspacing=\"5px\" width=\"auto\">";
			echo "	<tr><th colspan=\"8\" align=\"center\"> ORGANIZA&Ccedil;&Otilde;ES MILITARES</th></tr>";
			echo "	<tr><th>C&oacute;digo</th><th>Muni&ccedil;&atilde;o</th><th>Acess&oacute;rio</th><th>Militar</th><th>Arma</th><th>Data e Hora</th><th>Armeiro</th><th>Observa&ccedil;&atilde;o</th><th>Movimento</th>";
			
			while($array = mysql_fetch_array($res)){
			
				echo "<tr class=\"tabela\">";
				
				//parte dinamica do código, onde é inserido os valores individuais de cada registro, pelo nome do atributo da tabela
				echo	"<td align=\"center\">".    $array['codigoMovimentacao'] 			. "</td>";
				echo	"<td align=\"center\">".    $array['numeroSerieMunicao'] 			. "</td>";
				echo	"<td align=\"center\">".    $array['nomeAcessorio'] 				. "</td>";
				echo	"<td align=\"center\">".    $array['nomeMilitar'] 					. "</td>";
				echo	"<td align=\"center\">".    $array['numeroSerieArma'] 				. "</td>";
				echo	"<td align=\"center\">".    $array['dataHoraMovimentacao'] 			. "</td>";
				echo    "<td align=\"center\">".    $array['militarEntregaMovimentacao']	. "</td>";
				echo	"<td align=\"center\">".    $array['observacaoMovimentacao'] 		. "</td>";
				
				if ($array['tipoMovimentacao'] == 0) {
				
					echo "<td align=\"center\"><a href=\"Movimentacoes-P.php?acao=1&codigo=".$array['codigoMovimentacao']."\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				
				}else{
				
					echo "<td>Devolvido</td>";
				
				}
				
				
				echo "</tr>";
			}		
			
				echo "</table>";
				
				//voltar
				echo "<td align=\"center\"><a href=\"Menu.php?pag=Movimentacoes-F\"> <img src=\"./imagens/voltar.bmp\"  title=\"Voltar\"             align=\"center\" height=\"16\" width=\"16\" border=\"0\"/></a></td>";
				echo "</center>";
				
			echo "</div>";
		
			
		
		}
		
		public function localizarMovimentacao($codigoMovimentacao){
		
			$query = "SELECT codigoMovimentacao, codigoMunicao, numeroSerieMunicao, codigoAcessorio, nomeAcessorio, codigoMilitar, nomeMilitar, codigoArma, numeroSerieArma, dataHoraMovimentacao, observacaoMovimentacao, tipoMovimentacao, militarEntregaMovimentacao
					FROM Movimentacoes
					WHERE codigoMovimentacao =" . $codigoMovimentacao;
			
			// echo $query;
			
			$res	= mysql_query($query) or die(mysql_error());
			$row 	= mysql_fetch_row($res);

			$this-> setCodigoMovimentacao($row[0]);
			$this-> setNumeroSerieMunicao($row[1]);
			$this-> setNomeAcessorio($row[2]);
			$this-> setNomeMilitar($row[3]);
			$this-> setNumeroSerieArma($row[4]);
			$this-> setDataHoraMovimentacao($row[5]);
			$this-> setObservacaoMovimentacao($row[6]);
			$this-> setTipoMovimentacao($row[7]);
			$this-> setMilitarEntregaMovimentacao($row[8]);
			
		}
		
	}

?>