<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <?php require ('views/header.php'); ?>
      <div class="container">
            <h1 class="text-center">Ingreso de datos</h1>
            <form class="col-6 m-auto" action="<?php echo constant('URL')?>usuario/crear" method="POST" id="formRegistrarUsuario" >
                <label >Nombre</label>
                <input required  name="nombre" id="nombre"  class="form-control" type="text">
                <label > Apellido</label>
                <input  required name="apellido"  id="apellido" class="form-control" type="text">
                <label >Passwors</label>
                <input  required name="password"  id="password" class="form-control" type="password">

                <div class="p-3 text-center">
                  <button id="btnEnviar" class="btn btn-success" type="submit">Enviar</button>
                </div>
                
            </form>
        </div>
      <?php require ('views/foother.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>