<!-- INICIO DO MENU -->
  <nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top pr-4">	
		<a class="navbar-brand" href="<?=LOCALPATH.'pages.home/home.php'?>">BolApp <img alt="Brand" class="img-responsive" src="../image/icone.png"></a>		
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav mr-auto">
					
			  </ul>
		
		
			<div class="btn-group pr-2" role="group" >
			  <button id="btnGroupDrop1" type="button" class="btn btn-outline-success my-sm-0 dropdown-toggle" style="min-width:110px;" data-toggle="dropdown" >
			   <i class="fa fa-users pr-2" style="font-size: 20px;" aria-hidden="true"></i>Partidas
			  </button>
			  <div class="dropdown-menu dropdown-menu-right "  aria-labelledby="btnGroupDrop1">
				<a class="dropdown-item" href="#"><i class="fa fa-list pr-2"></i>Minhas partidas</a>
				<a class="dropdown-item" href="#"><i class="fa fa-plus pr-2"></i>Criar partida</a>
			  </div>
			</div>
			
			<div class="btn-group pr-2" role="group" >
			  <button id="btnGroupDrop1" type="button" class="btn btn-outline-success my-sm-0 dropdown-toggle" style="min-width:110px;" data-toggle="dropdown" >
			   <i class="fas fa-shield-alt pr-2" style="font-size: 20px;" aria-hidden="true"></i>Times
			  </button>
			  <div class="dropdown-menu dropdown-menu-right "  aria-labelledby="btnGroupDrop1">
				<a class="dropdown-item" href="#"><i class="fa fa-list pr-2"></i>Meus Times</a>
				<a class="dropdown-item" href="#"><i class="fa fa-plus pr-2"></i>Novo time</a>
			  </div>
			</div>
			
			<div class="btn-group pr-2" role="group">
				<a href="<?= LOCALPATH."pages.usuario/listarUsuario.php"?>" class="btn float-right btn-outline-success my-sm-0" role="button" aria-pressed="true"><i class="fas fa-list-ul pr-2"></i>Listar Jogadores</a>
			</div>
			
			<div class="btn-group pr-0" role="group" >
			  <button id="btnGroupDrop1" type="button" class="btn btn-outline-success my-sm-0 dropdown-toggle" style="min-width:110px;" data-toggle="dropdown" >
			   <i class="fa fa-user pr-2" style="font-size: 20px;" aria-hidden="true"></i><?=$_SESSION["usuario"]?>
			  </button>
			  <div class="dropdown-menu dropdown-menu-right "  aria-labelledby="btnGroupDrop1">
				<a class="dropdown-item" href="<?= LOCALPATH."pages.usuario/verUsuario.php" ?>"><i class="fas fa-user-edit pr-2"></i>Editar perfil</a>
				<a class="dropdown-item" onclick="return confirm('Tem certeza que deseja sair?')" href="<?= LOCALPATH.'pages.usuario/logout-proccess.php' ?>"><i class="fas fa-sign-out-alt pr-2"></i>Sair</a>
			  </div>
			</div>
		</div>
      </nav>