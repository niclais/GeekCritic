<!DOCTYPE html>
<html>

<head>
  <title>Geekritic</title>






  <?php

  include('includes/header.php');


  ?>


</head>

<body>




  <?php
  include('includes/nav.php');
  ?>

  <?php
  include('includes/carossel.php');
  ?>


  <div class="text-center nome" style="margin-top:35px">
    <h1> Últimos Lançamentos </h1>
  </div>


  <div class="grid row">
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/edf.png" alt="img19" />
      <figcaption>
        <h2 class="text-center">O Exterminador <b>do Futuro</b></h2>
        <p>O Exterminador do Futuro: Destino Sombrio está em exibição nos cinemas.</p>

        <a href="EF.PHP">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/rl.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">O Rei <b>Leão</b></h2>
        <p>Novo filme do Rei Leão estreia nos EUA em meio a críticas...</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/br1.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">Bohemian <b>Rhapsody</b></h2>
        <p>é um filme de drama biográfico britânico-estadunidense de 2018 sobre Freddie Mercury, vocalista da banda de rock britânica Queen.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/cr.png" alt="img12" />
      <figcaption>
        <h2 class="text-center"><b>Coringa</b></h2>
        <p>Em filme, Joaquin Phoenix retrata a origem sombria do vilão Coringa.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
  </div>


  <div class="grid row">
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/vs.png" alt="img19" />
      <figcaption>
        <h2 class="text-center">Vingadores <b>Ultimato</b></h2>
        <p>Vingadores: Ultimato já está disponível em DVD, Blu-ray, 3D, 4K e download digital.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/ts.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">Toy <b>Story 4</b></h2>
        <p>Toy Story 4 prova que, sim, ainda há carisma e fôlego de sobra para a franquia.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/it.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">It: Capítulo <b>Dois</b></h2>
        <p>It – Capítulo 2 dá uma aula de como fazer trailers.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/cm.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">Capitã <b>Marvel</b></h2>
        <p>Capitã Marvel – foi devidamente apresentada no filme solo de 2019.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
  </div>

  <div class="text-center nome" style="margin-top:35px">
    <h1> Mais Vistos </h1>
  </div>


  <div class="grid row">
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/edf.png" alt="img19" />
      <figcaption>
        <h2>O Exterminador <b>do Futuro</b></h2>
        <p>O Exterminador do Futuro: Destino Sombrio está em exibição nos cinemas.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/it.png" alt="img12" />
      <figcaption>
        <h2>Strange <span>Dexter</span></h2>
        <p>It – Capítulo 2 dá uma aula de como fazer trailers.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="https://tympanus.net/Development/HoverEffectIdeas/img/12.jpg" alt="img12" />
      <figcaption>
        <h2>Strange <span>Dexter</span></h2>
        <p>Dexter had his own strange way. You could watch him training ants.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="https://tympanus.net/Development/HoverEffectIdeas/img/12.jpg" alt="img12" />
      <figcaption>
        <h2>Strange <span>Dexter</span></h2>
        <p>Dexter had his own strange way. You could watch him training ants.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
  </div>
  <?php

  include('includes/rodape.php');


  ?>




  <!-- NAO APAGAR MODAL PELO AMOR DE DEUS-->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="px-4 py-3">
            <div class="form-group">
              <label for="exampleDropdownFormEmail1">Endereço de e-mail</label>
              <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                <label class="form-check-label" for="dropdownCheck">
                  Lembrar Senha
                </label>

              </div>
            </div>
            <a class="dropdown-item" style="margin-left:-20px" href="cadastro.php" target="blank">Cadastre-se</a>
          </form>
          <div>

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Entrar</button>
        </div>

      </div>

    </div>
  </div>
  </div>


</body>


</html>