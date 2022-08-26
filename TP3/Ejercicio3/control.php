
<?php   
include('./cinemas/Pelicula.php');
include('./cinemas/Archivos.php') ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Pelicula</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="./vistas/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vistas/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./stylePelis.css">

  </head>
  <body>
    <div class="container" >
    <?php  $objPelicula= new Pelicula(); $objArchivo = new Archivo();
      $datos = $_POST;
        if(!empty($datos)){
            $objArchivo->Cargar($_FILES['file_peli']);    
            $objPelicula->Cargar($datos);
            $objPelicula->setObjArchivo($objArchivo); 
            echo $objPelicula;
        }
        ?>
    <!-- FOOTER-->
        <div class="card">
        <div class="card-body">
        <a href="./vistas/index.html" class="btn btn-outline-warning"><i class="bi bi-arrow-left"></i>Volver</a>
        </div>
        <div class="card-footer text-muted text-center">
        <small><i>Diseñado por <b>Luna Laureano - Brian Centurion - Jeremias Sappia - Ronny</b></i></small>
        </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>