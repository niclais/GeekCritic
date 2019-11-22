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




  <div class="container-fluid desc">
    <div class="row">
      <div class="desc2 rounded col-md-4">
        <img src="assets/images/2442891.jpg">
      </div>

      </dv>
      <div class="row">
        <div class="desc2 rounded col-md-8">
          <div class="desc">
            <div class="desc-item">
              <h1 class="">O Exterminador do Futuro</h1>
              <span class="light">Lançamento: </span>
              <a>31 de outubro de 2019</a>
            </div>

            <div class="desc-item">
              <span class="light">Direção: </span>
              <a>Tim Miller</a>
            </div>

            <div class="desc-item">
            <span class="light">Gêneros: </span>
            <a><a href="acao.php">Ação</a>, Ficção científica</a>
            </div>

            <span class="light">Nacionalidade: </span>
            <a>EUA</a>
          </div>
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

    .h1,
    h1 {

      color: #E0EEEE;

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

    .desc {
      background-color: #90a4ae;
      text-align: center;
      padding: 15px 15px 15px 20px;

    }

    .desc2 {
      background-color: #768992;
      padding: 10px 10px 10px 10px;
    }

    .light {
      color: #E0EEEE;
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