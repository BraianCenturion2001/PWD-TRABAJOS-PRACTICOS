<?php

//Verificacion si el GET recibio algo
if ($_GET){
    $titulo = $_GET['titulo'];
    $actores = $_GET['actores'];
    $director = $_GET['director'];
    $guion = $_GET['guion'];
    $produccion = $_GET['produccion'];
    $ano = $_GET['ano'];
    $nacionalidad = $_GET['nacionalidad'];
    $duracion = $_GET['duracion'];
    $genero = $_GET['genero'];
    $sinopsis = $_GET['sinopsis'];

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
}

?>

<html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
    <div class="container mt-4 mb-4">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading text-primary">La pelicula introducida es:</h4>
            <b class="text-success">Titulo: </b><?php echo $titulo ?><br>
            <b class="text-success">Actores: </b><?php echo $actores ?><br>
            <b class="text-success">Director: </b><?php echo $director ?><br>
            <b class="text-success">Guion: </b><?php echo $guion ?><br>
            <b class="text-success">Produccion: </b><?php echo $produccion ?><br>
            <b class="text-success">Año: </b><?php echo $ano ?><br>
            <b class="text-success">Nacionalidad: </b><?php echo $nacionalidad ?><br>
            <b class="text-success">Duracion: </b><?php echo $duracion ?><br>
            <b class="text-success">Genero: </b><?php echo $genero ?><br>
            <b class="text-success">Sinopsis: </b><?php echo $sinopsis ?><br>
        </div>
        <form action=index.html method=''><input type='submit' value='Regresar' class="btn btn-primary"></form>

    </div>
</html>
