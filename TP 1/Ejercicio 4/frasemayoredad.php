<?php

//Verificacion si el GET recibio algo
if ($_GET){
   
    echo "Hola yo soy ".$_GET['name'].", ".$_GET['apellido']." tengo ".$_GET['edad']." y vivo en ".$_GET['dire'].".";

    if ($_GET['edad']>=18){
        echo "Y soy Mayor de Edad";
    }else{
        echo "Y soy Menor de Edad";
    }

    echo "<form action=ejercicio4.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=ejercicio4.html method=''><input type='submit' value='Regresar'></form>";
}

?>