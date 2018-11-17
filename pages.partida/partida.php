	<?php require_once("../config.php") ?>
  <?php require_once(ROOT."util/verificaSessao.php") ?>
	<?php include_once(ROOT."template.html/begin.php");?>
	<?php include_once(ROOT."template.navbar/navbarLogin.php");?>

    <main class="py-5 bg-light" >
		<div class="container col-md-12 py-1" style="height:100%; width: 100%;"> 
			<!--<div class="container">-->
			
			<!--<div class="row rounded bg-light py-2">
				<div class="text-center">
					<p class="h3"> PAINEL DE CONTROLE PESSOAL </p>
				</div>
			</div>-->
			
			<div class="row text-center py-4">
				<div class="col-md-5">
					<div class="container rounded bg-success">
						<div class="float-right w-50 " >
							<center><i class="fas fa-shield-alt py-2" style="font-size: 60px; color:#FFF; padding-top: -10%;"></i></center>
						</div>
						<h4 class="text-right py-3" style="color:#FFF;"><strong>Time A</strong></h4>
						
						<table class="table table-hover table-light">
							<thead align="center">
								<tr>
								  <th scope="col">Nome</th>
								  <th scope="col">Data</th>
								  <th scope="col">Visualizar</th>
								</tr>
							</thead>
							<tbody align="center">
								<?php
							$i=0; 
							for($i==0;$i<=4;$i++){ ?>
								<tr>
									<td> Time A </td>
									<td> 00/00/0000 </td>
									<td><a href="#" ><i class="fa fa-eye" style="font-size: 20px;" aria-hidden="true"></i></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<hr>
						<div class="btn-group py-2">
							<div class="btn float-left">
								<button class="btn btn-outline-success " type="submit" name="atualizar">
									<i class="fas fa-check-circle pr-2"></i>Confirmar time
								</button>
							</div>
							<div class="btn text-center">
								<button class="btn btn-outline-success " type="reset" name="atualizar">
									<i class="fas fa-check-circle pr-2"></i>Trocar time
								</button>
							</div>
						</div>
					</div> 
				</div>
				<div class="col-md-1 py-5">
					<div class="py-5">
						<div class="py-5">
							<div class="py-3">
								<div class="container rounded bg-light">
									<i class="fa fa-times" aria-hidden="true" style="font-size: 40px; #color:#585858; padding-top: -10%;" ></i>
								</div> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="container rounded bg-success">
						<div class="float-right w-50 " >
							<center><i class="fas fa-shield-alt py-2" style="font-size: 60px; color:#FFF; padding-top: -10%;"></i></center>
						</div>
						<h4 class="text-right py-3" style="color:#FFF;"><strong>Time A</strong></h4>
						
						<table class="table table-hover table-light">
							<thead align="center">
								<tr>
								  <th scope="col">Nome</th>
								  <th scope="col">Data</th>
								  <th scope="col">Visualizar</th>
								</tr>
							</thead>
							<tbody align="center">
								<?php
							$i=0; 
							for($i==0;$i<=4;$i++){ ?>
								<tr>
									<td> Time A </td>
									<td> 00/00/0000 </td>
									<td><a href="#" ><i class="fa fa-eye" style="font-size: 20px;" aria-hidden="true"></i></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<hr>
						<div class="btn-group py-2">
							<div class="btn float-left">
								<button class="btn btn-outline-success " type="submit" name="atualizar">
									<i class="fas fa-check-circle pr-2"></i>Confirmar time
								</button>
							</div>
							<div class="btn text-center">
								<button class="btn btn-outline-success " type="reset" name="atualizar">
									<i class="fas fa-check-circle pr-2"></i>Trocar time
								</button>
							</div>
						</div>
					</div> 
				</div> 
			</div>
			<div class="row rounded bg-light py-2">
				<div class="text-center">
					<p class="h3"> PAINEL DE CONTROLE PESSOAL </p>
				</div>
			</div>
		</div>
    </main>
  <!-- <?php //include_once(__DIR__."/footer/footerPrimary.html");?> -->
  <?php include_once(ROOT."template.html/end.php");?>
