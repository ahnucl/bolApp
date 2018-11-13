<?php require_once("config.php") ?>
<?php include_once(ROOT."template.html/begin.php");?>
<?php include_once(ROOT."template.navbar/navbarIndex.php");?>
<?php # Não sei se esse bloco é realmente necessário... 
/*    if (session_status() != PHP_SESSION_NONE) {
      session_destroy();
    }*/ ?>

<style rel="stylesheet">
		body{
			background-image: url(image/bk2.jpg); 
			background-size: cover; 
			background-repeat: no-repeat; 
			max-height: 100vh;
			background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      #flex-direction: row-reverse;
		}
</style>
<!-- <br><br><br><br><br> -->
  <div class="px-3 rounded w-25 py-5 bg-light align-middle" style="min-width: 300px; "  >
    <center> <h2 class="pb-4">Bem-vindo!</h2> </center>
   
    <?php if(isset($_GET["erro_cad"])) { ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <?php if($_GET["erro_cad"]==1) { ?>
        Para se cadastrar preencha <strong>todos</strong> os campos!
      <?php } ?>
      <?php if($_GET["erro_cad"]==2) { ?>
        Esse <strong>login</strong> já está em uso!
      <?php } ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>

    <form class="" action="pages.usuario/cadastro-proccess.php" method="POST">
      <div class="form-group col-9 mx-auto">
        <input style="text-align: center;" type="text" class="form-control" placeholder="Seu nome completo" name="nome">
      </div>
      <div class="form-group col-9 mx-auto">
        <input style="text-align: center;" type="text" class="form-control" placeholder= "Seu login" name="login">
      </div>
      <div class="form-group col-9 mx-auto">
        <input style="text-align: center;" type="password" class="form-control" placeholder="Sua senha" name="senha">
      </div>
      <center>
        <button type="submit" class="btn btn-success" name="cadastrar"><i class="fas fa-user-plus pr-2"></i>Cadastre-se</button>
      </center>      
    </form>

  </div>
<?php include_once(ROOT."template.html/end.php");?>