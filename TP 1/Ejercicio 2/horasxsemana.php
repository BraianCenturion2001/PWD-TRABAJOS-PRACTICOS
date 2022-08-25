<?php

//Verificacion si el GET recibio algo
if ($_GET){

    $semana = [];
    $horasTotales = 0;

    array_push($semana, $_GET['lunes'], $_GET['martes'], $_GET['miercoles'], $_GET['jueves'], $_GET['viernes']);

    foreach($semana as $dias){
        $horasTotales = $horasTotales + $dias;
    }
   
    echo "Horas totales cursadas por semana: ".$horasTotales;
    echo "<form action=ejercicio2.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=ejercicio2.html method=''><input type='submit' value='Regresar'></form>";
}

?>