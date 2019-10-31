<!DOCTYPE html>
<html>

<head>
  <title>Geekritic</title>



  <div class="menu">

<button type="button " class=" btn2 btn btn-outline-primary" >HOME</button>
<button type="button " class=" btn2 btn btn-outline-primary ">FILMES</button>
<button type="button " class=" btn2 btn btn-outline-primary">TRAILER</button>
<button type="button " class=" btn2 btn btn-outline-primary">NOTÍCIAS</button>










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






  <div class="container">

    <div class="row">
      <div class="col-sm-3">

        <div class=" c card">
          <img class="card-img-top" src="assets/images/a.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Avengers: Endgame</a>

        </div>
      </div>





      <div class="col-sm-3">

        <div class=" c card">
          <img class="card-img-top" src="assets/images/c.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Joker</a>

        </div>
      </div>


      <div class="col-sm-3">

        <div class=" c card">
          <img class="card-img-top" src="assets/images/hm1.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Spider man away from home</a>

        </div>
      </div>




      <div class="col-sm-3">

        <div class=" c card">
          <img class="card-img-top" src="assets/images/edf.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">The exterminator of future dark</a>

        </div>
      </div>
    </div>
  </div>




  <CENTER>
    <h1></h1>
  </CENTER>
  <div class="container confundo">

    <div class="row">
      <div class="col-sm-3">

        <div class=" c card">
          <img class="card-img-top" src="assets/images/r.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Lion King</a>

        </div>
      </div>


      <div class="col-sm-3 text-center" style="background-size:cover">

        <div class=" c card">
          <img class="card-img-top" src="assets/images/hm1.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Spider man away from home</a>

        </div>
      </div>

      <div class="col-sm-3">

        <div class=" c card">
          <img class="card-img-top" src="assets/images/r.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Lion King</a>

        </div>
      </div>



      <div class="col-sm-3 text-center">

        <div class=" c card">
          <img class="card-img-top" src="assets/images/a.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Bohemian rhapsody</a>

        </div>
      </div>
    </div>


    <!-- Botão para acionar modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
      Abrir modal de demonstração
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            COLA AQUI
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar mudanças</button>
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
           width:200px;
           height: 40px;
           font-size: 19px;

       }
       .btn3{

           font-size: 35px;
           background-color: black;
           color:chartreuse;
       }
     

    </style>














    <?php
    include('includes/footer.php');
    ?>

</body>

</html>