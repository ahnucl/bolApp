<?php require_once("../config.php") ?>
<?php require_once(ROOT."util/verificaSessao.php"); ?>
<?php require_once(ROOT."util/conexao.php"); ?>
<?php require_once(ROOT."util/function.php");  ?>
<?php  	
  	// Passar o ID por meio da sessao
  	
	if( deletarJogador($connection,$_SESSION['cod']) == 1) {
		header("Location:".LOCALPATH."pages.usuario/logout-proccess.php?del=1");
	} else {
		header("Location: verUsuario.php?erro=6");
	}

