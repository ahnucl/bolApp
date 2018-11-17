	<?php require_once("../config.php") ?>
  <?php require_once(ROOT."util/verificaSessao.php") ?>
	<?php include_once(ROOT."template.html/begin.php");?>
	<?php include_once(ROOT."template.navbar/navbarLogin.php");?>

    <main class="px-4 py-5">
		<div class="container col-md-12 py-1" style="height:100%;"> 
			<!--<div class="container">-->
			
			<!--<div class="row rounded bg-light py-2">
				<div class="text-center">
					<p class="h3"> PAINEL DE CONTROLE PESSOAL </p>
				</div>
			</div>-->
			
			<div class="row text-center py-4">
				<div class="col-md-4">
					<div class="container rounded bg-light">
						<div class="float-right w-50 " >
							<center><i class="fas fa-id-card py-2" style="font-size: 60px; #color:#585858; padding-top: -10%;"></i></center>
						</div>
						<h4 class="text-right py-3"><strong> Meus dados</strong> </h4>
						<hr>
						<h5 class="text-left">Gols</h5>
						<div class="form-row text-left">
							<div class="form-group col-5">
								<label>Meus gols: <strong>5</strong></label>
							</div>
							<div class="form-group col-5">
								<label>Assistências: <strong>20</strong></label>
							</div>
						</div>
					
						<h5 class="text-left">Faltas</h5>
						<div class="form-row text-left">
							<div class="form-group col-5 ">
								<label>Penalidades: <strong>40</strong></label>
								
							</div>
							<div class="form-group col-5 ">
								<label>Expulsões: <strong>2</strong></label>
								
							</div>
						</div>
	
						<h5 class="text-left">Cartões</h5>
						<div class="form-row">
							<div class="form-group col-5 ">
								<label>Amarelo: <strong>4</strong></label>
								
							</div>
							<div class="form-group col-5 ">
								<label>Vermelho: <strong>2</strong></label>
								
							</div>
						</div>
						<hr>
						<br>
						<div class="btn-group py-4">
							<button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-plus pr-2" aria-hidden="true"></i> Informações</button>
							<!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="container rounded bg-light">
						<div class="float-right w-50 " >
							<center><i class="fas fa-shield-alt py-2" style="font-size: 60px; #color:#585858; padding-top: -10%;"></i></center>
						</div>
						<h4 class="text-right py-3"><strong>Times</strong></h4>
						
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
						<div class="btn-group py-3">
							<button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-plus pr-2" aria-hidden="true"></i> Informações</button>
							<!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
						</div>
					</div> 
				</div>
				<div class="col-md-4">
					<div class="container rounded bg-light">
						<div class="float-right w-50 " >
							<center><i class="fa fa-users py-2" style="font-size: 60px; #color:#585858; padding-top: -10%;"></i></center>
						</div>
						<h4 class="text-right py-3"><strong>Partidas</strong></h4>
						
						<table class="table table-hover table-light">
							<thead align="center">
								<tr>
								  <th scope="col">Times</th>
								  <th scope="col">Data</th>
								  <th scope="col">Visualizar</th>
								</tr>
							</thead>
							<tbody align="center">
							<?php
							$i=0; 
							for($i==0;$i<=4;$i++){ ?>
								<tr>
									<td> Time A VS Time B</td>
									<td> 00/00/0000</td>
									<td><a href="#" ><i class="fa fa-eye" style="font-size: 20px;" aria-hidden="true"></i></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<hr>
						<div class="btn-group py-3">
							<button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-plus pr-2" aria-hidden="true"></i> Informações</button>
							<!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
						</div>
					</div>
				</div>
			</div>
		</div>
    </main>
  <!-- <?php //include_once(__DIR__."/footer/footerPrimary.html");?> -->
  <?php include_once(ROOT."template.html/end.php");?>
