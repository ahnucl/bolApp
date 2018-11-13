<?php require_once("../config.php") ?>
<?php require_once(ROOT."util/verificaSessao.php") ?>
<?php include_once(ROOT."template.html/begin.php");?>
<?php include_once(ROOT."template.navbar/navbarLogin.php");?>
<?php include_once(ROOT."util/function.php");?>
<?php include_once(ROOT."util/conexao.php");?>

                          <!-- INICIO DA COLUNA DE TORNEIOS E PARTIDAS AMISTOSAS-->
    <div class="container-fluid">
      <div class="row" style="min-height:100vh;">
        <?php include_once(ROOT."template.navbar/sidebar.html");?>
                                <!-- FIM DA COLUNA DE TORNEIOS E PARTIDAS AMISTOSAS-->
                                <!-- INICIO DA PARTE DE IMAGENS E INFORMAÇÕES DE JOGOS-->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"> 
       <div class="album py-5 bg-light" style="height:100%"> <br><br>
        <div class="container">
			<h1 class="p-2">Jogadores disponíveis</h1>
			<div class="btn-group float-right pb-2">
				<a href="home.php" class="btn float-right btn-outline-dark" role="button" aria-pressed="true"><i class="fa fa-arrow-circle-left pr-2" aria-hidden="true"></i>Voltar</a>
			</div>
			<?php listarJogador($connection,$_SESSION["cod"]);?>
			
		  
      </div>
    </main>
            <!-- FIM DA PARTE DE IMAGENS E INFORMAÇÕES DE JOGOS-->
  </div>
</div>
  <!-- <?php //include_once(__DIR__."/footer/footerPrimary.html");?> -->
  <?php include_once(ROOT."template.html/end.php");?>
