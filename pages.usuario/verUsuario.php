<?php require_once("../config.php") ?>
<?php require_once(ROOT."util/verificaSessao.php") ?>
<?php include_once(ROOT."template.html/begin.php") ?>
<?php include_once(ROOT."template.navbar/navbarLogin.php") ?>
<?php require_once(ROOT."util/function.php");
      require_once(ROOT."util/conexao.php");
      if(isset($_GET["cod"]) and !empty($_GET["cod"])) {
        $visitante = true;
        $perfil = consultarJogador($connection, $_GET["cod"]);  
      } else {
        $visitante = false;
        $perfil = consultarJogador($connection, $_SESSION["cod"]); 
      }
 ?>

<div class="container-fluid" >
	<!-- <div class="row" style="height:100%"> -->
    <div class="row" style="min-height:100vh;">
    	<?php include_once(ROOT."template.navbar/sidebar.html");?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        	<div class="album bg-light" style="height:100%"> <br><br>

            <?php if($visitante) { ?>
                <h1 class="p-5">Visualizar perfil de usuário</h1>
            <?php } else { ?>
                <h1 class="p-5">Editar perfil</h1>
            <?php } ?>

            <?php if(isset($_GET["erro"])) { ?>
                <div class="alert alert-warning alert-dismissible fade show ml-5" style="max-width: 600px;" role="alert">
                    <?php switch($_GET["erro"]) {
                            case 1: 
                                echo "A senha <strong>atual</strong> não confere!";
                                break;
                            case 2: 
                                echo "<strong>Não</strong> foi possível atualizar seus dados.";
                                break;
                            case 3:
                                echo "Para alterar a senha, deve-se preencher <strong>ambos</strong> os campos!";
                                break;
                            case 4:
                                echo "Login informado <strong>já existe</strong>.";
                                break;
                            case 5:
                                echo "<strong>Nome</strong> e <strong>login</strong> são campos <strong>obrigatórios</strong>!";
                                break; 
							case 6:
								echo "<strong>Não</strong> foi possível apagar sua conta.";
								break;
                          } ?> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <?php if(isset($_GET["success"]) ){ ?>
                <div class="alert alert-success alert-dismissible fade show ml-5" style="max-width: 600px;" role="alert">  
                Perfil atualizado com sucesso!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
			<?php if(!$visitante) { ?>
                <div class="float-right w-50 " >
                    <center><i class="fas fa-user-edit" style="font-size: 300px; padding-top: 15%;"></i></center>
                </div>
			<?php }else{ ?>
				<div class="float-right w-50 " >
                    <center><i class="fa fa-user" style="font-size: 300px; padding-top: 15%;"></i></center>
                </div>
			<?php } ?>
        		<form method="POST" action="atualizarUsuario-proccess.php" class="pl-5 pb-3 w-50">
                  <h5 class="py-3">Informações pessoais</h5>
    		        <div class="form-row">
                        <div class="form-group col-7">
            				<label>Nome completo</label>
            				<input class="form-control" type="text" name="nome" value="<?= $perfil["nome"]?>"  <?php if($visitante) {echo "readonly";} ?> >
            			</div>

                    <?php if(!$visitante) { ?>
                        <div class="form-group col-5">
            				<label>Login</label>
            				<input class="form-control" type="text" name="login" value="<?= $perfil["login"]?>" >
            			</div>
                    <?php } ?>
                    
                    </div>

                    <hr>
                    
                    <h5 class="py-3">Informações de contato</h5>
        			<div class="form-row">
                        <div class="form-group col-12">
                            <label>Endereço</label>
                            <input class="form-control" type="text" name="endereco" value="<?= $perfil["endereco"]?>" <?php if($visitante) {echo "readonly";} ?> >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-7 ">
                            <label>E-mail</label>
                            <input class="form-control" type="email" name="email" value="<?= $perfil["email"]?>" <?php if($visitante) {echo "readonly";} ?> >
                        </div>
                        <div class="form-group col-5 ">
                            <label>Telefone</label>
                            <input class="form-control" id="telefone" type="text" name="telefone" value="<?= $perfil["telefone"]?>" <?php if($visitante) {echo "readonly";} ?>>
                        </div>
                    </div>
            
                    <hr>
            <?php if(!$visitante) { ?>
                    <h5 class="py-3">Alteração de senha</h5>
                    <div class="form-row">

                    <div class="form-group col-6">
        				<label>Senha antiga</label>
        				<input class="form-control" type="password" name="senha_old">
        			</div>
        			<div class="form-group col-6 ">
        				<label>Senha nova</label>
        				<input class="form-control" type="password" name="senha_new">
        			</div>
                </div>
                    
                <hr class="pb-3">
					<div class="form-group">
                        <div class="btn float-left">
                            <button class="btn btn-outline-primary " type="submit" name="atualizar">
								<i class="fas fa-check-circle pr-2"></i>Atualizar
							</button>
                        </div>
                        <div class="btn  text-center">
                            <a href="deletarUsuario-proccess.php" onclick="return confirm('Tem certeza que deletar sua conta?')" class="btn btn-outline-danger" role="button" aria-pressed="true"><i class="far fa-trash-alt pr-2"></i>Apagar conta</a>
                        </div>
                        <div class="btn float-right">
                            <a href="<?=LOCALPATH."pages.home/home.php"?>" class="btn btn-outline-dark" role="button" aria-pressed="true"><i class="fa fa-arrow-circle-left pr-2" aria-hidden="true"></i>Voltar</a>
                        </div>
                    </div>
        		</form>
            <?php }else{ ?>
				<div class="btn float-right">
                            <a href="listarUsuario.php" class="btn btn-outline-dark" role="button" aria-pressed="true"><i class="fa fa-arrow-circle-left pr-2" aria-hidden="true"></i>Voltar</a>
                        </div>
                    </div>
        		</form>
			<?php } ?>
			</div>	

        </main>
    </div>

</div>
<?php include_once(ROOT."template.html/end.php")?>