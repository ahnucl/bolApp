<?php

	function limitarTexto($str){ # selecionar o primeiro do usuario logado
	  $nome = strstr($str, ' ', true);
	  if($nome == NULL){
		$resul = $str;
	  }else{
		$resul = $nome;  
	  }
	  return $resul;
	}
	
	function cadastrarJogador($con, $nome, $login, $senha){
		$sql = "insert into jogador(nome, login, senha)
				values ('$nome', '$login', '$senha')";
		return mysqli_query($con, $sql);
	}

	function consultarJogador($con, $cod) {
		$sql = "select * from jogador where cod = '$cod';" ;
		$r = mysqli_query($con, $sql);
		return mysqli_fetch_assoc($r); 
	}
	
	function deletarJogador($con, $cod){
		$sql = "DELETE FROM jogador where cod = '$cod';" ;
		$r = mysqli_query($con, $sql);
		return $r; 
	}
	
	function listarJogador($con, $cod) { # Todos os jogadores menos o que está logado
		$sql = "select nome, cod from jogador where cod != $cod" ;
		$r = mysqli_query($con, $sql); ?>
		<table class="table table-hover table-light">
			  <thead align="center">
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Nome</th>
				  <th scope="col">Visualizar perfil</th>
				</tr>
			  </thead>
			  
		
		<?php
		while($array=mysqli_fetch_assoc($r)) { ?>
		<tbody align="center">
				<tr>
				  <th><i class="fa fa-user-circle" style="font-size: 45px;" aria-hidden="true"></i></th>
				  <td><?= $array['nome'] ?></td>
				  <td><a href="verUsuario.php?cod=<?=$array['cod']?>" ><i class="fa fa-eye" style="font-size: 45px;" aria-hidden="true"></i></td>
				</tr>
	<?php }?>
		</table>
	<?php
	} 
	
	function loginJogador($con, $login, $senha){
		$sql = "select cod, nome from jogador where login = '$login' and senha = '$senha';" ;
		$r = mysqli_query($con, $sql);
		return mysqli_fetch_assoc($r); 
	}
	
	function atualizarJogador($con, $cod, $nome, $login, $endereco, $email, $telefone, $senha = null){
		if($senha != null){
			$sql = "update jogador 
					set nome = '$nome',
						login = '$login',
						senha = '$senha',
						endereco = ";
	
			$endereco == null ? $sql = $sql."null" : $sql = $sql."'$endereco'";
	
			$sql = $sql.", email = ";
			$email == null ? $sql = $sql."null" : $sql = $sql."'$email'";
	
			$sql = $sql.", telefone = ";
			$telefone == null ? $sql = $sql."null" : $sql = $sql."'$telefone'";
	
			$sql = $sql." where cod = $cod;";
		} else {
			$sql = "update jogador 
					set nome = '$nome',
						login = '$login',
						endereco = ";
	
			$endereco == null ? $sql = $sql."null" : $sql = $sql."'$endereco'";
	
			$sql = $sql.", email = ";
			$email == null ? $sql = $sql."null" : $sql = $sql."'$email'";
	
			$sql = $sql.", telefone = ";
			$telefone == null ? $sql = $sql."null" : $sql = $sql."'$telefone'";
	
			$sql = $sql." where cod = $cod;";
		}
		/*
		print_r($sql);
		die(); 
		*/
		return mysqli_query($con, $sql);
	}

	function consultarLogin($con, $login){
		$sql = "select cod, nome, login from jogador where login like '$login';";
		$r = mysqli_query($con, $sql);
		return mysqli_fetch_assoc($r);
	}