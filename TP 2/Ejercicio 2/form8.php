<?php

//Verificacion si el GET recibio algo
if ($_GET){

    $edad = $_GET['edad8'];
    $estudia = isset($_GET['estudia']);
    $precio = 0;

    if ($estudia){
        if($edad<12){
            $precio = 160;
        } else if ($edad>=12){
            $precio = 180;
        }
    } else {
        if ($edad<12){
            $precio = 160;
        } else {
            $precio = 300;
        }
    }
    
    echo "Precio Final de la Entrada: ".$precio."<br>";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
}

?>