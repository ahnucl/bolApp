<?php require_once("../config.php") ?>
<?php require_once(ROOT."util/function.php") ?>
<?php
	if ((!isset($_POST["login"]) or empty($_POST["login"])) or
    	(!isset($_POST["senha"]) or empty($_POST["senha"]))
    	) {
		
		header("Location:".LOCALPATH."index.php?erro_login=1");
		#echo "teste".$_POST["senha"]." ".$_POST["login"] ;
	} else {

		require_once(ROOT."util/conexao.php");
		
		$senha = $_POST["senha"];
		$login = $_POST["login"];
		$sucesso = loginJogador($connection, $login, $senha); #se deu certo, retorna um objeto mysqli
		if( $sucesso == null ){
			header("Location:".LOCALPATH."index.php?erro_login=2");		
		} else {

			session_start();

			#$_SESSION["usuario_logado"] = $sucesso["nome"];
			$_SESSION["usuario"] = limitarTexto($sucesso["nome"]);
			$_SESSION["cod"] = $sucesso["cod"];
			#$_SESSION["login"] = $login;

			#print_r($_SESSION);
			header("Location:".LOCALPATH."pages.home/home.php");
		} 
	}