
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


<div class="text-center" style="margin-top:35px">
  <h1> Lançamentos </h1>
</div>


  <div class="container container-margin"> 

    <div class="row">
      <div class="col-sm-3">

        <div class="  card">
          <img class="card-img-top" src="assets/images/a.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Avengers: Endgame</a>

        </div>
      </div>





      <div class="col-sm-3">

        <div class="  card">
          <img class="card-img-top" src="assets/images/c.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Joker</a>

        </div>
      </div>


      <div class="col-sm-3">

        <div class="card">
          <img class="card-img-top" src="assets/images/hm1.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Spider-Man away from home</a>

        </div>
      </div>




      <div class="col-sm-3">

        <div class="card">
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

        <div class="  card">
          <img class="card-img-top" src="assets/images/r.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Lion King</a>

        </div>
      </div>


     

      <div class="col-sm-3">


        <div class="  card">
          <img class="card-img-top" src="assets/images/r.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Lion King</a>

        </div>
      </div>

      <div class="col-sm-3">

<div class="  card">
  <img class="card-img-top" src="assets/images/c.png" alt="Imagem de capa do card">

  <a href="#" class="btn btn-primary">Joker</a>

</div>
</div>
      
      
      





    
      <div class="col-sm-3 text-center">

        <div class=" card">
          <img class="card-img-top" src="assets/images/a.png" alt="Imagem de capa do card">

          <a href="#" class="btn btn-primary">Bohemian rhapsody</a>

        </div>
      </div>
    </div>

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
              <a class="dropdown-item" style="margin-left:-20px"  href="includes/cadastro.php">Cadastre-se</a>
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



       .btn2{
           width: 150px;
           height: 40px;
           font-size: 18px;
           margin: 10px;

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
    <?php
    include('includes/footer.php');
    ?>

</html>