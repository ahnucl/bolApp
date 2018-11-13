  <nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top ">
    <a class="navbar-brand" href="index.php">BolApp <img alt="Brand" class="img-responsive" src="image/icone.png"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0 pr-2" method="POST" action="pages.usuario/login-proccess.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Usuário" aria-label="Search" name="login">
          <input class="form-control mr-sm-2" type="password" placeholder="Senha" aria-label="Search" name="senha">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-sign-in-alt pr-2"></i>Login</button>
        </form>
      </div>
    </nav>
      <div class="fixed-top" > 
    <?php if(isset($_GET["erro_login"])) { ?>
          <div class="alert alert-warning alert-dismissible fade show float-right mr-4 " style="width:500px;margin-top:70px;  " role="alert"> 
          <?php if($_GET["erro_login"]==1) { ?>
            Digite seu <strong>login</strong> e <strong>senha</strong>
          <?php } ?>
          <?php if($_GET["erro_login"]==2) { ?>
            <strong>Não</strong> foi possível fazer login. <strong>Verifique</strong> seu login e senha.
          <?php } ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <?php } ?>
		
	<?php if(isset($_GET["del_success"])) { ?>
          <div class="alert alert-success alert-dismissible fade show float-right mr-4 " style="width:500px;margin-top:70px;"role="alert"> 
          <?php switch($_GET["del_success"]) { 
				case 1: 
					echo "Conta <strong>apagada</strong> com sucesso." ;
					break; 
		  
		  } ?>
					
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <?php } ?>

          </div>