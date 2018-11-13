<?php require_once("../config.php") ?>
<?php
	session_start(); # Precisa disso pra desativar a variável de sessão?
	
	if(isset($_SESSION["cod"])) { 
		unset($_SESSION["cod"]); 
	}
	if(isset($_SESSION["usuario_logado"])) {
		unset($_SESSION["usuario_logado"]); 
	}
	if(isset($_SESSION["usuario"])) {
		unset($_SESSION["usuario"]); 
	}
	if(isset($_SESSION["login"])) {
		unset($_SESSION["login"]); 
	}

	session_destroy();
	if(isset($_GET["del"])and $_GET["del"] == 1){
		header("Location:".LOCALPATH."index.php?del_success=1");
	}else{
		header("Location:".LOCALPATH."index.php");
	}