
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


<div class="text-center estrela" style="margin-top:35px">
  <h1> Lançamentos </h1>
</div>

                <div class="grid">
                    <figure class="effect-dexter">
                        <img src="assets/images/edf.png" alt="img19"/>
                        <figcaption>
                            <h2>Strange <span>Dexter</span></h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>            
                    </figure>
                    <figure class="effect-dexter">
                        <img src="https://tympanus.net/Development/HoverEffectIdeas/img/12.jpg" alt="img12"/>
                        <figcaption>
                            <h2>Strange <span>Dexter</span></h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>            
                    </figure>
                    <figure class="effect-dexter">
                        <img src="https://tympanus.net/Development/HoverEffectIdeas/img/12.jpg" alt="img12"/>
                        <figcaption>
                            <h2>Strange <span>Dexter</span></h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>            
                    </figure>
                    <figure class="effect-dexter">
                        <img src="https://tympanus.net/Development/HoverEffectIdeas/img/12.jpg" alt="img12"/>
                        <figcaption>
                            <h2>Strange <span>Dexter</span></h2>
                            <p>Dexter had his own strange way. You could watch him training ants.</p>
                            <a href="#">View more</a>
                        </figcaption>            
                    </figure>
                </div>





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
              <a class="dropdown-item" style="margin-left:-20px"  href="cadastro/cadastro.php">Cadastre-se</a>
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
        body {







            background-color: black;
           


        }

        .h1,
        h1 {

            color: red;

            background-color: black;

        }

       .btn2{
           width: 150px;
           height: 40px;
           font-size: 18px;
           margin: 5px;

       }
       .btn3{

           font-size: 35px;
           background-color: black;
           color:chartreuse;
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
.grid figure figcaption > a {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.grid figure figcaption > a {
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
	background: -webkit-linear-gradient(top, rgba(37,141,200,1) 0%, rgba(104,60,19,1) 100%);
	background: linear-gradient(to bottom, rgba(37,141,200,1) 0%,rgba(104,60,19,1) 100%); 
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
	-webkit-transform: translate3d(0,-100%,0);
	transform: translate3d(0,-100%,0);
}

figure.effect-dexter:hover figcaption::after {
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
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
	-webkit-transform: translate3d(0,-100px,0);
	transform: translate3d(0,-100px,0);
}

figure.effect-dexter:hover p {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
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