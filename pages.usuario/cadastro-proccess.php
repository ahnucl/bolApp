<?php require_once("../config.php") ?>
<?php require_once(ROOT."util/function.php") ?>
<?php 
	if ((!isset($_POST["nome"]) or empty($_POST["nome"])) or
 	    (!isset($_POST["login"]) or empty($_POST["login"])) or
    	(!isset($_POST["senha"]) or empty($_POST["senha"]))
	  	) {
		
		header("Location:".LOCALPATH."index.php?erro_cad=1");
	
	} else {

		require_once("../util/conexao.php");
	
		$nome  = $_POST["nome"];
		$senha = $_POST["senha"];
		$login = $_POST["login"];

		if(cadastrarJogador($connection, $nome, $login, $senha) == null ){
			header("Location:".LOCALPATH."index.php?erro_cad=2");		

		} else {

			session_start();

			# $novo = consultarJogador($connection, mysqli_insert_id($connection)); # não é necessário
			#$_SESSION["usuario_logado"] = $nome;
			$_SESSION["usuario"] = limitarTexto($nome);
			$_SESSION["cod"] = mysqli_insert_id($connection);
			#$_SESSION["login"]=$login;
			
			header("Location:".LOCALPATH."pages.home/home.php");
		}
	}