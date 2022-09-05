<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
        <div class="container" id="resp">
            <div class="card">
                <div class="card-header">
                    Respuesta
                </div>
                <div class="card-body">                   
                        <?php 
                        if($_GET){
                            $num = $_GET['form_numero'];
                           if(is_numeric($num)){
                            
                                if($num > 0 ){
                                    echo "<h4 class='card-title'> El numero {$num} es <big> POSITIVO </big></h4><br/>";
                                }
                                elseif($num == 0){
                                    echo "<h4 class='card-title'> El numero {$num} es <big> CERO </big></h4><br/>";
                                }
                                else{
                                    echo "<h4 class='card-title'> El numero {$num} es <big> NEGATIVO </big></h4><br/>";
                                }
                           }else{
                            echo "<h3>Ingrese un valor numerico</h3>";
                           }
                        }
                        ?>
                </div>
                <div class="card-footer text-muted">
                    <button><a href="./ejercicio_1.php">Volver</a></button>
                </div>
            </div>
            
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>