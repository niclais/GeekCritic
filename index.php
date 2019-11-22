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
        <p>Gênero:Ação, Ficção Científica</p>

        <a href="EF.PHP">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/rl.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">O Rei <b>Leão</b></h2>
        <p>Dexter had his own strange way. You could watch him training ants.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/br1.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">Bohemian <b>Rhapsody</b></h2>
        <p>Dexter had his own strange way. You could watch him training ants.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/cr.png" alt="img12" />
      <figcaption>
        <h2 class="text-center"><b>Coringa</b></h2>
        <p>Dexter had his own strange way. You could watch him training ants.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
  </div>


  <div class="grid row">
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/vs.png" alt="img19" />
      <figcaption>
        <h2 class="text-center">Vingadores <b>Ultimato</b></h2>
        <p>Dexter had his own strange way. You could watch him training ants.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/ts.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">Toy <b>Story 4</b></h2>
        <p>Dexter had his own strange way. You could watch him training ants.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/it.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">It: Capítulo <b>Dois</b></h2>
        <p>Dexter had his own strange way. You could watch him training ants.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/cm.png" alt="img12" />
      <figcaption>
        <h2 class="text-center">Capitã <b>Marvel</b></h2>
        <p>Dexter had his own strange way. You could watch him training ants.</p>
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
        <p>Dexter had his own strange way. You could watch him training ants.</p>
        <a href="#">View more</a>
      </figcaption>
    </figure>
    <figure class="effect-dexter col-md-3">
      <img src="assets/images/it.png" alt="img12" />
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

  <style>
    .badge-dark {
    color: #fff;
    background-color:transparent !important;
}
    .footer {
      background:#90a4ae ;
      color: whitesmoke;
      height: 400px;
      position: relative;
    }

    .footer .footer-content{
border: 1px solid #00008B;
height: 350px;


    }

    .footer .footer-bottom {
      width: 100%;
      background: #7A8B8B;
      color: whitesmoke;
      height: 50px;
      text-align: center;
      position: absolute;
      bottom: 0px;
      left: 0px;
      padding-top: 20px;
    }

    body {







      background-color: black;



    }

    .h1,
    h1 {

      color: #90a4ae;

      background-color: black;

    }

    .btn2 {
      width: 150px;
      height: 40px;
      font-size: 18px;
      margin: 5px;

    }

    .btn3 {

      font-size: 35px;
      background-color: black;
      color: chartreuse;
    }




    .grid {
      position: relative;
      margin: 0 auto;
      padding: 1em 0 4em;
      max-width: 1750px;
      list-style: none;
      text-align: center;
    }

    /* Common style */
    .grid figure {
      position: relative;
      float: left;
      overflow: hidden;
      margin: 10px 1%;
      min-width: 320px;
      max-width: 400px;
      max-height: 360px;
      width: 48%;
      background: #3085a3;
      text-align: center;
      cursor: pointer;
    }

    .grid figure img {
      position: relative;
      display: block;
      min-height: 100%;
      max-width: 100%;
      opacity: 0.8;
    }

    .grid figure figcaption {
      padding: 2em;
      color: #fff;
      text-transform: uppercase;
      font-size: 1.25em;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .grid figure figcaption::before,
    .grid figure figcaption::after {
      pointer-events: none;
    }

    .grid figure figcaption,
    .grid figure figcaption>a {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    .grid figure figcaption>a {
      z-index: 1000;
      text-indent: 200%;
      white-space: nowrap;
      font-size: 0;
      opacity: 0;
    }

    .grid figure h2 {
      word-spacing: -0.15em;
      font-weight: 200;
    }

    .grid figure h2 span {
      font-weight: 200;
    }

    .grid figure h2,
    .grid figure p {
      margin: 0;
    }

    .grid figure p {
      letter-spacing: 1px;
      font-size: 68.5%;
    }


    /*---------------*/
    /***** Dexter *****/
    /*---------------*/

    figure.effect-dexter {
      background: -webkit-linear-gradient(top, rgba(37, 141, 200, 1) 0%, rgba(104, 60, 19, 1) 100%);
      background: linear-gradient(to bottom, rgba(37, 141, 200, 1) 0%, rgba(104, 60, 19, 1) 100%);
    }

    figure.effect-dexter img {
      -webkit-transition: opacity 0.35s;
      transition: opacity 0.35s;
    }

    figure.effect-dexter:hover img {
      opacity: 0.4;
    }

    figure.effect-dexter figcaption::after {
      position: absolute;
      right: 30px;
      bottom: 30px;
      left: 30px;
      height: -webkit-calc(50% - 30px);
      height: calc(50% - 30px);
      border: 7px solid #fff;
      content: '';
      -webkit-transition: -webkit-transform 0.35s;
      transition: transform 0.35s;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);

    }

    figure.effect-dexter:hover figcaption::after {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    figure.effect-dexter figcaption {
      padding: 3em;
      text-align: left;
    }

    figure.effect-dexter p {
      position: absolute;
      right: 60px;
      bottom: 60px;
      left: 60px;
      opacity: 0;
      -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
      transition: opacity 0.35s, transform 0.35s;
      -webkit-transform: translate3d(0, -100px, 0);
      transform: translate3d(0, -100px, 0);
    }

    figure.effect-dexter:hover p {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    .col-md-3 {
      padding-right: 0 !important;
      padding-left: 0 !important;
    }

    .btn-outline-primary:hover {
    color: #fff;
    background-color: #68838B!important;
    border-color: #7A8B8B!important; 
    }
  </style>














  <?php
  include('includes/footer.php');
  ?>

</body>
<?php
include('includes/footer.php');
?>

</html>