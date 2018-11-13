<?php
    $address = "localhost";
    $user	 = "root"; 
    #pw 	 = "system";
    $pw 	 = "";
    $db 	 = "bd_proj_intr_2018_bolapp"; 
    	
     $connection = mysqli_connect($address, $user,$pw,$db);
     if(mysqli_connect_error()){ 
 		echo "<br><h1>Sem conexão com a base de dados.</h1>"; 
 		echo "<a href=index.php>Voltar</a>";
 		die(); }
	# para teste
    # print_r($connection = mysqli_connect($address, $user,$pw,$db));


    #mysqli_set_charset($conexao, "utf8");