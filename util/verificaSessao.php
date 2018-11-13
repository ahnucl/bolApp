  <?php 
    session_start();

	if(/*(!isset($_SESSION["usuario_logado"]) or (empty($_SESSION["usuario_logado"]))) or*/
	   (!isset($_SESSION["cod"]) or (empty($_SESSION["cod"]))) or
	   (!isset($_SESSION["usuario"]) or (empty($_SESSION["usuario"]))) /*or
	   (!isset($_SESSION["login"]) or (empty($_SESSION["login"])))*/) {
		?>
		<?php include_once(ROOT."template.html/begin.php");?>

		<style rel="stylesheet">
				body{
					background-image: url(<?= LOCALPATH."image/bk2.jpg"?>); 
					background-size: cover; 
					background-repeat: no-repeat; 
					height: 100vh;
					background-position: center;

				}
		</style>
		<div class="container-fluid" >
			<div class="row" style="min-height:100vh;">
				<main role="main" class="col-md-10 ml-sm-5 col-lg-8 px-4">
					<div class="album bg-light" style="height:100%;position:relative;left:12em"> <br><br>
						<div class="text-center">
							<h2>Página restrita aos usuários.</h2>
							<img src="<?= LOCALPATH."image/nope.png"?>" style="font-size: 10px;">
						</div>
							
						<div class="text-center pr-2 pb-2">
							<a href="<?= LOCALPATH."index.php" ?>" class="btn btn-outline-danger" role="button" aria-pressed="true">Retornar a página principal</a>
						</div>
					</div>
				</main>
			</div>
		</div>
		<?php include_once(ROOT."template.html/end.php");
		die();
    }
?>