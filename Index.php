<?php ob_start();

/*=============================================================
programa: Index.php
função: verificar o acesso ao sistema, validando usuario e senha
data: 28/05/2013
autor: Anderson Lucas Farias Muniz
Docente: Alexandre Faccioni Barcellos
=============================================================*/

	include_once("./classes/Conexao.class.php");
	
	//Atribui usuário e senha as variaveis e retira possiveis codigos maliciosos.
	$username = addslashes(htmlentities($_POST['usuarioArmeiroMilitar']));
	$password = addslashes(htmlentities($_POST['senhaArmeiroMilitar']));
	
	$con = new Conexao();
	
    $query 	= "	SELECT 	M.codigoMilitar, M.nomeMilitar, M.usuarioArmeiroMilitar, M.senhaArmeiroMilitar, G.nomeGraduacao
				FROM 	Militares M		
				INNER JOIN Graduacoes G ON G.codigoGraduacao = M.codigoGraduacao
				WHERE 	M.usuarioArmeiroMilitar  	= '$username' AND 
						M.senhaArmeiroMilitar 		= '$password'";
						
	// echo $query;

	$res = mysql_query($query)  or die(mysql_error()); // executa o codigo SQL no banco e retorna um result set que fica armazenado na variavel $res
	
	if(!$res){
		echo "Erro na consulta: " . mysql_error() . "<br>";

	} else {
		$nr = (int)mysql_num_rows($res);

		if($nr === 1){
			
			$row 			= mysql_fetch_row($res);
			$nomeMilitar	= $row[1]; 					// primeira atributo
			$nomeGraduacao	= $row[4]; 					// segundo atributo
			
			session_start(); 							// inicializa sessão

			$_SESSION[nome]      = $nomeMilitar;			// sessões da sessão
			$_SESSION[graduacao] = $nomeGraduacao; 	
			
			header('Location: Menu.php');
			
		} else {
			//Se digitarem usuario errado, sera redirecionado para uma pagina que controla erros			
			
			echo "<script>";
			
			echo "alert(\"Usuário não existe, ou não está cadastrado em nosso sistema!\");";
			echo "window.location = \"Index.html\"; ";
			
			echo "</script>";
			
			exit;
		}
		
	}
?>