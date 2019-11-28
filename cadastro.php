<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<link rel="stylesheet" href="/GeekCritic/assets/css/estilo.css">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

<?php
  include('includes/nav.php');
  ?>

  <div class="container">
    <div class="text-center shadow-lg mb-5 bg-white rounded mx-auto" style="width:300px; margin-top:100px">
      <div class="row">

        <form class="p-5">
          <div class="col">
            <div class="form-group">
              <label for="exampleDropdownFormEmail2">Email</label>
              <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Email">
            </div>
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label for="exampleDropdownFormPassword2">Senha</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Senha">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label for="exampleDropdownFormPassword3"> Repetir Senha</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Repetir Senha">
          </div>
        </div>
    
    <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
</div>
  </div>
  </div>
  <?php

include('includes/rodape.php');


?>


<style>
body{
background-color:lightgray!important;
}


</style>


</body>

</html>