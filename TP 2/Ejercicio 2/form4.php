<?php

//Verificacion si el GET recibio algo
if ($_GET){
   
    echo "Hola yo soy ".$_GET['nombre4'].", ".$_GET['apellido4']." tengo ".$_GET['edad4']." y vivo en ".$_GET['direccion4'].".";

    if ($_GET['edad4']>=18){
        echo "Y soy Mayor de Edad";
    }else{
        echo "Y soy Menor de Edad";
    }

    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=index.html method=''><input type='submit' value='Regresar'></form>";
}

?>