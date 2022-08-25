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

    echo 'Titulo: '.$titulo."<br />";
    echo 'Actores: '.$actores."<br />";
    echo 'Director: '.$director."<br />";
    echo 'Guion: '.$guion."<br />";
    echo 'Produccion: '.$produccion."<br />";
    echo 'Año: '.$ano."<br />";
    echo 'Nacionalidad: '.$nacionalidad."<br />";
    echo 'Duracion: '.$duracion."<br />";
    echo 'Genero: '.$genero."<br />";
    echo 'Sinopsis: '.$sinopsis."<br />";
    
     
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
}

?>