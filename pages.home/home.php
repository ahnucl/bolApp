	<?php require_once("../config.php") ?>
  <?php require_once(ROOT."util/verificaSessao.php") ?>
	<?php include_once(ROOT."template.html/begin.php");?>
	<?php include_once(ROOT."template.navbar/navbarLogin.php");?>

                          <!-- INICIO DA COLUNA DE TORNEIOS E PARTIDAS AMISTOSAS-->
    <div class="container-fluid">
      <div class="row" style="min-height:100vh;">

        <?php include_once(ROOT."template.navbar/sidebar.html");?>
                                <!-- FIM DA COLUNA DE TORNEIOS E PARTIDAS AMISTOSAS-->
                                <!-- INICIO DA PARTE DE IMAGENS E INFORMAÇÕES DE JOGOS-->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
       <div class="album py-5 bg-light" style="height:100%"> <br><br>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?=LOCALPATH."image/img6.jpg"?>" height="200px" width="50px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text" align="justify">O projeto tem como objetivo servir de ferramenta para a inclusão social da mulher, tanto no futebol como na sociedade, incentivando a prática esportiva e contribuindo para a formação cidadã.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Informações</button>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?=LOCALPATH."image/img3.jpg"?>" height="200px" width="50px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text" align="justify">A pelada quase não tem regras: uma bola e um mínimo de dois participantes bastam para começar um jogo. O campo pode ser uma praça, um terreno baldio ou uma rua de pouco movimento.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Informações</button>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?=LOCALPATH."image/img5.jpg"?>"  height="200px" width="50px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text" align="justify">O futebol vem cada vez mais se tornando um esporte popular em vários países sem muita tradição neste esporte, pois o prazer de jogar futebol com liberdade é que faz o espetáculo.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Informações</button>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?=LOCALPATH."image/img4.jpg"?>" height="200px" width="50px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Existem muitas variações das passagens do Lorem Ipsum disponíveis, mas a maior parte sofreu alterações de alguma forma, pela injecção de humor, ou de palavras aleatórias que nem sequer parecem suficientemente credíveis.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Informações</button>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?=LOCALPATH."image/ball.jpg"?>" height="200px" width="50px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Existem muitas variações das passagens do Lorem Ipsum disponíveis, mas a maior parte sofreu alterações de alguma forma, pela injecção de humor, ou de palavras aleatórias que nem sequer parecem suficientemente credíveis.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Informações</button>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?=LOCALPATH."image/img7.png"?>" height="200px" width="50px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Existem muitas variações das passagens do Lorem Ipsum disponíveis, mas a maior parte sofreu alterações de alguma forma, pela injecção de humor, ou de palavras aleatórias que nem sequer parecem suficientemente credíveis.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Informações</button>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
            <!-- FIM DA PARTE DE IMAGENS E INFORMAÇÕES DE JOGOS-->
  </div>
</div>
  <!-- <?php //include_once(__DIR__."/footer/footerPrimary.html");?> -->
  <?php include_once(ROOT."template.html/end.php");?>
