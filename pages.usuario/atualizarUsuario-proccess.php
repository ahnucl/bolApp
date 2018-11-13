<?php require_once("../config.php") ?>
<?php require_once(ROOT."util/function.php") ?>
<?php require_once(ROOT."util/conexao.php") ?>
<?php
	
	session_start();

	# Verifica se login e nome são nulos
	if ((!isset($_POST["nome"]))or(empty($_POST["nome"])) or
		(!isset($_POST["login"]))or(empty($_POST["login"])) 
		) {
		header("Location:verUsuario.php?erro=5");
	} else {

		# Verifica se ambos os campos de senha foram preenchidos
		if ((isset($_POST["senha_old"]) and !empty($_POST["senha_old"])) and
			(isset($_POST["senha_new"]) and !empty($_POST["senha_new"]))
	    	) {
			
			$u = consultarJogador($connection, $_SESSION["cod"]);

			if($_POST["senha_old"] != $u["senha"]) {
				header("Location:verUsuario.php?erro=1"); # Senha antiga digitada errada
			} else {

				$nome = $_POST["nome"];
				$login = $_POST["login"];
				$senha = $_POST["senha_new"];
				$cod = $_SESSION["cod"];
				$endereco = $_POST["endereco"]; 
				$email = $_POST["email"];
				$telefone = $_POST["telefone"];

				if(atualizarJogador($connection, $cod, $nome, $login, $endereco, $email, $telefone, $senha) != null) {
					
					$_SESSION["usuario"] = limitarTexto($nome);
					$_SESSION["login"] = $login;

					header("Location:verUsuario.php?success");	
				
				} else { 
					$u = consultarLogin($connection, $login);
					if(($u != null) and ($u["cod"]!=$cod)) {
						header("Location:verUsuario.php?erro=4"); # tentando mudar login pra um que já existe
					} else {
						header("Location:verUsuario.php?erro=2"); # atualização deu errado
					}
				}
			}
		} else { # Verifica se apenas um dos campos de senha foi preenchido
			if ((isset($_POST["senha_old"]) and !empty($_POST["senha_old"])) xor
				(isset($_POST["senha_new"]) and !empty($_POST["senha_new"]))
	    		) {

				header("Location:verUsuario.php?erro=3"); # erro de apenas uma senha preenchida

			} else {

				$nome = $_POST["nome"];
				$login = $_POST["login"];
				$cod = $_SESSION["cod"];		
				$endereco = $_POST["endereco"]; 
				$email = $_POST["email"];
				$telefone = $_POST["telefone"];

				if(atualizarJogador($connection, $cod, $nome, $login, $endereco, $email, $telefone) != null) {
					
					$_SESSION["usuario"] = limitarTexto($nome);
					$_SESSION["login"] = $login;

					header("Location:verUsuario.php?success");	
				
				} else { 
					$u = consultarLogin($connection, $login);
					if(($u != null) and ($u["cod"]!=$cod)) {
						header("Location:verUsuario.php?erro=4"); # tentando mudar login pra um que já existe
					} else {
						header("Location:verUsuario.php?erro=2"); # atualização deu errado
					}
				}
			}
		}
	}