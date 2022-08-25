<?php

//Verificacion si el POST recibio algo
if ($_POST){
    
    $numero = $_POST['number'];

    if($numero==0){
        echo "El número ".$numero." es CERO <br />";
        echo "<form action=ejercicio1.html method=''><input type='submit' value='Regresar'></form>";
    } else if ($numero>=1){
        echo "El número ".$numero." es POSITIVO";
        echo "<form action=ejercicio1.html method=''><input type='submit' value='Regresar'></form>";
    } else {
        echo "El número ".$numero." es NEGATIVO";
        echo "<form action=ejercicio1.html method=''><input type='submit' value='Regresar'></form>";
    }

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=ejercicio1.html method=''><input type='submit' value='Regresar'></form>";
}


?>