<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <div class='card' style="width:30%; margin: 5em 35%;">
        <?php

            if (!empty($_GET)) {
               
                foreach ($_GET as $key => $value) {
               
                    if($value == "Arquitectura"){
                        if($key == "form_Lunes"){
                            $carga[] = $_GET['form_L_Hs'];
                        }
                        if ($key == "form_Martes"){
                            $carga[] = $_GET['form_M_Hs']; 
                        }
                        if ($key == "form_Miercoles"){
                            $carga[] = $_GET['form_Mco_Hs']; 
                        }
                        if ($key == "form_Jueves"){
                            $carga[] = $_GET['form_J_Hs']; 
                        }
                        if ($key == "form_Viernes"){
                            $carga[] = $_GET['form_V_Hs']; 
                        }
                    }
                }

                $suma = 0;
                for($i = 0 ; $i < count($carga); $i++){ $suma += $carga[$i]; }

                echo "<h4>La Carga horaria es: {$suma}</h4>";
            }
        ?>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>