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


<div class="text-center" style="margin-top:35px">
    <h1>Ação</h1>
  </div>

<center>
  <div class="container">
    <div class="row">

      <div class="card s col-md-3" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">Batman</h5>

          <img class="card-img-top" src="assets/images/vu.png" alt="Imagem de capa do card">
        </div>
      </div>
      <div class="card s col-md-3" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">Coringa</h5>

          <img class="card-img-top" src="assets/images/co.png" alt="Imagem de capa do card">
        </div>
      </div>
      <div class="card s col-md-3" style="width: 18rem;">

        <div class="card-body">

          <h5 class="card-title">Capitã Marvel</h5>
          <img class="card-img-top" src="assets/images/cm1.png" alt="Imagem de capa do card">
        </div>
      </div>
      <div class="card s col-md-3" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">Divergente</h5>
          <img class="card-img-top" src="assets/images/di.png" alt="Imagem de capa do card">
        </div>
      </div>
      <div class="card s col-md-3" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">Mad Max</h5>

          <img class="card-img-top" src="assets/images/mm.png" alt="Imagem de capa do card">
        </div>
      </div>
      <div class="card s col-md-3" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">Malévola</h5>
          <img class="card-img-top" src="assets/images/mal.png" alt="Imagem de capa do card">
        </div>
      </div>
      <div class="card s col-md-3" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">Matrix</h5>

          <img class="card-img-top" src="assets/images/m.png" alt="Imagem de capa do card">
        </div>
      </div>

      <div class="card s col-md-3" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">O Exterminador do Futuro: Destino Sombrio</h5>

          <img class="card-img-top" src="assets/images/edf2.png" alt="Imagem de capa do card">
        </div>
      </div>
      <div class="card s col-md-3" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">Vingadores Guerra-Infinita</h5>

          <img class="card-img-top" src="assets/images/v.png" alt="Imagem de capa do card">
        </div>
      </div>









    </div>
  </div>
</center>


































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
            <a class="dropdown-item" style="margin-left:-20px" href="/cadastro.php">Cadastre-se</a>
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

    .s {
      margin-right: 30px;
      margin-left: 55px;
      margin-bottom: 30px;
      margin-top: 30px;
    }
    .h1,
    h1 {

      color: #E0EEEE;

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
  </style>






  <?php

  include('includes/rodape.php');


  ?>


  <?php
  include('includes/footer.php');
  ?>

</body>

</html>